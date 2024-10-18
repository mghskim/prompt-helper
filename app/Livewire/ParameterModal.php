<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Parameter;
use Livewire\WithPagination;

class ParameterModal extends Component
{
    public $parameters;
    public $selectedParameters = [];
    public $type;
    protected $listeners = ['resetParameters'];

    public function mount($type)
    {
        $this->type = $type;
        $this->parameters = Parameter::where('type', $type)->get();
    }

    public function selectParameter($parameterId)
    {
        if (($key = array_search($parameterId, $this->selectedParameters)) !== false) {
            unset($this->selectedParameters[$key]);
        } else {
            $this->selectedParameters[] = $parameterId;
        }
        $this->dispatch('parametersUpdated', $this->type, $this->getSelectedParameters());
    }

    public function getSelectedParameters()
    {
        return $this->parameters->whereIn('id', $this->selectedParameters)->pluck('name')->toArray();
    }

    public function resetParameters()
    {
        $this->selectedParameters = [];
        $this->dispatch('parametersUpdated', $this->type, $this->getSelectedParameters());
        $this->dispatch('resetUI');
    }

    public function render()
    {
        return view('livewire.parameter-modal', ['parameters' => $this->parameters]);
    }
}
