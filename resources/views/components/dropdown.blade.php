<div x-data="{ show: false }" @click.away = "show = false">
    
    {{-- Trigger --}}
    <button 
        @click="show = ! show" 
        class="py-2 pl-3 pr-9 text-sm font-semibold flex"
        > 
            <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" 
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path 
                    fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" 
                        clip-rule="evenodd"
                    ></path>
            </svg>
    </button>

    {{-- LINKS --}}

    <div x-show="show" class="py-2 absolute text-black bg-blue-200 mt-2 z-50" style="display: none">
         {{ $slot }}
    </div>
</div>
