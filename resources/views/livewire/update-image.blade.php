
<div class="content-center px-5">
    <div class="flex mb-4 w-full max-w h-80 bg-gray-200 mt-3 md:mt-0">
        @if($newImage)
            <img src="{{ $newImage->temporaryUrl() }}" alt="" class="object-contain w-full h-lg dark:bg-gray-800">
        @else($post->image)
            <img wire:model='image' src="{{ $post->image instanceof \Livewire\TemporaryUploadedFile ? $post->image->temporaryUrl() : secure_asset('https://raw.githubusercontent.com/KimGabs/dalle-helper/refs/heads/project/storage/app/public/' . $post->image) }}" alt="" class="object-contain w-full h-full dark:bg-gray-800">
        @endif
    </div>
    <input wire:model='newImage' accept="image/png, image/jpeg, image/jpg" type="file" id="image" name="newImage" class="w-full ring-1 ring-inset ring-gray-300 bg-gray-300 text-sm rounded block p-2"/>
</div>