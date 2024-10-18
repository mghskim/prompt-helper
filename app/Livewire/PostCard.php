<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Attributes\Computed;

class PostCard extends Component
{
    public Post $post;
    public $perPage = 14;

    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public $search = '';

    #[On('search')]
    public function updateSearch($search) {
        $this->search = $search;
    }

    #[Computed()]
    public function posts() 
    {
        return Post::published(10)
        ->orderBy('published_at', $this->sort)
        ->where(function ($query) {
            $searchPattern = '[[:<:]]' . preg_quote($this->search, '/') . '[[:>:]]';
            $query->where('title', '~*', $searchPattern)
                  ->orWhere('body', '~*', $searchPattern)
                  ->orWhere('ai_model', 'ILIKE', "%{$this->search}%");
        })->take($this->perPage)->get();
    }

    #[On('loadMore')]
    public function loadMore()
    {
        $this->perPage += 14;
    }

    // #[On('loadMore')]
    // public function loadMore()
    // {
    //     $this->perPage += 14; // Adjust the number of posts you want to load
    //     return Post::published()
    //         ->orderBy('published_at', $this->sort)
    //         ->where(function ($query) {
    //             $query->where('title', 'like', "%{$this->search}%")
    //                 ->orWhere('body', 'like', "%{$this->search}%")
    //                 ->orWhere('category', 'like', "%{$this->search}%")
    //                 ->orWhere('ai_model', 'like', "%{$this->search}%");
    //         })
    //         ->take($this->perPage)
    //         ->get();
    // }

    public function render()
    {
        return view('livewire.post-card', [
            'posts' => $this->posts(),
        ]);
    }
}
