<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Parameter;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class ParamTable extends Component
{

    use WithPagination;
    
    public Parameter $params;
    
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
    public function parameters() {
        return Parameter::CreatedAt()
        ->orderBy($this->sortColumn, $this->sortDirection)
        ->where(function ($query) {
            $query->where('name', 'like', "%{$this->search}%")
            ->orWhere('type', 'like', "%{$this->search}%");
        })
        ->paginate(8);
    }

    public function render()
    {
        return view('livewire.param-table');
    }
}
