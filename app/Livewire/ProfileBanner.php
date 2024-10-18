<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProfileBanner extends Component
{
    public $user;
    public $id;


    public function mount($id)
    {
        $this->id = $id;
        $this->user = User::find($this->id); // Fetch user data based on ID
    }

    public function render()
    {
        return view('livewire.profile-banner');
    }
}
