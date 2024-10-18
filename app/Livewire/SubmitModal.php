<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class SubmitModal extends Component
{
    use WithFileUploads;

    public $image;

    public function finishUpload($name, $tmpPath)
    {
        $this->cleanupOldUploads();

        $files = collect($tmpPath)->map(function ($i) {
            return TemporaryUploadedFile::createFromLivewire($i);
        })->toArray();
        $this->emitSelf('upload:finished', $name, collect($files)->map->getFilename()->toArray());
 
        $files = array_merge($this->getPropertyValue($name), $files);
        $this->syncInput($name, $files);
    }


    public function render()
    {
        $categories = config('post.categories');
        $aiModels = config('ai_models.models');
        return view('livewire.submit-modal', compact('aiModels', 'categories'));
    }
}
