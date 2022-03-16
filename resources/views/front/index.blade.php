@extends('layouts.front')
@section('title', 'Bienvenidos')
@section('content')
<main>
  <section class="banner">
    <div class="rev_slider_wrapper">
      <div id="rev-slider1" class="rev_slider  ">
          <ul>
              @foreach ($banners as $banner)
                <li data-transition="random">
                    <img src="{{ url('uploads/'.$banner->imagen) }}" alt="{{ $banner->titulo }}" data-bgposition="center center" data-no-retina>
                    <div class="bg-slider-1"></div>
                </li>
              @endforeach
              {{--
              <li data-transition="random">
                  <img src="{{ url('assets_front/images/banner-new-3.jpg')}}" alt="" data-bgposition="center center" data-no-retina>
                  <div class="bg-slider-1"></div>

                  {{-- <div class="container-text-banner tp-caption" data-x="['left','left','left','center']" data-hoffset="['40','90','30','14']" data-y="['middle','middle','middle','middle']" data-voffset="['0','40','0','40']" data-fontsize="['72','62','50','42']" data-lineheight="['86','70','64','48']"
                  data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="400" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                      <div class="text-banner">
                        <h2>Sunrise on the Farm by Jean Hutchison.</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit aliquam recusandae, quis quo commodi debitis.</p>
                      </div>
                      <a class="btn-enviar mt-1" href="#">Más información</a>
                  </div>
              </li>
              <li data-transition="random">
                  <img src="{{ url('assets_front/images/vista-aerea.jpg')}}" alt="" data-bgposition="center center" data-no-retina>
                  <div class="bg-slider-1"></div>
              </li>
              <li data-transition="random">
                  <img src="{{ url('assets_front/images/maquinas-1.jpg')}}" alt="" data-bgposition="center center" data-no-retina>
                  <div class="bg-slider-1"></div>
              </li> --}}
          </ul>
      </div>
    </div>
  </section>

  <section class="eslogan">
    <div class="container">
      <div class="container-eslogan-text">
        <h1 class="title-eslogan load-hidden">{{ trans_choice('sentences.sembrando-innovacion',1) }}</h1>
        <h2 class="subtitle-eslogan load-hidden">{{ trans_choice('sentences.desde-paraguay',1) }}</h2>
      </div>
    </div>
  </section>

  <section class="nosotros" id="nosotros">
    <div class="container">
      <div class="row row-nosotros">
        @foreach ($quienesSomos as $quienessomo)
        <div class="col-md-6">
          <img class="img-nosotros load-hidden" src="{{ url('uploads/'.$quienessomo->imagen) }}" alt="{{ $quienessomo->titulo }} }}" loading="lazy" alt="">
        </div>
        <div class="col-md-6 col-nosotros">
              <div class="container-text-nosotros load-hidden">
                <h2 class="title-nosotros">{{ trans_choice('navigation.quienes-somos', 1) }}</h2>
                {{--<p class="text-nosotros">Arrozal S.A, fundada en 2010 y ubicada en la ciudad de Coronel Bogado, departamento de Itapua es una empresa familiar pionera en el servicio de consultoría y asistencia técnica, como también en la investigación privada de arroz en Paraguay. Hoy en día, se dedica a la producción comercial de arroz comprometida en asegurar un producto con calidad superior.</p> --}}
                <p class="text-nosotros">{{ $quienessomo->descripcion }}</p>
              </div>
              <div class="valores-nosotros">
                <div class="container-valores load-hidden">
                  <div class="container-icon-valores">
                    <img src="{{ url('assets_front/images/mision.svg')}}" alt="Icon Valores">
                    <span class="semilla semilla-1"></span>
                    <span class="semilla semilla-2"></span>
                    <span class="semilla semilla-3"></span>
                    <span class="semilla semilla-4"></span>
                  </div>
                  <div class="container-text-valores">
                    <h2 class="title-valores">{{ trans_choice('sentences.mision', 1) }}</h2>
                    {{--<p class="valores-text">Fortalecer el potencial productivo y sustentable del arroz en Paraguay a través de la investigación científica, capacitación, producción y comercialización.</p> --}}
                    <p class="valores-text">{{ $quienessomo->mision }}</p>
                  </div>
                </div>
                <div class="container-valores load-hidden">
                  <div class="container-icon-valores">
                    <img src="{{ url('assets_front/images/vision.svg')}}">
                    <span class="semilla semilla-5"></span>
                    <span class="semilla semilla-6"></span>
                    <span class="semilla semilla-7"></span>
                    <span class="semilla semilla-8"></span>
                  </div>
                  <div class="container-text-valores">
                    <h2 class="title-valores">{{ trans_choice('sentences.vision', 1) }}</h2>
                    {{--<p class="valores-text">Posicionar el arroz paraguayo en el mercado internacional como referencia de calidad y responsabilidad.</p> --}}
                    <p class="valores-text">{{ $quienessomo->vision }}</p>
                  </div>
                </div>
                <div class="container-valores mb-0 load-hidden">
                  <div class="container-icon-valores">
                    <img src="{{ url('assets_front/images/handshake.svg')}}" alt="Icon Valores">
                    <span class="semilla semilla-9"></span>
                    <span class="semilla semilla-10"></span>
                    <span class="semilla semilla-11"></span>
                    <span class="semilla semilla-12"></span>
                  </div>
                  <div class="container-text-valores">
                    <h2 class="title-valores">{{ trans_choice('sentences.valores', 1) }}</h2>
                    {{--<p class="valores-text">Pasión, transparencia, compromiso e integridad.</p> --}}
                    <p class="valores-text">{{ $quienessomo->valores }}</p>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="sombra"></section>
  <section class="historia">
    <div class="container">
      <h2 class="title-historia">{{ trans_choice('navigation.nuestra-historia', 1) }}</h2>
      <div class='timeline'>
        <div class='timeline-progress'>
          <input class="input-hidde" checked='checked' id='step-1' name='step' type='radio'>
          <input class="input-hidde" id='step-2' name='step' type='radio'>
          <input class="input-hidde" id='step-3' name='step' type='radio'>
          <input class="input-hidde" id='step-4' name='step' type='radio'>
          <input class="input-hidde" id='step-5' name='step' type='radio'>
          {{-- <input class="input-hidde" id='step-6' name='step' type='radio'> --}}
          @foreach ($NuestraHistoria as $nuestrahistoria)
            <div class='progress-container'>
                <label for="{{ 'step-' .$loop->iteration }}">
                    <img src="{{ url('uploads/'.$nuestrahistoria->imagen) }}" loading="lazy" alt="{{ $nuestrahistoria->titulo }}">
                    {{ $nuestrahistoria->titulo }}
                </label>
            </div>
          @endforeach
          {{--
          <div class='progress-container'>
            <label for='step-1'>
              <img src="{{ url('assets_front/images/Consultoria.png')}}" loading="lazy" alt="">
              2004
            </label>
          </div>
          <div class='progress-container'>
            <label for='step-2'>
              <img src="{{ url('assets_front/images/Silos2.JPG')}}" loading="lazy" alt="">
              2010
            </label>
          </div>
          <div class='progress-container'>
            <label for='step-3'>
              <img src="{{ url('assets_front/images/Campo2.jpeg')}}" loading="lazy" alt="">
              2017
            </label>
          </div>
          <div class='progress-container'>
            <label for='step-4'>
              <img src="{{ url('assets_front/images/5.jpg')}}"  loading="lazy" alt="">
              2019
            </label>
          </div>
          <div class='progress-container'>
            <label for='step-5'>
              <img src="{{ url('assets_front/images/Soja-2021.JPG')}}" loading="lazy" alt="">
              2021
            </label>
          </div>
          --}}

          <div class='progress_inner__bar'></div>
          <div class='progress_inner__bar--set'></div>
          <div class='progress-tabs'>
            @foreach ($NuestraHistoria as $nuestrahistoria)
                <div class="{{ 'tab-timeline tab-' .$loop->iteration }}">
                <h5 class="title-timeline"> {{ $nuestrahistoria->texto }} </h5>
              </div>
            @endforeach
              {{--
            <div class='tab-timeline tab-1'>
              <h5 class="title-timeline">Inicio de los servicios de consultoría
                y asistencia técnica en Paraguay.</h5>
            </div>
            <div class='tab-timeline tab-2'>
              <h5 class="title-timeline">
                Formación de la empresa Arrozal S.A. - Consultoría & Asistencia Técnica, Campo Experimental y Servicios de Secado y Almacenamiento de grano.
              </h5>
            </div>
            <div class='tab-timeline tab-3'>
              <h5 class="title-timeline">Inicio de la producción comercial de arroz en San Cosme y Damián y Bajo Chaco.</h5>
            </div>
            <div class='tab-timeline tab-4'>
              <h5 class="title-timeline">
                Formación de la sociedad Arrozales del Chaco S.A. con G.P.S.A.E – Producción de arroz en el bajo Chaco.
              </h5>
            </div>
            <div class='tab-timeline tab-5'>
              <h5 class="title-timeline">Inicio de la producción de soja en General Delgado.</h5>
            </div>
            --}}
          </div>
        </div>
      </div>

      <div class="timeline-mobile">

        @foreach ($NuestraHistoria as $nuestrahistoria)
            <div class="container-timeline-mobile">
                <div class="container-image-timeline">
                    <img class="img-timeline-mobile" src="{{ url('uploads/'.$nuestrahistoria->imagen) }}" loading="lazy" alt="">
                    <p> {{ $nuestrahistoria->titulo }} </p>
                </div>
                <div class="contianer-timeline-text">
                    <h5 class="title-timeline">{{ $nuestrahistoria->texto }}</h5>

                </div>
            </div>
        @endforeach
{{--
        <div class="container-timeline-mobile">
          <div class="container-image-timeline">
            <img class="img-timeline-mobile" src="{{ url('assets_front/images/Consultoria.png')}}" loading="lazy" alt="">
            <p>2004</p>
          </div>
          <div class="contianer-timeline-text">
            <h5 class="title-timeline">Inicio de los servicios de consultoría y asistencia técnica en Paraguay.</h5>

          </div>
        </div>
        <div class="container-timeline-mobile">
          <div class="container-image-timeline">
            <img class="img-timeline-mobile" src="{{ url('assets_front/images/Silos2.JPG')}}" loading="lazy" alt="">
            <p>2010</p>
          </div>
          <div class="contianer-timeline-text">
            <h5 class="title-timeline">Formación de la empresa Arrozal S.A. - Consultoría & Asistencia Técnica, Campo Experimental y Servicios de Secado y Almacenamiento de grano.</h5>

          </div>
        </div>
        <div class="container-timeline-mobile">
          <div class="container-image-timeline">
            <img class="img-timeline-mobile" src="{{ url('assets_front/images/Campo2.jpeg')}}" loading="lazy" alt="">
            <p>2017</p>
          </div>
          <div class="contianer-timeline-text">
            <h5 class="title-timeline">Inicio de la producción comercial de arroz en San Cosme y Damián y Bajo Chaco.</h5>

          </div>
        </div>
        <div class="container-timeline-mobile">
          <div class="container-image-timeline">
            <img class="img-timeline-mobile" src="{{ url('assets_front/images/5.jpg')}}" loading="lazy" alt="">
            <p>2019</p>
          </div>
          <div class="contianer-timeline-text">
            <h5 class="title-timeline">
              Formación de la sociedad Arrozales del Chaco S.A. con G.P.S.A.E – Producción de arroz en el bajo Chaco.
            </h5>

          </div>
        </div>
        <div class="container-timeline-mobile">
          <div class="container-image-timeline last">
            <img class="img-timeline-mobile" src="{{ url('assets_front/images/Soja-2021.JPG')}}" loading="lazy" alt="">
            <p>2021</p>
          </div>
          <div class="contianer-timeline-text">
            <h5 class="title-timeline">
              <a href="https://www.gpsa.com.py/" target="_blank">
                Inicio de la producción de soja en General Delgado.
              </a>
            </h5>
--}}
          </div>
        </div>
      </div>

    </div>
  </section>

  @if (!$NuestraHistoriaVideo->isEmpty() )
  <section class="adc">
    <div class="container">
        @foreach ($NuestraHistoriaVideo as $nuestrahistoriavideo)
            <div class="video-container video-container-homenaje mb-4">
                <iframe src="{{ $nuestrahistoriavideo->enlace  }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                {{--<iframe src="https://www.youtube.com/embed/GU6RZmnGq-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
            </div>
        @endforeach
    </div>
  </section>
  @endif

  <section class="scroll" id="scroll">

    <figure class="mapa-1" id="mapa-1">
      <picture>
        <source srcset="{{ url('assets_front/images/mapa-nuevo.jpg')}}" media="(max-width: 768px)">
        <img class="img-1" src="{{ url('assets_front/images/mapa-1.jpg')}}" alt="">
       </picture>
    </figure>
    <figure class="mapa-2" id="mapa-2">
      <picture>
        <source srcset="{{ url('assets_front/images/mapa-nuevo-2.png')}}" media="(max-width: 768px)">
        <img class="img-2" src="{{ url('assets_front/images/mapa-2.jpg')}}" alt="">
       </picture>
    </figure>
    <figure class="mapa-3" id="mapa-3">
      <picture>
        <source srcset="{{ url('assets_front/images/mapa-nuevo-2.jpg')}}" media="(max-width: 768px)">
        <img class="img-3" src="{{ url('assets_front/images/mapa-2.jpg')}}" alt="">
       </picture>
    </figure>
    <div class="container-mapa-info">
      <h2 class="title-mapa-info">{{ trans_choice('navigation.donde-estamos', 1) }}</h2>
      @foreach ($DondeEstamos as $dondeestamos)
      <p class="text-mapa-info">{{ $dondeestamos->texto }}</p>
      @endforeach
      {{--<p class="text-mapa-info">Nuestra producción de arroz esta ubicada en dos regiones. La primera producción se encuentra en el Departamento de Itapúa en la cuenca del Río Paraná próxima a la Central Hidroeléctrica Yacyretá. El segundo emprendimiento esta ubicado en la cuenca del Río Paraguay, en el lado Chaco próximo a la ciudad de Concepción en el Departamento de Presidente Hayes. </p> --}}
    </div>
  </section>

  <section class="sombra sombre-blanca"></section>

  <section class="nuestros-sevicios" id="servicios">
    <div class="container">
      <h2 class="title-servicios">{{ trans_choice('navigation.nuestro-servicios', 1) }}</h2>

      <div class="grid-servicios">

        @foreach ($Servicios as $servicio)
            <div class="grid-servicios-items col-md-6">
                <div class="grid-servicios-images">
                    <img src="{{ url('uploads/'.$servicio->imagen) }}" alt="{{ $servicio->titulo }}">
                </div>
                <div class="grid-servicios-text">
                    <h2 class="grid-servicios-title">{{ $servicio->titulo }}</h2>
                    <p class="grid-servicios-text">{!! Str::limit($servicio->texto, 100 ) !!}</p>
                </div>
                <div class="grid-sevicions-button">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="{{ '#modal-0' .$loop->iteration }}" class="grid-servicios-btn">Ver más</a>
                </div>
            </div>
        @endforeach
            {{--
        <div class="grid-servicios-items col-md-6">
          <div class="grid-servicios-images">
            <img src="{{ url('assets_front/images/produccion.jpg')}}" alt="">
          </div>
          <div class="grid-servicios-text">
            <h2 class="grid-servicios-title">Producción Comercial de Arroz</h2>
            <p class="grid-servicios-text">San Cosme – Itapúa (Arrozal S.A.)  <br> Pte. Hayes – Bajo Chaco (Arrozales del Chaco S.A.). <br>Tipo de Arroz: Arroz largo fino. <br> Época de Cosecha: Enero a Abril.</p>
          </div>
          <div class="grid-sevicions-button">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-01" class="grid-servicios-btn">Ver más</a>
          </div>
        </div>

        <div class="grid-servicios-items col-md-6">
          <div class="grid-servicios-images">
            <img src="{{ url('assets_front/images/1.jpg')}}" alt="">
          </div>
          <div class="grid-servicios-text">
            <h2 class="grid-servicios-title">Comercialización</h2>
            <p class="grid-servicios-text">Comercializamos arroz en cáscara localmente y en el exterior. Además, actuamos como intermediarios de la exportación de arroz blanco.</p>
          </div>
          <div class="grid-sevicions-button">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-02" class="grid-servicios-btn">Ver más</a>
          </div>
        </div>

        <div class="grid-servicios-items col-md-6">
          <div class="grid-servicios-images">
            <img src="{{ url('assets_front/images/consultoria.jpg')}}" alt="">
          </div>
          <div class="grid-servicios-text">
            <h2 class="grid-servicios-title">Consultoría Técnica</h2>
            <p class="grid-servicios-text">40 años de experiencia en el cultivo de arroz en Paraguay, Colombia (CIAT) y Brasil (IRGA).</p>
          </div>
          <div class="grid-sevicions-button">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-03" class="grid-servicios-btn">Ver más</a>
          </div>
        </div>

        <div class="grid-servicios-items col-md-6">
          <div class="grid-servicios-images">
            <img src="{{ url('assets_front/images/silo-2.jpg')}}" alt="">
          </div>
          <div class="grid-servicios-text">
            <h2 class="grid-servicios-title">Servicios de Secado y Almacenaje</h2>
            <p class="grid-servicios-text">Ubicación: Coronel Bogado - Itapúa</p>
          </div>
          <div class="grid-sevicions-button">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-04" class="grid-servicios-btn">Ver más</a>
          </div>
        </div>

        <div class="grid-servicios-items col-md-6">
          <div class="grid-servicios-images">
            <img src="{{ url('assets_front/images/serv-maq.JPG')}}" alt="">
          </div>
          <div class="grid-servicios-text">
            <h2 class="grid-servicios-title">Servicio de Máquinas</h2>
            <p class="grid-servicios-text">Prestamos servicios de preparación de suelo, siembra, cosecha, entre otros.</p>
          </div>
          <div class="grid-sevicions-button">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-05" class="grid-servicios-btn">Ver más</a>
          </div>
        </div>

        <div class="grid-servicios-items col-md-6">
          <div class="grid-servicios-images">
            <img src="{{ url('assets_front/images/campo-experimental.jpg')}}" alt="">
          </div>
          <div class="grid-servicios-text">
            <h2 class="grid-servicios-title">Campo Experimental</h2>
            <p class="grid-servicios-text">Ubicación: Coronel Bogado - Itapúa, San Cosme - Itapúa, Bajo Chaco – Pte. Hayes</p>
          </div>
          <div class="grid-sevicions-button">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-06" class="grid-servicios-btn">Ver más</a>
          </div>
        </div>

        <div class="grid-servicios-items col-md-6">
          <div class="grid-servicios-images">
            <img src="{{ url('assets_front/images/FAV36.JPG')}}" alt="">
          </div>
          <div class="grid-servicios-text">
            <h2 class="grid-servicios-title">Producción de Soja</h2>
            <p class="grid-servicios-text">Producimos soja en la ciudad de General Delgado, Departamento de Itapúa.</p>
          </div>
          <div class="grid-sevicions-button">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-08" class="grid-servicios-btn">Ver más</a>
          </div>
        </div>
        --}}
      </div>
    </div>
  </section>

  <section class="pasantia" id="pasantia">

      <h2 class="title-servicios">{{ trans_choice('sentences.programas-pasantias', 1) }}</h2>
      @foreach ($PasantiasTextos as $pasantiastextos)
      <p class="text-pasantia">{{ $pasantiastextos->texto }}</p>
      @endforeach
      {{--<p class="text-pasantia">Más de 50 estudiantes de universidades y colegios agrícolas han realizado sus pasantías y trabajo de tesis en nuestro centro de investigación.</p>--}}

      <div class="grid-pasantia">
          @foreach ($PasantiasImagenes as $pasantiasimagenes)
            <div class="grid-pasantia-item">
                <img src="{{ url('uploads/'.$pasantiasimagenes->imagen) }}" alt="Imagen">
            </div>
          @endforeach
        {{--
        <div class="grid-pasantia-item">
          <img src="{{ url('assets_front/images/pasantia-01.jpg')}}" alt="">
        </div>
        <div class="grid-pasantia-item">
          <img src="{{ url('assets_front/images/Pasantia3.jpeg')}}" alt="">
        </div>
        <div class="grid-pasantia-item">
          <img src="{{ url('assets_front/images/Pasantia4.jpeg')}}" alt="">
        </div>
        <div class="grid-pasantia-item">
          <img src="{{ url('assets_front/images/Pasantia5.jpeg')}}" alt="">
        </div>
        --}}
      </div>
  </section>

  <section class="campo" id="campo" style="scroll-margin: 7rem;">
    <div class="container">
      <div class="row row-campo">
        <div class="col-md-6">
          <h2 class="title-servicios title-campo">{{ trans_choice('navigation.dia-campo', 1) }}</h2>
            @foreach ($DiaCampoTextos as $DiaCampoTexto)
            <p class="text-pasantia text-campo">{{ $DiaCampoTexto->texto }}</p>
            @endforeach
          {{--
          <p class="text-pasantia text-campo">Desde el año 2013, hemos estado organizando cada año el día de campo con el fin de reunir a todos los interesados
            en la producción de arroz. En este evento, participan productores, autoridades, representantes de empresas, instituciones
          financieras, institutos nacionales e internacional, profesores y estudiantes. Durante la jornada, los visitantes tienen la oportunidad
            de intercambiar información, recorrer el campo de producción y las parcelas experimentales, debatir importantes asuntos y situaciones del sector arrocero.
          </p> --}}
        </div>
        <div class="col-md-6">
          <div class="owl-campo owl-carousel owl-theme">
              @foreach ($DiaCampoImagenes as $DiaCampoImagen)
                <div class="item">
                    <img src="{{ url('uploads/'.$DiaCampoImagen->imagen) }}" alt="">
                </div>
              @endforeach
              {{--
            <div class="item">
              <img src="{{ url('assets_front/images/dia-campo-1.jpg')}}" alt="">
            </div>
            <div class="item">
              <img src="{{ url('assets_front/images/dia-campo-2.jpg')}}" alt="">
            </div>
            <div class="item">
              <img src="{{ url('assets_front/images/dia-campo-3.jpg')}}" alt="">
            </div>
            --}}
        </div>
        </div>
      </div>
    </div>
  </section>

  <section class="adc">
    <div class="container">
        <img src="{{asset('assets_front/images/logo-arrozales.png')}}" alt="Arrozales del Chaco S.A." class="adc-logo" loading="lazy">
        @foreach ($ArrozalesTextos as $ArrozalesTexto)
        <p class="text-adc">{{ $ArrozalesTexto->texto }}</p>
        @endforeach
        {{--<p class="text-adc">Por medio de la ALIANZA ENTRE ARROZAL S.A. Y G.P.S.A.E., nace en el 2019 la empresa Arrozales del Chaco S.A. - El proyecto arrocero de mayor impacto en el país ubicado en el departamento Presidente Hayes. Hoy en día, se producen 6,000 hectáreas y se apunta a alcanzar el área de 10,000 hectáreas.</p>--}}

        @if (!$ArrozalesVideos->isEmpty())
            <div class="video-container mb-4">
                @foreach ($ArrozalesVideos as $ArrozalesVideo)
                <iframe src="{{ $ArrozalesVideo->enlace }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @endforeach
            </div>
        @endif
        {{--
        <div class="video-container mb-4">
            <iframe src="https://www.youtube.com/embed/yaa64YQ689U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        --}}

      <div class="row d-flex justify-content-center" style="gap: 30px 0px;">
        @if (!$ArrozalesImagenes->isEmpty())
            @foreach ($ArrozalesImagenes as $ArrozalesImagen)
                <div class="adc-img col-12 col-md-4">
                    <img src="{{ url('uploads/'.$ArrozalesImagen->imagen) }}" class="img-adc" loading="lazy" alt="Imagen">
                </div>
            @endforeach
        @endif

        {{-- <div class="adc-img col-6 col-md-6">
          <img src="{{ url('assets_front/images/ADCH0.JPG')}}" class="img-fluid" loading="lazy" alt="">
        </div>
        <div class="adc-img col-12 col-md-4">
          <img src="{{ url('assets_front/images/ADCH5.JPG')}}" class="img-adc" loading="lazy" alt="">
        </div>
        {{-- <div class="adc-img col-6 col-md-6">
          <img src="{{ url('assets_front/images/ADCH2.JPG')}}" class="img-fluid" loading="lazy" alt="">
        </div>
        <div class="adc-img col-12 col-md-4">
          <img src="{{ url('assets_front/images/ADCH1.JPG')}}" class="img-adc" loading="lazy" alt="">
        </div>
        {{-- <div class="adc-img col-6 col-md-6">
          <img src="{{ url('assets_front/images/ADCH4.JPG')}}" class="img-fluid" loading="lazy" alt="">
        </div>
        <div class="adc-img col-12 col-md-4">
          <img src="{{ url('assets_front/images/ADCH3.JPG')}}" class="img-adc" loading="lazy" alt="">
        </div>
        --}}
      </div>
    </div>
  </section>

  <section class="contacto" id="contacto">
    <div class="container">
      <h2 class="title-section mb-1">{{ trans_choice('navigation.contacto', 1) }}</h2>
      <div class="row mt-4">
        <div class="col-md-12">
          <ul class="lista-info">
            @if ($Contacto->isEmpty())
                <li>
                    <a href="https://goo.gl/maps/RnStzjBUWz4W2BQ98" target="_blank" class="align-items-start">
                    <div class="container-image-contacto">
                    <img class="phone" src="{{ url('assets_front/images/map.svg')}}" alt="Icono Mapa">
                    </div>
                    {{ trans_choice('sentences.direccion', 1) }}
                    </a>
                </li>
                <li>
                    <a href="tel:+595986544341">
                    <div class="container-image-contacto">
                    <img src="{{ url('assets_front/images/phone.svg')}}" alt="Icono phone">
                    </div>
                    +595 986 544 341
                    </a>
                </li>
                <li>
                    <a href="mailto:secretaria@arrozalsa.com.py">
                    <div class="container-image-contacto">
                        <img src="{{ url('assets_front/images/email.svg')}}" alt="Icono email">
                    </div>
                    secretaria@arrozalsa.com.py
                    </a>
                </li>
                <li>
                    <a href="#">
                    <div class="container-image-contacto">
                        <img src="{{ url('assets_front/images/clock.svg')}}" alt="Icono Hora">
                    </div>
                      <p class="horario-contacto">
                        {{ trans_choice('sentences.lunes-viernes', 1) }} 7:00 a.m – 17:00 p.m. <br>
                        {{ trans_choice('sentences.sabados', 1) }} 7:00 a.m. – 12:00 p.m.
                      </p>
                    </a>
                </li>
            @else
                @foreach ($Contacto as $contact)
                <li>
                    <a href="https://goo.gl/maps/RnStzjBUWz4W2BQ98" target="_blank" class="align-items-start">
                    <div class="container-image-contacto">
                    <img class="phone" src="{{ url('assets_front/images/map.svg')}}" alt="Icono Mapa">
                    </div>
                    {{ $contact->direccion }}
                    </a>
                </li>
                <li>
                    <a href="tel:+595986544341">
                    <div class="container-image-contacto">
                    <img src="{{ url('assets_front/images/phone.svg')}}" alt="Icono phone">
                    </div>
                    {{ $contact->telefono }}
                    </a>
                </li>
                <li>
                    <a href="mailto:secretaria@arrozalsa.com.py">
                    <div class="container-image-contacto">
                        <img src="{{ url('assets_front/images/email.svg')}}" alt="Icono email">
                    </div>
                    {{ $contact->email }}
                    </a>
                </li>
                <li>
                    <a href="#">
                    <div class="container-image-contacto">
                        <img src="{{ url('assets_front/images/clock.svg')}}" alt="Icono Hora">
                    </div>
                        <p>
                            {!! $contact->horario !!}
                        </p>
                    </a>
                </li>
                @endforeach
            @endif
          </ul>
        </div>

      </div>
      <div class="row mt-4">
        <div class="col-md-6">

          <form action="{{route('front.contacto')}}#form-contacto" method="POST" enctype="multipart/form-data" id="form-contacto">
            @csrf
            <div class="form-group">
              <label for="nombre">{{ trans_choice('sentences.nombre', 1) }}</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="{{ trans_choice('sentences.nombre', 1) }}" required value="{{ old('nombre') }}" maxlength="100">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required value="{{ old('email') }}" maxlength="100">
            </div>
            <div class="form-group">
              <label for="telefono">{{ trans_choice('sentences.telefono', 1) }}</label>
              <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="{{ trans_choice('sentences.telefono', 1) }}" required value="{{ old('telefono') }}" maxlength="100">
            </div>
            <div class="form-group">
              <label for="asunto">{{ trans_choice('sentences.asunto', 1) }}</label>
              <div class="content-select-contacto">
                <select class="form-control" name="asunto" id="select" required>
                  <option value="{{ trans_choice('sentences.solicitar-cotizacion', 1) }}" selected>{{ trans_choice('sentences.solicitar-cotizacion', 1) }}</option>
                  <option value="{{ trans_choice('sentences.trabaja-nosotros', 1) }}">{{ trans_choice('sentences.trabaja-nosotros', 1) }}</option>
                  <option value="{{ trans_choice('sentences.otros', 1) }}">{{ trans_choice('sentences.otros', 1) }}</option>
                </select>
              </div>
            </div>
            <div class="form-group toogle-class" id='toogle-mensaje'>
              <div class="row">
                <div class="col-md-12">
                  <div class="custom-file">
                    <label class="file-label" for="File">{{ trans_choice('sentences.otros', 1) }}</label>
                    <input type="file" name="archivo" class="doc"  name="cv" id="archivo" accept="application/pdf,application/msword,.docx">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="mensaje">{{ trans_choice('sentences.mensaje', 1) }}</label>
              <textarea class="form-control" name="mensaje" id="mensaje" cols="10" rows="3" placeholder="{{ trans_choice('sentences.escriba-mensaje', 1) }}" required>{{ old('mensaje') }}</textarea>
            </div>
            <div class="form-group">
              <button class="btn-enviar" type="submit">{{ trans_choice('sentences.enviar', 1) }}</button>
            </div>
          </form>
        </div>
        <div class="col-md-6 tabs-container">


          <div class="mapa-iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.9882769762517!2d-56.33582178481511!3d-27.125179208632336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9459d6339ebc7589%3A0xd402dd1d8fb8c515!2sArrozal%20S.A!5e0!3m2!1ses-419!2spy!4v1635179839354!5m2!1ses-419!2spy" width="100%" height="462" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

{{-- /////////////Modales/////////////// --}}

@foreach ($Servicios as $servicio)
    <div class="modal fade" id="{{ 'modal-0' .$loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <div class="grid-modal">
                <div class="grid-modal-item">
                    <img class="img-modal" src="{{ url('uploads/'.$servicio->imagen) }}" alt="{{ $servicio->titulo }}">
                </div>
                <div class="grid-modal-item">
                    <div class="container-text-servicios">
                        <h2 class="title-row-servicios">{{ $servicio->titulo }}</h2>
                        <p class="grid-servicios-text">{!! $servicio->texto !!}</p>
                        @if ($servicio->titulo == 'Comercialización' || $servicio->titulo == 'comercialización' || $servicio->titulo == 'Commercialization' || $servicio->titulo == 'commercialization' )
                        <form action="{{route('front.contacto')}}#form-contacto" method="POST" enctype="multipart/form-data" id="form-contacto2">
                            @csrf
                            <button type="button"  class="btn-enviar btn-cotizacion" data-dismiss="modal">{{ trans_choice('sentences.solicitar-cotizacion', 1) }}</button>
                        </form>
                        @endif
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endforeach

{{--
<!-- Modal 01-->
<div class="modal fade" id="modal-01" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="grid-modal">
          <div class="grid-modal-item">
            <img class="img-modal" src="{{ url('assets_front/images/produccion.jpg')}}" alt="">
          </div>
          <div class="grid-modal-item">
            <div class="container-text-servicios">
              <h2 class="title-row-servicios">Producción Comercial de Arroz Gerarca</h2>
              <p class="text-servicios-modal">Ubicación: <br> San Cosme – Itapúa (Arrozal S.A.) <br>
                Pte. Hayes – Bajo Chaco (Arrozales del Chaco S.A.). <br>
                Tipo de Arroz: Arroz largo fino. <br>
                Época de Cosecha: Enero a Abril.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 01-->

<!-- Modal 02-->
<div class="modal fade" id="modal-02" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="grid-modal">
          <div class="grid-modal-item">
            <img class="img-modal" src="{{ url('assets_front/images/1.jpg')}}" alt="">
          </div>
          <div class="grid-modal-item">
            <div class="container-text-servicios">
              <h2 class="title-row-servicios">Comercialización</h2>
              <p>Comercializamos arroz en cáscara localmente y en el exterior. Además, actuamos como intermediarios de la exportación de arroz blanco.</p>
               <a href="{{ route('front.index')}}#contacto" class="btn-enviar btn-cotizacion">Solicitar cotización</a>
              <button type="button"  class="btn-enviar btn-cotizacion" data-dismiss="modal">Solicitar cotización</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 02-->

<!-- Modal 03-->
<div class="modal fade" id="modal-03" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="grid-modal">
          <div class="grid-modal-item">
            <img class="img-modal" src="{{ url('assets_front/images/consultoria.jpg')}}" alt="">
          </div>
          <div class="grid-modal-item">
            <div class="container-text-servicios">
              <h2 class="title-row-servicios">Consultoría Técnica</h2>
              <p>40 años de experiencia en el cultivo de arroz en Paraguay, Colombia (CIAT) y Brasil (IRGA).</p>
              <p>Realizamos estudio de aptitud de campo para producción de arroz y
                elaboración de proyectos de producción.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 03-->

<!-- Modal 04-->
<div class="modal fade" id="modal-04" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="grid-modal">
          <div class="grid-modal-item">
            <img class="img-modal" src="{{ url('assets_front/images/silo-2.jpg')}}" alt="">
          </div>
          <div class="grid-modal-item">
            <div class="container-text-servicios">
              <h2 class="title-row-servicios">Servicios de Secado y Almacenaje</h2>
              <p>Ubicación: Coronel Bogado - Itapúa</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 04-->

<!-- Modal 05-->
<div class="modal fade" id="modal-05" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="grid-modal">
          <div class="grid-modal-item">
            <img class="img-modal" src="{{ url('assets_front/images/serv-maq.JPG')}}" alt="">
          </div>
          <div class="grid-modal-item">
            <div class="container-text-servicios">
              <h2 class="title-row-servicios">Servicio de Máquinas</h2>
              <p>Prestamos servicios de preparación de suelo, siembra, cosecha, entre otros.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 05-->

<!-- Modal 06-->
<div class="modal fade" id="modal-06" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="grid-modal">
          <div class="grid-modal-item">
            <img class="img-modal" src="{{ url('assets_front/images/campo-experimental.jpg')}}" alt="">
          </div>
          <div class="grid-modal-item">
            <div class="container-text-servicios">
              <h2 class="title-row-servicios">Campo Experimental</h2>
              <p>Ubicación: Coronel Bogado - Itapúa <br>
                San Cosme - Itapúa <br>
                Bajo Chaco – Pte. Hayes
              </p>
              <p>Realizamos los siguientes ensayos:</p>
              <ul class="lista-servicios">
                <li>- Ensayo comparativo de rendimiento de variedades comerciales e introducidas</li>
                <li>- Introducción y Registros de variedades para uso comercial</li>
                <li>- Introducción de líneas para obtención de nuevas variedades nacionales</li>
                <li>- Ensayos comparativos y de validación de eficacia de los insumos agrícolas</li>
                <li>- Ensayos de fertilización, corrección de suelo, nutrición de planta</li>
                <li>- Ensayos de época de siembra, manejo de malezas, plagas y enfermedades</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 06-->

<!-- Modal 07-->
<div class="modal fade" id="modal-07" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="grid-modal">
          <div class="grid-modal-item">
            <img class="img-modal" src="{{ url('assets_front/images/pasantia.jpg')}}" alt="">
          </div>
          <div class="grid-modal-item">
            <div class="container-text-servicios">
              <h2 class="title-row-servicios">Programas de pasantías</h2>
              <p>Más de 30 estudiantes de universidades y colegios agrícolas han realizado sus pasantías en nuestro centro de investigación.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 07-->

<!-- Modal 08-->
<div class="modal fade" id="modal-08" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="grid-modal">
          <div class="grid-modal-item">
            <img class="img-modal" src="{{ url('assets_front/images/FAV36.JPG')}}" alt="">
          </div>
          <div class="grid-modal-item">
            <div class="container-text-servicios">
              <h2 class="title-row-servicios">Producción de Soja</h2>
              <p>Producimos soja en la ciudad de General Delgado, Departamento de Itapúa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 08-->
--}}

{{-- /////////////FIN Modales/////////////// --}}
</main>
@endsection
@section('especifico')
<script>
  const sr = ScrollReveal({
    origin: 'bottom',
    distance: '80px',
    duration: 1000,
    reset: false
  });
  sr.reveal('.title-eslogan', { delay: 200})
  sr.reveal('.subtitle-eslogan', { delay: 200})

  sr.reveal('.container-text-nosotros', { delay: 200})
  sr.reveal('.img-nosotros', { delay: 200})
  sr.reveal('.title-historia', { delay: 200})
  sr.reveal('.container-valores', { interval: 16, delay:200})
  sr.reveal('.equipo-animation', { interval: 16, delay:200})
  sr.reveal('.grid-servicios-items', { interval: 16, delay:200})

  sr.reveal('.container-mapa-info', { delay: 200})
  sr.reveal('.title-servicios', { delay: 200})

  sr.reveal('.title-servicios', { delay: 200})
  sr.reveal('.subtitle-servicios', { delay: 200})

  sr.reveal('.img-servicios', { interval: 16, delay:200})
  sr.reveal('.servi-text', { delay: 200})
  sr.reveal('.title-section', { delay: 200})
  sr.reveal('.adc-logo', { delay: 200})
  sr.reveal('.adc-img', { interval: 16, delay:200})

  sr.reveal('.contianer-timeline-text', { interval: 16, delay:200})
</script>

<script>
$('#select').change(function(){
     const select = document.getElementById("select").value;
     console.log(select);
     if (select === "Trabaja con nosotros") {
       document.getElementById('toogle-mensaje').classList.add('active');
     }
     else{
       document.getElementById('toogle-mensaje').classList.remove('active');
     }
});
jQuery(function($) {
    $('#modal-02').on('hidden.bs.modal', function (e) {
        $('html, body').animate({
            scrollTop: $("#contacto").offset().top
        }, 100);
    })
});
</script>

@endsection
