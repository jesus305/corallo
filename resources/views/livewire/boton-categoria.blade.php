<div class="mt-8 ml-2">
    <a  href="{{route ('crear-categoria', $coleccion->id)}}">
            <button wire:click="" type="button"  onclick="toggleModal('modal-id')"
            class="font-bold hover:bg-red-600 px-6 py-2.5  text-white  text-xs  uppercase rounded-full  flex items-center bg-red-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="3 0 24 26" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
                     Crear Categoría 
            </button>
    </a>
</div> 
