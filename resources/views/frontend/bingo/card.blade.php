<div class="grid grid-cols-5 gap-4">
    @foreach($bingoCard->tiles as $tile)
    
        <div style="background-image:url({{ $tile->getFirstMediaUrl("*") }});box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.5);" class="bg-contain bg-no-repeat bg-center tile-container flex flex-col h-full rounded-lg flex justify-center align-center bg-white p-2 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"> <!-- Fixed height and width for each tile -->
            @include('frontend.bingo.tile', ['tile' => $tile])
        </div>
    @endforeach
</div>
