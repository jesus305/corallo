<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/logo/r5.png') }}">


  {{-- <title>{{ config('app.name', 'Corallo Rosso') }}</title> --}}

  <title>Corallo Rosso</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.google.com/specimen/Bebas+Neue?query=bebas+neue">



  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.7.3/tailwind.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"  >

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <link href="resources/css/app.css" rel="stylesheet">



  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/swiper.js'])
  @livewireStyles
  <style>
.oculto {
  display: none;
}



@keyframes vibrar {
  0%   { transform: translateX(0) rotate(0deg); }
  20%  { transform: translateX(-2px) rotate(-0.5deg); }
  40%  { transform: translateX(2px) rotate(0.5deg); }
  60%  { transform: translateX(-1px) rotate(-0.25deg); }
  80%  { transform: translateX(1px) rotate(0.25deg); }
  100% { transform: translateX(0) rotate(0deg); }
}

.btn-destacado {
  animation-name: vibrar;
  animation-duration: 1s;
  animation-iteration-count: infinite;
}



    /* fiin botones floteantes whastas */
.btn-flotante {
	font-size: 16px; /* Cambiar el tamaño de la tipografia */
	text-transform: uppercase; /* Texto en mayusculas */
	font-weight: bold; /* Fuente en negrita o bold */
	color: #ffffff; /* Color del texto */
	letter-spacing: 2px; /* Espacio entre letras */
	background-color: rgb(255, 165, 165); /* Color de fondo */
	padding: 18px 30px; /* Relleno del boton */
	position: fixed;
	bottom: 20px;
	right: 20px;
	transition: all 300ms ease 0ms;
	box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
	z-index: 99;
  border-top-left-radius: 30px;
  border-top-right-radius: 30px;
  border-bottom-left-radius: 30px;
}
.btn-flotante:hover {
	background-color: #ffffff; /* Color de fondo al pasar el cursor */
	box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
	transform: translateY(-7px);
  color: #38B2AC;
}


@media only screen and (max-width: 600px) {
 	.btn-flotante {
		font-size: 14px;
		padding: 12px 20px;
		bottom: 20px;
		right: 20px;
	}
} 
/* fiin botones floteantes whastas */





    @media (max-width: 1023px) {
      .menu {
        display: none;
      }
    }



    #ropa-menu {
      column-count: 2;
      column-gap: 2em;
    }

    .dropdown:hover .dropdown-menu {
      display: block;
    }


    .group:hover #image-overlay {
      transform: scale(1.1);
    }

    /*  css de slider del header de varioas imagnenes */

    /*  evita el desbordamiento lateral que agraga un scrol */
    .swiper-container {
      overflow: hidden;
    }

    .swiper-slide img {
      width: 100%;
      height: auto;
    }

    /*Fin  evita el desbordamiento lateral que agraga un scrol */

    .swiper-button-container {
      margin-top: 50%;
    }

    /*  pone las flachas en el centro de los contenedres del los slidere */
    .swiper-container {
      position: relative;
    }

    .swiper-button-prev,
    .swiper-button-next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
    }

    /*Fin  pone las flachas en el centro de los contenedres del los slidere  */


    /* diseño bonito de las felchas */
    .swiper-button-next,
    .swiper-button-prev {
      background-color: white;
      background-color: rgba(255, 255, 255, 0.5);
      right: 10px;
      padding: 25px;
      color: #0000006e !important;
      fill: black !important;
      stroke: black !important;
    }

    /*Fin  diseño bonito de las felchas */
  </style>
</head>



<body class="font-sans antialiased">

  {{-- text-teal-500 colro verde --}}
  <a href="https://wa.me/573044177551?text=Hola%20%F0%9F%96%90%EF%B8%8F" class="btn-flotante">  <i class="WhatsAppClient fab fa-whatsapp fa-lg "></i></a>

  
  <div class="min-h-screen ">

    {{-- <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header> --}}



    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  @livewireScripts
</body>

</html>