<div class="mt-8 ml-2">
    <button wire:click="" type="button"  onclick="toggleModal('modal-id')"
     class="font-bold hover:bg-red-600 px-6 py-2.5  text-white  text-xs  uppercase rounded-full  flex items-center bg-red-400">
     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="3 0 24 26" stroke-width="1.5"
         stroke="currentColor" class="w-6 h-6 ">
         <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
     </svg>
     Crear Categoría
 </button>
</div> 

<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
 <div class="relative w-auto my-6 mx-auto max-w-3xl">
   <!--content-->
   <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
     <!--header-->
     <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
       <h3 class="text-3xl font-semibold">
         Registrar Categoría
       </h3>
       <button class="p-1 ml-auto bg-transparent border-0 text-gray-500   float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
         <span class="ml-2">
           x
         </span>
       </button>
     </div> 
     <!--body-->
     <form class=" space-x-5" wire:submit.prevent='CrearPro' enctype="multipart/form-data">
        <div class="ml-6 mr-6">
               <x-label for="nombre" :value="__('Categoría')" class="mb-0 mt-2"/>

               <select id="nombre"  wire:model="nombre" class="block  w-full mt-0" type="text" :vale="old('valor1')" placeholder="Categoria">
                   <option value="">--- Escoger Categoría ---</option>
                   <option value="jeans">Jeans</option>
                   <option value="ropa">Ropa</option>
                   <option value="complementos">Complementos</option>
                   <option value="zapatos">Zapatos</option>
               </select>

               @error('nombre')
               <livewire:mostrar-alerta :message="$message" />              
               @enderror

              {{--  ------ input coloca automaticamente el numero d puesto en el que va a quedar segun la caegoria que se asigne ------------- --}}
               <input id="puesto"   type="text" placeholder="2" readonly />

               <script>
                 document.getElementById('nombre').onchange = function() {
                     var puesto = document.getElementById('puesto');
                     /* Dividimos el dato de value usando el separador |*/
                     var valParts = this.value.split("|");
                     /* Asignamos cada dato a su input*/
                     if(valParts[0] == 'jeans'){
                            puesto.value = 1;
                     }else if(valParts[0] == 'ropa'){
                            puesto.value = 2;
                     }else if(valParts[0] == 'complementos'){
                            puesto.value = 3;
                     }else{
                        puesto.value = 4;
                     }
                   };
               </script>

      </div>


    <!--footer-->
    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
      <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
        Cerrar
      </button>
      <button class="bg-red-400 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
        Guardar
      </button>
   </form> 
   </div>
  </div>
</div>
</div> 
{{-- ---------------------- fin --}}
