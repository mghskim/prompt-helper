<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Support\Str;

class HelperController extends Controller
{

    private function authorizePostUpdate(Post $post) 
    {
        return auth::user()->id === $post->user_id;
    }

    public function index() {
        return view('helper.index');
    }

    public function create(Request $request) {
        if (!auth::check()) {
            return redirect('/login')->with('login-first-publish', 'Please login first to publish your prompt.');
        }

        $incomingFields = $request->validate([
            'body' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:4096',
            'title' => 'nullable|string',
            'post_category' => 'required|string',
            'ai_model' => 'required|string|max:255',
            'version' => 'required|string|max:255',
        ]);

        $body = $incomingFields['body'];
        $first20Words = implode(' ', array_slice(str_word_count($body, 2), 0, 20));
        if (str_word_count($body) <= 20) {
            $first20Words = $body;
        }

        $current_date_time = Carbon::now()->toDateTimeString();

        $imagePath = null;
            if ($request->hasFile('image')) {
                $imageFile = $request->file('image');
                $storePath = 'public/uploads';
                $filename = str::slug($first20Words . "-" . $incomingFields['ai_model'] . "-" . $incomingFields['version'] . "-" . uniqid());
                $originFilename = $filename . '.' . $imageFile->extension();
                $imageFile->storeAs($storePath, $originFilename);
                
                $storedPath = storage_path("app/public/uploads/{$originFilename}");
                list($width, $height) = getimagesize($storedPath);
                
                $imagePath = "uploads/{$originFilename}";
             }


        $first8Words = substr($filename, 0, 8);
        $slug = str::slug($incomingFields['ai_model'] . "-" . $incomingFields['version'] . "-" . str_replace(' ', '-', $first20Words));

        Post::create([
            'user_id' => Auth::id(),
            'body' => $incomingFields['body'],
            'image' => $imagePath,
            'title' => $incomingFields['title'],
            'category' => $incomingFields['post_category'],
            'ai_model' => $incomingFields['ai_model'],
            'version' => $incomingFields['version'],
            'width' => $width,
            'height' => $height,
            'slug' => $slug,
            'published_at' => $current_date_time
        ]);
        
        // session()->flash('success', 'User Created Success!');
        return redirect()->route('post.index', auth::id())->with('success', 'Post updated successfully.');

        // return view('livewire.submit-modal');
    }
}
