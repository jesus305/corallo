<div class="flex flex-wrap items-center justify-between py-6 border-b">
    <h4 class="text-xl font-bold font-heading">{{ $titulo }}</h4>
    <a id="boton-desplegable" class="inline-flex items-center justify-center w-12 h-12 border hover:border-gray-500 rounded-md" href="javascript:void(0);">
        <svg id="icono-cerrado" width="12" height="12" viewbox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="5" width="2" height="12" fill="#161616"></rect>
            <rect x="12" y="5" width="2" height="12" transform="rotate(90 12 5)" fill="#161616"></rect>
        </svg>
        <svg id="icono-abierto" width="12" height="2" viewbox="0 0 12 2" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="12" width="2" height="12" transform="rotate(90 12 0)" fill="#161616"></rect>
        </svg>
    </a>
    <div id="contenido-desplegable" class="w-full mt-8 oculto">
        {{ $contenido }}
    </div>
</div>

  
  <script>
    const botonDesplegable = document.getElementById('boton-desplegable');
                    const iconoCerrado = document.getElementById('icono-cerrado');
                    const iconoAbierto = document.getElementById('icono-abierto');
                    const contenidoDesplegable = document.getElementById('contenido-desplegable');
                    
                    // Ocultar el ícono abierto al cargar la página
                    iconoAbierto.classList.add('oculto');
                    
                    botonDesplegable.addEventListener('click', () => {
                      if (contenidoDesplegable.classList.contains('oculto')) {
                        // Si el contenido está oculto, mostrarlo y cambiar el ícono a "abierto"
                        contenidoDesplegable.classList.remove('oculto');
                        iconoCerrado.classList.add('oculto');
                        iconoAbierto.classList.remove('oculto');
                      } else {
                        // Si el contenido está mostrado, ocultarlo y cambiar el ícono a "cerrado"
                        contenidoDesplegable.classList.add('oculto');
                        iconoCerrado.classList.remove('oculto');
                        iconoAbierto.classList.add('oculto');
                      }
                    });
  </script>