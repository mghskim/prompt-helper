<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class PostTable extends Component
{
    use WithPagination;

    public Post $post_; 

    #[Url()]
    public $sortColumn = 'created_at';
    
    #[Url()]
    public $sortDirection = 'asc'; 

    #[Url()]
    public $search = '';

    #[On('search')]
    public function updateSearch($search) {
        $this->search = $search;
    }

    public function setSort($field) {
        if ($this->sortColumn === $field) {
        $this->sortDirection = ($this->sortDirection === 'asc') ? 'desc' : 'asc';
        } else {
            $this->sortColumn = $field;
            $this->sortDirection = 'asc';

        }

        $this->resetPage();
    }

    #[Computed()]
    public function posts() {
        return Post::published()
        ->when($this->sortColumn === 'author', function ($query) {
            $query->join('users', 'posts.user_id', '=', 'users.id')
                ->select('posts.*')
                ->orderBy('users.name', $this->sortDirection);
        }, function ($query) {
            $query->orderBy($this->sortColumn, $this->sortDirection);
        })
        ->where(function ($query) {
            $query->where('title', 'like', "%{$this->search}%")
                ->orWhere('category', 'like', "%{$this->search}%")
                ->orWhereHas('author', function ($query) {
                    $query->where('name', 'like', "%{$this->search}%");
                });
        })
        ->paginate(8);
    }

    public function render()
    {
        return view('livewire.post-table');
    }
}
