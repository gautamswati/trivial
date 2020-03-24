<div>
    <div class="min-h-screen bg-pink-600 flex justify-center items-center p-4 m-4">
        @if ($count)
        <button class="text-5xl bg-blue-400 w-24 rounded-full p-2 h-24 text-center hover:bg-white"
            wire:click="showPrevious"> < </button>
        @endif
        <div class="max-w-3/5 mx-3">
            <h1 class="text-5xl px-2 text-center text-white"> {{ $trivia[$count] }}</h1>
        </div>
        @if ($count < 99)
        <button wire:click="showNext" class="text-5xl bg-blue-400 w-24 rounded-full p-2 h-24 text-center hover:bg-white"
        > > </button>
        @endif
    </div>
</div>
