<!DOCTYPE html>
<html lang="en" class="sr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets_front/favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets_front/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets_front/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{ url('assets_front/favicon/site.webmanifest')}}">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="{{ url('assets_front/css/owl.carousel.min.css')}}">

  <link rel="stylesheet" href="{{ url('assets_front/css/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{ url('assets_front/css/estilos.css')}}">
  <link rel="stylesheet" href="{{ url('assets_front/css/rev-slider.css')}}">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  


  @hasSection('title')
    <title>@yield('title') — Arrozal</title>
  @else
   <title>Arrozal</title>
  @endif
  
</head>
<body>
  <header class="header {{ Route::is('front.novedades') ? 'backgorund-new':'' }}"" id="header">
    <div class="container">
      <nav class="menu-desktop">
        <div class="container-logo">
          <a href="{{ route('front.index')}}">
            <img class="logo" src="{{ url('assets_front/images/logo-white.svg')}}" alt="Logo Arrozal S.A.">
            <img class="logo-color" src="{{ url('assets_front/images/logo.svg')}}" alt="Logo Arrozal S.A.">
          </a>
        </div>
        <ul class="lista-menu">
          <li><a href="{{ route('front.index')}}#nosotros">Quiénes somos</a></li>
          <li><a href="{{ route('front.index')}}#scroll">Dónde estamos</a></li>
          <li><a href="{{ route('front.index')}}#servicios">Nuestros servicios</a></li>
          <li><a href="{{ route('front.novedades')}}">Novedades</a></li>
          <li><a href="{{ route('front.index')}}#contacto">Contacto</a></li>
        </ul>
        <button class="btn-menu">
          <img class="menu" src="{{ url('assets_front/images/menu.svg')}}" alt="Icon Menu">
          <img class="cerrar" src="{{ url('assets_front/images/cerrar.svg')}}" alt="Icon Cerrar">
        </button>
      </nav>
      <div class="menu-mobile">
        <ul class="lista-menu-mobile">
          <li><a href="{{ route('front.index')}}#nosotros">Quiénes somos</a></li>
          <li><a href="{{ route('front.index')}}#scroll">Dónde estamos</a></li>
          <li><a href="{{ route('front.index')}}#servicios">Nuestros servicios</a></li>
          <li><a href="{{ route('front.novedades')}}">Novedades</a></li>
          <li><a href="{{ route('front.index')}}#contacto">Contacto</a></li>
        </ul>
      </div>
    </div>
  </header>


  @yield('content')

  <footer class="footer">
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <div class="container-logo-footer">
            <a href="{{ route('front.index')}}">
              <img src="{{ url('assets_front/images/logo-white.svg')}}" width="190" alt="Arrozal S.A.">
            </a>
         </div>
       </div>
       <div class="col-md-4">
         <div class="container-footer-enlaces">
           <h2 class="title-footer">Enlaces</h2>
           <ul class="lista-enlaces-footer">
             <li><a href="#">Quiénes somos</a></li>
             <li><a href="#">Dónde estamos</a></li>
             <li><a href="#">Nuestros Servicios</a></li>
             <li><a href="{{ route('front.novedades')}}">Novedades</a></li>
             <li><a href="#">Contacto</a></li>
            </ul>
          </div>
       </div>
       <div class="col-md-4">
         <div class="container-footer-enlaces">
           <h2 class="title-footer">Seguinos</h2>
           <ul class="lista-redes">
             <li>
               <a href="https://www.instagram.com/arrozalsa_py/?fbclid=IwAR0GzBQrpfRTPvpAOoEvwV1V4Q0xU0m_TjvcLh8sIZH5NUecRLs1cU0ip8Y" target="_blank">
                 <img src="{{ url('assets_front/images/instagram.svg')}}" alt="Icon Instagram">
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/Arrozalsa/?rf=675455755800622" target="_blank">
                  <img src="{{ url('assets_front/images/facebook.svg')}}" alt="Icon Facebook">
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/arrozal-s-a/" target="_blank">
                  <img src="{{ url('assets_front/images/in.svg')}}" alt="Icon Facebook">
                </a>
              </li>
            </ul>
          </div>
       </div>
     </div>
   </div>
   <div class="contiainer-fluid">
     <div class="container-porta">
       <a href="https://www.porta.com.py/" target="_blank">
        <img src="{{ url('assets_front/images/porta.png')}}" height="30" alt="Porta">
      </a>
    </div>
  </footer>
  {{-- bootstrap --}}
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  {{-- bootstrap --}}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slideReveal/1.1.2/jquery.slidereveal.min.js" integrity="sha512-lvyVkYVYViNQ5+AhhO/6FUr5/cA8s7G3BOy6VY3GsBpZeyX7eJoYLDSpy4RbszSzA1gqmROQmWNDNECah7Ds+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="{{ url('assets_front/plugins/owl.carousel.min.js')}}"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.7/scrollreveal.min.js"></script>

  {{-- rev-slider --}}
    <script src="{{ url('assets_front/rev-slider/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ url('assets_front/rev-slider/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{ url('assets_front/plugins/rev-slider.js')}}"></script>

    <script src="{{ url('assets_front/rev-slider/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{ url('assets_front/rev-slider/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{ url('assets_front/rev-slider/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{ url('assets_front/rev-slider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{ url('assets_front/rev-slider/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{ url('assets_front/rev-slider/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{ url('assets_front/rev-slider/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{ url('assets_front/rev-slider/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{ url('assets_front/rev-slider/extensions/revolution.extension.video.min.js')}}"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="{{ url('assets_front/js/main.js')}}"></script>
</body>
@yield('especifico')

</html>