<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Auth;

class PostList extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc';

    private $pagination = 9;
    
    #[Url()]
    public $search = '';

    public $userId;

    #[Url()]
    public $displayLikes = false;

    public function mount($id)
    {
        $this->userId = $id;
    }

    public function setSortPost($sort) {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
        $this->resetPage();
    }

    #[On('search')]
    public function updateSearch($search) {
        $this->resetPage();
        $this->search = $search;
    }

    public function clearFilters(){
        $this->search='';
        // $this->category = '';
        $this->resetPage(); 
    }

    #[Computed()]
    public function myPosts() {
        if (!$this->userId) {
            return collect();
        }

        return Post::published()
        ->where('user_id', $this->userId)
        ->where(function ($query) {
            $query->where('title', 'like', "%{$this->search}%")
                  ->orWhere('category', 'like', "%{$this->search}%")
                  ->orWhere('body', 'like', "%{$this->search}%");
        })
        ->orderBy('published_at', $this->sort)
        ->paginate($this->pagination);
    }

    #[Computed()]
    public function myLikes() {
        if (!$this->userId) {
            return collect();
        }

        $user = User::find($this->userId);
        if (!$user) {
            return collect();
        }

        // Fetch the liked posts of the specified user
        return Post::select('posts.*')
        ->join('post_like', 'posts.id', '=', 'post_like.post_id')
        ->where('post_like.user_id', $this->userId)
        ->where(function ($query) {
            $query->where('title', 'like', "%{$this->search}%")
                ->orWhere('category', 'like', "%{$this->search}%")
                ->orWhere('body', 'like', "%{$this->search}%");
        })
        ->orderBy('post_like.created_at', $this->sort) // Order by the time the post was liked
        // ->orderBy('published_at', $this->sort)
        ->paginate($this->pagination);
    }

    public function showPosts()
    {
        $this->displayLikes = false;
    }

    public function showLikes()
    {
        $this->displayLikes = true;
    }

    public function render()
    {
        return view('livewire.post-list', [
            'posts' => $this->displayLikes ? $this->myLikes() : $this->myPosts(),
        ]);
    }
}
