
<div>
@if($exportOption)
    <div x-data="{show: false}"
         @click.away="show = false">
        <button @click="show = ! show" class="block w-full bg-white-200 text-gray-700 border border-gray-300 rounded py-1.5 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <div class="flex">
                <span>
                    <x-livewire-powergrid::icons.export/>
                </span>
                <x-livewire-powergrid::icons.down/>
            </div>
        </button>

        <div x-show="show"
             x-transition:enter="transform duration-200"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transform duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90"
             class="mt-2 py-2 w-48 bg-white shadow-xl absolute z-10">

            @if(in_array('excel',$exportType))
                <a wire:click="exportToXLS()" href="#"
                   class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black-200">Excel</a>
            @endif
            @if(in_array('csv',$exportType))
                <a wire:click="exportToCsv()" href="#"
                   class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-black-200">Csv</a>
            @endif
        </div>

    </div>
@endif
</div>