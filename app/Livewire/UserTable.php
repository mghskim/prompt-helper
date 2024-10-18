<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class UserTable extends Component
{
    use WithPagination;

    public User $users_; 

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
    public function users() {
        return User::CreatedAt()
        ->orderBy($this->sortColumn, $this->sortDirection)
        ->where(function ($query) {
            $query->where('name', 'like', "%{$this->search}%")
            ->orWhere('email', 'like', "%{$this->search}%");
        })
        ->paginate(8);
    }

    public function render()
    {
        return view('livewire.user-table');
    }
}
