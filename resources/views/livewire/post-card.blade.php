<div>
    {{-- <div class="grid w-full"> --}}
        <div class="columns-1 gap-6 sm:columns-2 sm:gap-3 md:columns-3 lg:columns-4 [&>figure:not(:first-child)]:mt-3">
        @foreach ($this->posts as $post)
            <x-posts.home-post :post="$post" />
            @endforeach
        </div>
        {{-- <div class="page-load-status">
            <div class="loader-ellips infinite-scroll-request">
              <span class="loader-ellips__dot"></span>
              <span class="loader-ellips__dot"></span>
              <span class="loader-ellips__dot"></span>
              <span class="loader-ellips__dot"></span>
            </div>
            <p class="infinite-scroll-last text-center mt-2">End of content</p>
            <p class="infinite-scroll-error">No more pages to load</p> --}}
    {{-- </div> --}}
    <div x-intersect.half="$wire.loadMore()" class="border-4 border-transparent text-center content-center">
    </div>
</div>