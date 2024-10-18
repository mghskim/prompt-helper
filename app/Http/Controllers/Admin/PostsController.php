<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    use WithFileUploads;

    public function index() {
        if (!auth::check()) {
            return redirect('/login');
        }

        $posts = Post::paginate(10); // 10 items per page

        return view('admin.posts.index', compact('posts'));
    }

    public function edit(Post $post)
    {
        if (!auth::check()) {
            return redirect('/login');
        }
        
        
        $categories = config('post.categories');
        $aiModels = config('ai_models.models');
        return view('admin.posts.edit-post', compact('aiModels', 'categories', 'post'));
    }

    public function update(Request $request, Post $post)
    {
        
        // return redirect()->route('parameters.index')->with('success', $request->role);
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

                $imagePath = $request->file('newImage')->store('/uploads', 'public');
                $filename = pathinfo($imagePath, PATHINFO_FILENAME);
                list($width, $height) = getimagesize('storage/' . $imagePath);
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

        // $post->update([
        //     'body' => $incomingFields['body'],
        //     'image' => $incomingFields['image'],
        //     'title' => $incomingFields['title'],
        //     'category' => $incomingFields['post_category'],
        //     'ai_model' => $incomingFields['ai_model'],
        //     'version' => $incomingFields['version'],
        //     'width' => $incomingFields['width'],
        //     'height' => $incomingFields['height'],
        //     'slug' => $incomingFields['slug']
        // ]);

        $post->update(array_filter($incomingFields));

        return redirect()->route('posts.index')->with('success', 'User updated successfully.');
    }

    public function destroy(Post $post)
    {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }

            $post->delete();
        
        // Delete the user
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
