<div class="mt-5 comments-box">
    <h2 class="text-2xl font-semibold text-gray-900 my-5 dark:text-white">{{ $post->numComments() }} Comments</h2>
    @auth
    <textarea wire:model="comment"
        class="w-full rounded-lg p-4 bg-gray-50 
        resize-none	
        focus:outline-none text-md 
        text-gray-700 
        border-gray-200 
        placeholder:text-gray-400"
        cols="30" rows="2" placeholder="Add a comment"></textarea>
    <button wire:click="postComment"
        class="mt-3 inline-flex items-center justify-center h-10 px-4 font-medium tracking-wide text-white transition duration-200 
        bg-gray-900 rounded-lg hover:bg-gray-800 focus:shadow-outline focus:outline-none dark:bg-orange-600 dark:hover:bg-orange-700 w-full lg:w-auto">
        Post Comment
    </button>
    @else
        <a wire:navigate class="text-yellow-500 underline py-1" href="{{ route('login') }}"> Login to Post Comments</a>
    @endauth
    <div class="user-comments mt-7 user-comments">
        @forelse ($this->comments as $comment)
            <div class="comment [&:not(:last-child)]:border-b border-gray-100 p-3 my-2 rounded-md dark:bg-gray-700 dark:border-gray-700">
                <div class="user-meta flex mb-4 text-md items-center">
                    <img class="w-10 h-10 rounded-full mr-3 object-cover" src="{{ $comment->user->profile_photo_url }}" alt="mn">
                    <span class="mr-1 font-semibold dark:text-white">{{ $comment->user->name }}</span>
                    <span class="text-gray-500 dark:text-white">• {{ $comment->created_at->diffForHumans() }}</span>
                </div>
                <div class="text-justify text-black text-md dark:text-white">
                    {{ $comment->comment }}
                </div>
            </div>
        @empty
        <div class="text-gray-500 text-center">
            <span> No Comments Posted</span>
        </div>
        @endforelse
    </div>
    @error('image') 
            <x-banner :style="'danger'" :message="$message" />
        @enderror
    <div class="my-2">
        {{-- {{ $parameters-> }} --}}
        {{ $this->comments->onEachSide(5)->links(data : ['scrollTo' => false]) }}


    </div>
</div>