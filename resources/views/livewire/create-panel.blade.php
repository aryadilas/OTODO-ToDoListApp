<div>

    <form wire:keydown.prevent.enter="store" wire:submit.prevent="store" id="create-panel">
        
        <div class="flex flex-col justify-center border-b p-4">

            <div class="flex w-full items-center justify-center gap-10 py-10 select-none text-[#1A2E6D]">

                <img wire:click="$emit('beforeDay')" id="yesterday" src="{{ asset('/assets/boxicons/bxs-left-arrow.svg') }}" class=" cursor-pointer">

                <div class="flex flex-col text-center cursor-pointer gap-2">
                    <span class="text-xl font-semibold" id="hari">{{ $hari }}</span>
                    <input wire:model="tanggal"  class="outline-none bg-[#EEEDFF] p-2 rounded-md text-center select-none" type="date" name="tanggal" id="tanggal">
                </div>

                <img wire:click="$emit('nextDay')" id="tomorrow" src="{{ asset('/assets/boxicons/bxs-right-arrow.svg') }}" class=" cursor-pointer">

            </div>

            <div class="w-full items-center bg-[#EEEDFF] max-w-sm flex py-2 px-4 gap-2 mx-auto rounded-lg">

                <img src="{{ asset('/assets/boxicons/bx-list-plus.svg') }}" alt="" class="w-5 h-5">
                <input @input="updateHari();" wire:model="task" id="task" class="outline-none w-full bg-[#EEEDFF] px-2 py-1 text-sm" type="text" name="" id="" placeholder="Add a Task..." />

            </div>

        </div>
        
    </form>

</div>
