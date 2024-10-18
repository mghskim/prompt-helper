@props(['post'])
        <figure class="relative group overflow-hidden rounded-lg">
            <a href="{{ route('post.show', $post->slug) }}">
                <img
                  src="{{ "https://raw.githubusercontent.com/KimGabs/dalle-helper/refs/heads/project/storage/app/public/"  . $post->image }}" 
                  alt="{{ $post->title }}"
                  class="w-full h-96 group transition-all duration-200 object-cover"/>
            </a>
            <livewire:like-button :key="'like-button-'.$post->id.now()" :post="$post" :styleDiv="'styleDiv-a'" :styleButton="'styleButton-a dark:bg-gray-800 dark:hover:bg-gray-800'" :likeCount="'likeCount-listpost'" />
            <figcaption
              class="flex w-full p-3 absolute -bottom-20 left-0 bg-gradient-to-t from-gray-800 text-white items-center invisible group-hover:bottom-0 group-hover:visible transition-all duration-300">
              <div class="w-full flex flex-col gap-2">
                <p class="text-sm font-semibold text-shadow-custom">
                    @if (empty($post->title))
                    <a href="{{ route('post.show', $post->slug) }}">
                        {{ $post->getExcerptTitle() }}
                    </a>    
                    @else
                    <a href="{{ route('post.show', $post->slug) }}">
                        {{ $post->title }}
                    </a>
                    @endif
                </p>
                <div class="flex gap-1 text-sm justify-between">
                    <div class="flex text-sm items-center">
                        <img class="fade-in-image w-6 rounded-full mr-2"
                            src="{{ $post->author->profile_photo_url }}"
                            alt="{{ $post->author->name }}"
                            >
                        <span class="mr-1 text-xs">{{ $post->author->name }}</span>
                        <span class="text-white text-xs inline-flex"> • {{ $post->published_at->diffForHumans() }}
                        </span>
                    </div>
                    <div wire:poll.120s class="article-meta flex text-sm items-center">
                        <span class="text-white text-xs inline-flex items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 mr-1">
                                <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                              </svg>                              
                            {{ $post->views  }}

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 mx-1">
                                <path d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z" />
                              </svg>            
                              <span>
                                  {{ $post->likes()->count() }}
                              </span>
                        </span>
                    </div>
                </div>
              </div>
 
            </figcaption>
          </figure>