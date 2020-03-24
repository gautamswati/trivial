<div>
    <div class="min-h-screen bg-pink-600 flex justify-center items-center p-4 m-4">
        <button class="text-5xl bg-blue-400 w-24 rounded-full p-2 h-24 text-center"
            wire:click="showPrevious"> < </button>
        <div class="max-w-3/5 mx-3">
            <h1 class="text-5xl px-2 text-center"> {{ $trivia[$count] }}</h1>
        </div>
        <button wire:click="showNext" class="text-5xl bg-blue-400 w-24 rounded-full p-2 h-24 text-center focus:bg-white"
            > > </button>
    </div>
</div>
