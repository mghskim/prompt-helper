<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class LikeButton extends Component
{
    public Post $post;

    public $styleDiv;
    public $styleButton;
    public $likeCount;

    public function mount($styleDiv, $styleButton, $likeCount)
    {
        $this->styleDiv = $styleDiv;
        $this->styleButton = $styleButton;
        $this->likeCount = $likeCount;
    }

    public function toggleLike()
    {
        if(auth()->guest()){
            return $this->redirect(route('login'), true);
        }

        $user = auth()->user();

        $user->likes()->toggle($this->post->id);

        // if($user->hasLiked($this->post)){
        //     $user->likes()->detach($this->post);
        //     return;
        // }
        
        // $user->likes()->attach($this->post); 
    }

    public function render()
    {
        return view('livewire.like-button');    
    }
}
