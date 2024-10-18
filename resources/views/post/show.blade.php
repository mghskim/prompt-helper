@props(['post'])
<x-app-layout>
    <div class="w-full min-h-screen">
      <div class="container mx-auto px-4 py-10">
        <div class="grid sm:grid-cols-1 grid-flow-row lg:grid-cols-2 gap-6">
            @if(session('success'))
                <p class="text-green-700 pb-6">{{ session('success') }}</p>
            @endif
            {{-- Left Part --}}
            <div class="col-2 w-full px-2">
                <div x-data="{ modalOpen: false, imageSrc: '' }">
                    <img x-on:click="modalOpen = true; imageSrc = '{{ 'https://raw.githubusercontent.com/KimGabs/dalle-helper/refs/heads/project/storage/app/public/' . $post->image }}'" src="{{ 'https://raw.githubusercontent.com/KimGabs/dalle-helper/refs/heads/project/storage/app/public/' . $post->image }}" alt="{{ $post->title }}" class="w-full h-auto object-cover rounded-sm">

                    {{-- Modal --}}
                    <div 
                    x-show="modalOpen" 
                    x-cloak
                    x-transition
                    class="fixed inset-0 z-50 flex items-center justify-center px-4 text-center bg-neutral-800 bg-opacity-75"
                >
                    <!-- Background overlay that closes the modal when clicked -->
                    <div 
                        @click="modalOpen = false" 
                        x-show="modalOpen" 
                        class="fixed inset-0 bg-gray-500 bg-opacity-40"
                    ></div>

                        <div class="absolute top-3 right-6">
                            <button x-on:click="modalOpen = !modalOpen" class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300 ease-out">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-zinc-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                  </svg>                                  
                            </button>
                        </div>

                        <!-- Image content inside the modal -->
                        <div class="relative py-2">
                            <img :src="imageSrc" class="max-w-full max-h-screen rounded shadow-lg">
                        </div>
                    </div>
                
                </div>
                    <livewire:post-comments :key="'comments' . $post->id" :$post />
            </div>  
            {{-- Right Part --}}
            <div class="col-2 grid-cols-1 w-full">
                {{-- Author Profile --}}
                <div class="row-auto justify-between mb-4">
                    <div class="flex flex-col sm:flex-row justify-between">
                        <div class="inline-flex self-center items-center">
                            <a href="{{ route('post.index', $post->author->id) }}">
                                <img src="{{ $post->author->profile_photo_url }}" class="h-10 rounded-full" alt="Profile of {{ $post->author->name }}">
                            </a>
                            <div class="inline-flex ml-2 dark:text-white">
                                <a href="{{ route('post.index', $post->author->id) }}" class="font-medium hover:text-orange-600">
                                    <span>{{ $post->author->name }}</span>
                                </a>
                                <div class="ml-1">
                                    <span class="mx-1">
                                        |
                                    </span>
                                    <span>
                                       Published at {{ $post->readablePublished() }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3 self-center inline-flex items-center dark:text-gray-200">
                            <div class="inline-flex items-center">
                                <span class="text-md inline-flex items-center text-center font-mono">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 mx-1">
                                        <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                        <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                                      </svg>               
                                      {{ $post->views }}
                                    <livewire:like-button :key="'like-button-'.$post->id.now()" :post="$post" :styleDiv="'styleDiv-post'" :styleButton="'styleButton-post'" :likeCount="'likeCount-post'" />
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="size-5 mx-1 text-black">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>      --}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @if ( $post->title )
                <div class="pb-5">
                    <h1 class="text-xl font-bold dark:text-white">
                        {{ $post->title }}
                    </h1>
                </div>
                @endif
                {{-- Prompt Container --}}
                <div class="row-auto bg-white overflow-wrap break-word border border-gray-200 rounded-lg px-8 py-6 self-center dark:bg-gray-700 dark:text-white dark:border-gray-800">
                    {{-- The Prompt --}}
                    <div class="prompt">
                        <b id="postBody">{{ $post->body }}</b>
                    </div>
                    {{-- The Copy Button --}}
                    <div class="prompt-buttons mt-4 text-center">
                        <button onclick="copyToClipboard()" class="text-white font-black inline-flex items-center bg-orange-600  hover:bg-orange-700 focus:ring-transparent rounded-lg px-5 py-2.5 me-2 mb-2 focus:outline-none">
                            <svg class="w-6 h-6 dark:text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M18 3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1V9a4 4 0 0 0-4-4h-3a1.99 1.99 0 0 0-1 .267V5a2 2 0 0 1 2-2h7Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M8 7.054V11H4.2a2 2 0 0 1 .281-.432l2.46-2.87A2 2 0 0 1 8 7.054ZM10 7v4a2 2 0 0 1-2 2H4v6a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3Z" clip-rule="evenodd"/>
                              </svg>                                                       
                            Copy
                        </button>
                        @if(auth()->check() && auth()->user()->id === $post->user_id)
                            <a href="{{ route('post.edit', $post->id) }}">
                                <button class="text-white font-black inline-flex items-center bg-orange-600  hover:bg-orange-700 focus:ring-transparent rounded-lg px-5 py-2.5 me-2 mb-2 focus:outline-none">
                                    <svg class="w-6 h-6 dark:text-white mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                        <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                      </svg>                                                                                        
                                    Edit
                                </button>
                            </a>
                        @endif
                    </div>
                </div>
                {{-- Image Dimenstion Container --}}
                <div class="bg-white border border-gray-200 rounded-lg mt-5 text-left py-3 px-4 self-center dark:bg-gray-700 dark:text-white dark:border-gray-800">
                    <h3 class="text-md mb-2 text-gray-500 font-bold uppercase text-center">Image Dimension</h3>
                    <div class="text-center">
                        <span class="inline-flex items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 mr-1">
                                <path fill-rule="evenodd" d="M1 5.25A2.25 2.25 0 0 1 3.25 3h13.5A2.25 2.25 0 0 1 19 5.25v9.5A2.25 2.25 0 0 1 16.75 17H3.25A2.25 2.25 0 0 1 1 14.75v-9.5Zm1.5 5.81v3.69c0 .414.336.75.75.75h13.5a.75.75 0 0 0 .75-.75v-2.69l-2.22-2.219a.75.75 0 0 0-1.06 0l-1.91 1.909.47.47a.75.75 0 1 1-1.06 1.06L6.53 8.091a.75.75 0 0 0-1.06 0l-2.97 2.97ZM12 7a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" clip-rule="evenodd" />
                              </svg>                              
                            {{ $post->height }}x{{ $post->width }}
                        </span> 
                    </div>
                </div>

                {{-- Model Used Container--}}
                <div class="bg-white border border-gray-200 rounded-lg mt-5 text-left py-3 px-4 self-center dark:bg-gray-700 dark:text-white dark:border-gray-800">
                    <h3 class="text-md mb-2 text-gray-500 font-bold uppercase text-center">Model Used</h3>
                    <div class="text-center">
                        <span class="inline-flex items-center text-center">
                            🤖 {{ $post->ai_model }} 
                        </span>
                        <span class="text-gray-800 dark:text-white">{{ $post->version }}</span>
                    </div>
                </div>
                  {{-- Category Container--}}
                <div class="bg-white border border-gray-200 rounded-lg mt-5 text-left py-3 px-4 self-center dark:bg-gray-700 dark:text-white dark:border-gray-800">
                    <h3 class="text-md mb-2 text-gray-500 font-bold uppercase text-center">Prompt Category</h3>
                    <div class="text-center">
                        <span>{{ $post->category }} </span>
                    </div>
                </div>

                  {{-- Collection Container--}}
                  <div class="bg-white border border-gray-200 rounded-lg mt-5 text-left py-3 px-4 self-center dark:bg-gray-700 dark:text-white dark:border-gray-800">
                    <a href="{{ route('post.index', $post->author->id) }}"><h3 class="text-md mb-2 text-gray-500 font-bold uppercase text-center">Author's Collection</h3></a>
                        @if($authorPosts->count())
                        <div class="grid grid-cols-3 gap-0">
                            @foreach($authorPosts as $authorPost)
                            <div class="aspect-square">
                                <a href="{{ route('post.show', $authorPost->slug) }}" class=" inset-0">
                                    <img src="{{ 'https://raw.githubusercontent.com/KimGabs/dalle-helper/refs/heads/project/storage/app/public/' . $authorPost->image }}" alt="{{ $authorPost->title }}" class="w-full h-full object-cover">
                                </a>
                            </div>
                            @endforeach
                    @else
                    
                            <span>No posts available by this author.</span>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        
      </div>

    </div>

{{--     
    <div class="container">
        <div class="post">
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
            @endif
            <p>Published on: {{ $post->published_at ? $post->published_at->format('F j, Y') : 'Not published' }}</p>

            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
        </div>
    </div> --}}
</x-app-layout>

<script>
    function copyToClipboard() {
        // Get the text from the element
        var bodyText = document.getElementById('postBody').innerText;
        
        // Create a temporary textarea element to hold the text
        var tempTextArea = document.createElement('textarea');
        tempTextArea.value = bodyText;
        
        // Append the textarea to the body
        document.body.appendChild(tempTextArea);
        
        // Select the text inside the textarea
        tempTextArea.select();
        tempTextArea.setSelectionRange(0, 99999); // For mobile devices
        
        // Copy the text to the clipboard
        document.execCommand('copy');
        
        // Remove the textarea element from the document
        document.body.removeChild(tempTextArea);
        
        // Optionally, provide feedback to the user
        alert('Copied to clipboard!');
    }
</script>