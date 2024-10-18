<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class PostController extends Controller
{
    private function authorizePostUpdate(Post $post) 
    {
        return Auth::user()->id === $post->user_id;
    }


    public function index() {

        $posts = Post::paginate(10); // 10 items per page

        return view('post.index', compact('posts'));
    }

    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        
        $post = Post::findOrFail($id);

        if(!$this->authorizePostUpdate($post)) {
            return redirect()->route('home');
        }
        
        $categories = config('post.categories');
        $aiModels = config('ai_models.models');
        return view('post.edit', compact('aiModels', 'categories', 'post'));
    }

    public function update(Request $request, Post $post)
    {
        // Validate and update the parameter
        $incomingFields = $request->validate([
            'body' => 'required|string',
            'newImage' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'title' => 'nullable|string',
            'post_category' => 'required|string',
            'ai_model' => 'nullable|string|max:255',
            'version' => 'nullable|string|max:255',], [
                'version.required' => 'The version field is required when the AI model is provided.',
            ]);

        // Conditionally require 'version' if 'ai_model' is present
        if (!empty($incomingFields['ai_model'])) {
            $request->validate([
                'version' => 'required|string|max:255',
            ]);
        }

        $body = $incomingFields['body'];
        $first20Words = implode(' ', array_slice(str_word_count($body, 2), 0, 20));
        if (str_word_count($body) <= 20) {
            $first20Words = $body;
        }

        $imagePath = null;
            if ($request->hasFile('newImage')) {

                if ($post->image && Storage::exists('public/' . $post->image)) {
                    Storage::delete('public/' . $post->image);
                }

                $imageFile = $request->file('newImage');
                $extension = $imageFile->extension();
                $storePath = 'public/uploads';
                if($incomingFields['ai_model']){
                    $filename = str::slug($first20Words . "-" . $incomingFields['ai_model'] . "-" . $incomingFields['version'] . "-" . uniqid());
                }else{
                    $filename = str::slug($first20Words . "-" .  $post->model . "-" . $post->version  . "-" . uniqid());
                }
                $originFilename = $filename . '.' . $extension;
                $imageFile->storeAs($storePath, $originFilename);
                
                $storedPath = storage_path("app/public/uploads/{$originFilename}");
                list($width, $height) = getimagesize($storedPath);
                
                $imagePath = "uploads/{$originFilename}";
            }
            else {
                $imagePath = $post->image;
                $filename = pathinfo($imagePath, PATHINFO_FILENAME);
                $width = $post->width;
                $height = $post->height;
            }

        $first8Words = substr($filename, 0, 8);
        if($incomingFields['ai_model']){
            $slug = str::slug($first8Words . "-" . $incomingFields['ai_model'] . "-" . $incomingFields['version'] . "-" . str_replace(' ', '-', $first20Words));
        }
        else{
            $slug = str::slug($first8Words . "-" . $post->model . "-" . $post->version . "-" . str_replace(' ', '-', $first20Words));
        }
        
        $incomingFields['image'] = $imagePath;
        
        if($width){
            $incomingFields['width'] = $width;
            $incomingFields['height'] = $height;
        }
        
        $incomingFields['slug'] = $slug;

        $post->update(array_filter($incomingFields));

        return redirect()->route('post.index', auth::id())->with('success', 'Post updated successfully.');
    }

    public function show($identifier)
    {
        try {
            if (is_numeric($identifier)) {
                $post = Post::findOrFail($identifier);
            } else {
                $post = Post::where('slug', $identifier)->firstOrFail();
            }
    
            $post->incrementReadCount();
            $authorPosts = $post->author->posts()
            ->where('id', '!=', $post->id)
            ->latest() // Order by latest
            ->take(9)  // Limit to 9 posts
            ->get();
        
            return view('post.show', [
                'post' => $post,
                'authorPosts' => $authorPosts,
            ]);
        } catch (ModelNotFoundException $e) {
            abort(404, 'Post not found');
        }
    }
}
