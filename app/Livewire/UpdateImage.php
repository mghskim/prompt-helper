<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class UpdateImage extends Component
{
    use WithFileUploads;

    public $newImage;
    public Post $post;


    public function mount(Post $post)
    {
        // Assign the passed $post to the component's property
        $this->post = $post;
    }

    public function updatedNewImage()
    {
        // Validate the image (optional)
        $this->validate([
            'newImage' => 'image|max:1024', // Example validation: max 1MB
        ]);
    }


    public function render()
    {
        return view('livewire.update-image');
    }
}
