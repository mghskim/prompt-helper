<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $stylesParameters = [];
    public $vibesParameters = [];
    public $filmParameters = [];
    public $lightingParameters = [];
    public $artistsParameters = [];    
    public $colorsParameters = [];
    public $materialsParameters = [];

    protected $listeners = ['parametersUpdated'];

    public function parametersUpdated($type, $parameters)
    {
        if ($type == 'Vibes') {
            $this->vibesParameters = $parameters;
        }
        else if ($type == 'Styles') {
            $this->stylesParameters = $parameters;
        }
        else if ($type == 'Film types') {
            $this->filmParameters = $parameters;
        }
        else if ($type == 'Lighting') {
            $this->lightingParameters = $parameters;
        }
        else if ($type == 'Artists') {
            $this->artistsParameters = $parameters;
        }
        else if ($type == 'Colors') {
            $this->colorsParameters = $parameters;
        }
        else if ($type == 'Materials') {
            $this->materialsParameters = $parameters;
        }
    }

    public function getCombinedParameters()
    {
        return array_merge($this->filmParameters, $this->stylesParameters, $this->vibesParameters, 
        $this->lightingParameters, $this->artistsParameters, $this->colorsParameters, $this->materialsParameters);
    }

    public function render()
    {
        return view('livewire.parent-component');
    }
}
