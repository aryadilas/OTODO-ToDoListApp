<div>
    @if(count($tasks) > 0)
        @foreach($tasks as $task)
        <div class="flex w-full flex-col gap-5 py-2 px-5">
            
            <div class="flex w-full items-center justify-between">
                
                <div class="flex items-center gap-2">
                    
                    @if( $task->status == "Listed" )
                    
                    <img onmouseup="addRing(event);" onmousedown="removeRing(event);" wire:click="check( {{ $task->id }} )" class="rounded-full h-5 w-5 cursor-pointer" title="Check" src="{{ asset('/assets/boxicons/bx-circle.svg') }}" alt="">
                    <p>{{ $task->task }}</p>
                    
                    @else
                    
                    <img onmouseup="addRing(event);" onmousedown="removeRing(event);" wire:click="uncheck( {{ $task->id }} )" class="rounded-full h-5 w-5 cursor-pointer" title="Uncheck" src="{{ asset('/assets/boxicons/bx-check-circle.svg') }}" alt="">
                    <p>{{ $task->task }}</p>
                    
                    @endif

                </div>

                <img wire:click="deleteTask( {{ $task->id }} )" src="{{ asset('/assets/boxicons/bx-trash.svg') }}" title="Delete" alt="" class="cursor-pointer w-5 h-5">
                
            </div>

        </div>
        @endforeach
    @else

        <div class="flex w-full flex-col gap-5 py-2 px-5">
            
            <div class="flex w-full items-center justify-center">
            
                <p>There are no tasks to display</p>

            </div>

        </div>

    @endif

    <script>
        function addRing(event){
            event.target.classList.add("ring-2");
        }
        function removeRing(event){
            event.target.classList.remove("ring-2");
        }
    </script>
    
</div>
