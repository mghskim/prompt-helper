<!-- resources/views/livewire/parent-component.blade.php -->
<div class="grid grid-rows-3 m-auto grid-flow-row md:grid-rows-2 lg:grid-rows-1 md:grid-flow-col gap-2 my-5 h-full justify-items-center items-center">
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Film types'], key('film-types'))
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Styles'], key('styles'))
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Vibes'], key('vibes'))
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Lighting'], key('lighting'))
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Artists'], key('artists'))
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Colors'], key('colors'))
    </div>
    <div class="col-span-1 w-full">
        @livewire('parameter-modal', ['type' => 'Materials'], key('materials'))
    </div>
    <textarea class="hidden" id="buttonsInput" name="buttonsInput" rows="3" cols="80" class="p-2" readonly>{{ implode(', ', $this->getCombinedParameters()) }}</textarea>
</div>