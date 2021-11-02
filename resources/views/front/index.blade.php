@extends('layouts.front')
@section('title', 'Bienvenidos')    
@section('content')
<main>
  <section class="banner">
    <div class="rev_slider_wrapper">
      <div id="rev-slider1" class="rev_slider  ">
          <ul>
              <li data-transition="random">
                  <img src="{{ url('assets_front/images/banner-1.png')}}" alt="" data-bgposition="center center" data-no-retina>
                  <div class="bg-slider-1"></div>
                  <div class="tp-caption tp-resizeme tp-img" data-x="['left','left','left','center']" data-hoffset="['350','90','150','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','40','60','60']" data-fontsize="['72','62','50','42']" data-lineheight="['86','70','64','48']"
                      data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                      data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="400" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                      <img src="{{ url('assets_front/images/logo.svg')}}" class="tf-img-slider" alt="Image" data-bgposition="center center" data-no-retina>
                  </div>

                  {{-- <div class="tp-caption tp-resizeme title-55" data-x="['left','left','left','center']" data-hoffset="['40','90','30','14']" data-y="['middle','middle','middle','middle']" data-voffset="['0','40','0','40']" data-fontsize="['72','62','50','42']" data-lineheight="['86','70','64','48']"
                      data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                      data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="400" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                      <span class="tittle1"> Sunrise on the Farm by Jean Hutchison.</span>
                  </div> --}}
                  {{-- <div class="tp-caption button-slider" data-x="['left','left','left','center']" data-hoffset="['510','465','300','70']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','120','200']" data-width="full" data-height="none" data-whitespace="normal"
                      data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                      data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                      <a class="gain-button" href="service.html">All View More +</a>
                  </div> --}}
              </li>


              <li data-transition="random">
                  <img src="{{ url('assets_front/images/banner-2.jpg')}}" alt="" data-bgposition="center center" data-no-retina>
                  <div class="bg-slider-1"></div>
                  <div class="tp-caption tp-resizeme tp-img" data-x="['left','left','left','center']" data-hoffset="['350','90','150','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','40','60','60']" data-fontsize="['72','62','50','42']" data-lineheight="['86','70','64','48']"
                      data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                      data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="400" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                      <img src="{{ url('assets_front/images/logo.svg')}}" class="tf-img-slider" alt="Image" data-bgposition="center center" data-no-retina>
                  </div>

                  {{-- <div class="tp-caption tp-resizeme title-55" data-x="['left','left','left','center']" data-hoffset="['40','90','30','14']" data-y="['middle','middle','middle','middle']" data-voffset="['0','40','0','40']" data-fontsize="['72','62','50','42']" data-lineheight="['86','70','64','48']"
                      data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                      data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="400" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                      <span class="tittle1"> Sunrise on the Farm by Jean Hutchison.</span>
                  </div> --}}
                  {{-- <div class="tp-caption button-slider" data-x="['left','left','left','center']" data-hoffset="['510','465','300','70']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','120','200']" data-width="full" data-height="none" data-whitespace="normal"
                      data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                      data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                      <a class="gain-button" href="service.html">All View More +</a>
                  </div> --}}
              </li>


              <li data-transition="random">
                  <img src="{{ url('assets_front/images/banner-3.jpg')}}" alt="" data-bgposition="center center" data-no-retina>
                  <div class="bg-slider-1"></div>
                  <div class="tp-caption tp-resizeme tp-img" data-x="['left','left','left','center']" data-hoffset="['350','90','150','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','40','60','60']" data-fontsize="['72','62','50','42']" data-lineheight="['86','70','64','48']"
                      data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                      data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="400" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                      <img src="{{ url('assets_front/images/logo.svg')}}" class="tf-img-slider" alt="Image" data-bgposition="center center" data-no-retina>
                  </div>

                  {{-- <div class="tp-caption tp-resizeme title-55" data-x="['left','left','left','center']" data-hoffset="['40','90','30','14']" data-y="['middle','middle','middle','middle']" data-voffset="['0','40','0','40']" data-fontsize="['72','62','50','42']" data-lineheight="['86','70','64','48']"
                      data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                      data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="400" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                      <span class="tittle1"> Sunrise on the Farm by Jean Hutchison.</span>
                  </div> --}}
                  {{-- <div class="tp-caption button-slider" data-x="['left','left','left','center']" data-hoffset="['510','465','300','70']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','120','200']" data-width="full" data-height="none" data-whitespace="normal"
                      data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                      data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                      <a class="gain-button" href="service.html">All View More +</a>
                  </div> --}}
              </li>

          </ul>
      </div>
    </div>
  </section>

  <section class="eslogan">
    <div class="container">
      <div class="container-eslogan-text">
        <h1 class="title-eslogan load-hidden">¡Sembrando innovación, cosechando éxitos!</h1>
        <h2 class="subtitle-eslogan load-hidden">Desde Paraguay para el mundo.</h2>
      </div>
    </div>
  </section>

  <section class="nosotros" id="nosotros">
    <div class="container">
      <div class="row row-nosotros">
        <div class="col-md-6">
          <img class="img-nosotros load-hidden" src="{{ url('assets_front/images/banner-3.jpg')}}" alt="">
        </div>
        <div class="col-md-6 col-nosotros">
          <div class="container-text-nosotros load-hidden">
            <h2 class="title-nosotros">Quiénes Somos</h2>
            <p class="text-nosotros">Arrozal S.A, fundada en 2012 y ubicada en la ciudad de Coronel Bogado-Paraguay, es una empresa familiar pionera en el servicio de consultoría y asistencia técnica, como también en la investigación privada de arroz. Hoy en día, se dedica a la producción comercial de arroz comprometida en asegurar una calidad superior.</p>
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
                <h2 class="title-valores">Misión</h2>
                <p class="valores-text">Fortalecer el potencial productivo y sustentable del arroz en Paraguay a través de la investigación científica, capacitación, producción y comercialización.
                </p>
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
                <h2 class="title-valores">Visión</h2>
                <p class="valores-text">Posicionar el arroz paraguayo en el mercado
                  internacional como referencia de calidad y responsabilidad.
                </p>
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
                <h2 class="title-valores">Valores</h2>
                <p class="valores-text">Pasión, transparencia, compromiso, Innovación, conocimiento, sustentabilidad.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="valores">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="container-valores">
            <div class="container-icon-valores">
              <img src="{{ url('assets_front/images/mision.svg')}}" alt="Icon Valores">
              <span class="semilla semilla-1"></span>
              <span class="semilla semilla-2"></span>
              <span class="semilla semilla-3"></span>
              <span class="semilla semilla-4"></span>
            </div>
            <div class="container-text-valores">
              <h2 class="title-valores">Misión</h2>
              <p class="valores-text">Fortalecer el potencial productivo y sustentable del arroz en Paraguay a través de la investigación científica, capacitación, producción y comercialización.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-valores">
            <div class="container-icon-valores">
              <img src="{{ url('assets_front/images/vision.svg')}}">
              <span class="semilla semilla-5"></span>
              <span class="semilla semilla-6"></span>
              <span class="semilla semilla-7"></span>
              <span class="semilla semilla-8"></span>
            </div>
            <div class="container-text-valores">
              <h2 class="title-valores">Visión</h2>
              <p class="valores-text">Posicionar el arroz paraguayo en el mercado
                internacional como referencia de calidad y responsabilidad.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-valores">
            <div class="container-icon-valores">
              <img src="{{ url('assets_front/images/handshake.svg')}}" alt="Icon Valores">
              <span class="semilla semilla-9"></span>
              <span class="semilla semilla-10"></span>
              <span class="semilla semilla-11"></span>
              <span class="semilla semilla-12"></span>
            </div>
            <div class="container-text-valores">
              <h2 class="title-valores">Valores</h2>
              <p class="valores-text">Pasión, transparencia, compromiso, Innovación, conocimiento, sustentabilidad.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <section class="sombra"></section>
  <section class="historia">
    <div class="container">
      <h2 class="title-historia">Nuestra Historia</h2>
      <p class="subtitle-servicios">Si necesitás información. Completá el formulario y nos comunicamos contigo.</p>
      <div class='timeline'>
        <div class='timeline-progress'>
          <input class="input-hidde" checked='checked' id='step-1' name='step' type='radio'>
          <input class="input-hidde" id='step-2' name='step' type='radio'>
          <input class="input-hidde" id='step-3' name='step' type='radio'>
          <input class="input-hidde" id='step-4' name='step' type='radio'>
          <input class="input-hidde" id='step-5' name='step' type='radio'>
          <input class="input-hidde" id='step-6' name='step' type='radio'>
          <div class='progress-container'>
            <label for='step-1'>
              <img src="{{ url('assets_front/images/1.jpg')}}" alt="">
              2004
            </label>
          </div>
          {{-- <div class='progress-container'>
            <label for='step-2'>
              <img src="{{ url('assets_front/images/2.jpg')}}" alt="">
              2010
            </label>
          </div> --}}
          <div class='progress-container'>
            <label for='step-3'>
              <img src="{{ url('assets_front/images/3.jpg')}}" alt="">
              2012
            </label>
          </div>
          <div class='progress-container'>
            <label for='step-4'>
              <img src="{{ url('assets_front/images/4.jpg')}}" alt="">
              2017
            </label>
          </div>
          <div class='progress-container'>
            <label for='step-5'>
              <img src="{{ url('assets_front/images/5.jpg')}}" alt="">
              2019
            </label>
          </div>
          
          
          <div class='progress_inner__bar'></div>
          <div class='progress_inner__bar--set'></div>
          <div class='progress-tabs'>
            <div class='tab-timeline tab-1'>
              <h5 class="title-timeline">Inicio de los servicios de consultoría
                y asistencia técnica en Paraguay.</h5>
            </div>
            {{-- <div class='tab-timeline tab-2'>
              <h5>Pack gift</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tortor ipsum, eleifend vitae massa non, dignissim finibus eros. Maecenas non eros tristique nisl maximus sollicitudin.</p>
            </div> --}}
            <div class='tab-timeline tab-3'>
              <h5 class="title-timeline">
                Formación de la empresa Arrozal S.A. - Consultoría & Asistencia Técnica, Investigación y Servicios de Pos-Cosecha
              </h5>
            </div>
            <div class='tab-timeline tab-4'>
              <h5 class="title-timeline">Inicio de la Producción Comercial de Arroz</h5>
            </div>
            <div class='tab-timeline tab-5'>
              <h5 class="title-timeline">
                <a href="https://www.gpsa.com.py/" target="_blank">
                  Formación de la sociedad Arrozales del Chaco S.A. con GPSAE – Producción de arroz en el bajo Chaco.
                </a>
              </h5>
             
            </div>
          </div>
        </div>
      </div>

      <div class="timeline-mobile">
        <div class="container-timeline-mobile">
          <div class="container-image-timeline">
            <img class="img-timeline-mobile" src="{{ url('assets_front/images/1.jpg')}}" alt="">
            <p>2004</p>
          </div>
          <div class="contianer-timeline-text">
            <h5 class="title-timeline">Inicio de los servicios de consultoría y asistencia técnica en Paraguay.</h5>
            
          </div>
        </div>
        {{-- <div class="container-timeline-mobile">
          <div class="container-image-timeline">
            <img class="img-timeline-mobile" src="{{ url('assets_front/images/2.jpg')}}" alt="">
            <p>2010</p>
          </div>
          <div class="contianer-timeline-text">
            <h5>Inicio de los servicios de consultoría y asistencia técnica en Paraguay.</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tortor ipsum, eleifend vitae massa non, dignissim finibus eros. Maecenas non eros tristique nisl maximus sollicitudin.</p>
          </div>
        </div> --}}
        <div class="container-timeline-mobile">
          <div class="container-image-timeline">
            <img class="img-timeline-mobile" src="{{ url('assets_front/images/3.jpg')}}" alt="">
            <p>2012</p>
          </div>
          <div class="contianer-timeline-text">
            <h5 class="title-timeline">Formación de la empresa Arrozal S.A. - Consultoría & Asistencia Técnica, Investigación y Servicios de Pos-Cosecha</h5>
            
          </div>
        </div>
        <div class="container-timeline-mobile">
          <div class="container-image-timeline">
            <img class="img-timeline-mobile" src="{{ url('assets_front/images/4.jpg')}}" alt="">
            <p>2017</p>
          </div>
          <div class="contianer-timeline-text">
            <h5 class="title-timeline">Inicio de la Producción Comercial de Arroz</h5>

          </div>
        </div>
        <div class="container-timeline-mobile">
          <div class="container-image-timeline last">
            <img class="img-timeline-mobile" src="{{ url('assets_front/images/5.jpg')}}" alt="">
            <p>2019</p>
          </div>
          <div class="contianer-timeline-text">
            <h5 class="title-timeline">
              <a href="https://www.gpsa.com.py/" target="_blank">
                Formación de la sociedad Arrozales del Chaco S.A. con GPSAE – Producción de arroz en el bajo Chaco.
              </a>
            </h5>
           
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="scroll" id="scroll">
    <figure class="mapa-1" id="mapa-1">
        <img class="img-1" src="{{ url('assets_front/images/prueba.png')}}" alt="">
    </figure>
    <figure class="mapa-2" id="mapa-2">
        <img class="img-2" src="{{ url('assets_front/images/prueba-2.png')}}" alt="">
    </figure>
    <figure class="mapa-3" id="mapa-3">
        <img class="img-3" src="{{ url('assets_front/images/prueba-3.png')}}" alt="">
    </figure>
    <div class="container-mapa-info">
      <h2 class="title-mapa-info">Arrozal S.A.</h2>
      <p class="text-mapa-info">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable. </p>
    </div>
  </section>

  <section class="sombra"></section>
  <section class="nuestros-sevicios" id="servicios">
    <div class="container">
      <h2 class="title-servicios">Servicios</h2>
      <p class="subtitle-servicios">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores sint consectetur exercitationem assumenda.</p>
      <div class="row row-servicios">
        <div class="col-md-12 col-lg-6">
          <img class="img-servicios" src="{{ url('assets_front/images/1.jpg')}}" alt="">
        </div>
        <div class="col-md-12 col-lg-5 offset-lg-1 servi-text">
          <img class="img-logo-servicios" src="{{ url('assets_front/images/iso.svg')}}" alt="">

          <h2 class="title-row-servicios">Producción Comercial de Arroz</h2>
          <p>Ubicación: San Cosme - Itapúa</p>
          <p>Tipo de Arroz: Arroz largo fino</p>
          <p>Época de Cosecha: Enero a Abril</p>
        </div>
      </div>
      <div class="row row-servicios">
        <div class="col-md-12 col-lg-5 col-order-1 servi-text">
          <img class="img-logo-servicios" src="{{ url('assets_front/images/iso.svg')}}" alt="">

          <h2 class="title-row-servicios">Comercialización</h2>
          <p>Exportamos arroz en cascara y actuamos
            como intermediarios de la exportación de arroz blanco.</p>
          <p>Constantemente estamos desarrollando
            mercados de exportación y relaciones valiosas a largo plazo.</p>
          <ul class="lista-servicios">
            <li>Paquetes de 1 kg - 5 kg</li>
            <li>Bolsas de 25 kg / 30kg</li>
            <li>Granel</li>
          </ul>
          <a href="#contacto" class="btn-enviar">Solicitar cotización</a>
        </div>
        <div class="col-md-12 col-lg-6 offset-lg-1 col-order-0">
          <img class="img-servicios" src="{{ url('assets_front/images/2.jpg')}}" alt="">
        </div>
      </div>
      <div class="row row-servicios">
        <div class="col-md-12 col-lg-6">
          <img class="img-servicios" src="{{ url('assets_front/images/3.jpg')}}" alt="">
        </div>
        <div class="col-md-12 col-lg-5 offset-lg-1 servi-text">
          <img class="img-logo-servicios" src="{{ url('assets_front/images/iso.svg')}}" alt="">

          <h2 class="title-row-servicios">Servicios de secado</h2>
          <p>Ubicación: Coronel Bogado - Itapúa</p>
          <p>Servicio de 24 horas durante la época de cosecha.</p>
        </div>
      </div>
      <div class="row row-servicios">
        <div class="col-md-12 col-lg-5 col-order-1 servi-text">
          <img class="img-logo-servicios" src="{{ url('assets_front/images/iso.svg')}}" alt="">

          <h2 class="title-row-servicios">Campo Experimental Privado y transferencia de tecnología</h2>
          <p>Ubicación: Coronel Bogado - Itapúa, San Cosme - Itapúa, Bajo Chaco - Chaco</p>
          <p>Realizamos los siguientes ensayos:</p>
          <ul class="lista-servicios">
            <li>Ensayo comparativo de rendimiento de variedades comerciales e introducidas.</li>
            <li>Introducción y Registros de variedades para uso comercial.</li>
            <li>Introducción de líneas para obtención de nuevas variedades nacionales.</li>
            <li>Ensayos comparativos y de validación de eficacia de los insumos agrícolas.</li>
            <li>Ensayos de fertilización, corrección de suelo, nutrición de planta.</li>
            <li>Ensayos de época de siembra, manejo de malezas, plagas y enfermedades.</li>
          </ul>
        </div>
        <div class="col-md-12 col-lg-6 offset-lg-1 col-order-0">
          <img class="img-servicios" src="{{ url('assets_front/images/4.png')}}" alt="">
        </div>
      </div>
      <div class="row row-servicios">
        <div class="col-md-12 col-lg-6">
          <img class="img-servicios" src="{{ url('assets_front/images/5.jpg')}}" alt="">
        </div>
        <div class="col-md-12 col-lg-5 offset-lg-1 servi-text">
          <img class="img-logo-servicios" src="{{ url('assets_front/images/iso.svg')}}" alt="">

          <h2 class="title-row-servicios">Programas de pasantías</h2>
          <p>Más de 30 estudiantes de universidades y colegios agrícolas han realizado sus pasantías en nuestro centro de investigación.</p>
        </div>
      </div>
      <div class="row row-servicios">
        <div class="cold-md-12 col-lg-5 col-order-1 servi-text">
          <h2 class="title-row-servicios">Consultoría Técnica</h2>
          <p>40 años de experiencia en el cultivo de arroz en Paraguay, Colombia y Brasil.</p>
          <ul class="lista-servicios">
            <li>Estudio de aptitud de campo para producción de arroz.</li>
            <li>Elaboración de proyectos de producción.</li>
          </ul>
        </div>
        <div class="cold-md-12 col-lg-6 offset-lg-1 col-order-0">
          <img class="img-servicios" src="{{ url('assets_front/images/6.jpg')}}" alt="">
        </div>
      </div>
      <div class="row row-servicios">
        <div class="col-md-12 col-lg-6">
          <iframe class="iframe-servicios" width="560" height="480" src="https://www.youtube-nocookie.com/embed/vbzP1LPUW1c?controls=0&showinfo=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-12 col-lg-5 offset-lg-1 servi-text">
          <img class="img-logo-servicios" src="{{ url('assets_front/images/iso.svg')}}" alt="">
          <h2 class="title-row-servicios">Día de Campo</h2>
          <p>Desde el año 2013, hemos estado organizando cada año el día de campo con el fin de reunir a todos los interesados en la producción de arroz. En este evento, participan productores, representantes de empresas, instituciones financieras, institutos nacionales e internacionales, profesores y estudiantes.</p>
          <p>Durante la jornada, los visitantes tienen la oportunidad de intercambiar información, recorrer el campo de producción y las parcelas experimentales, debatir importantes asuntos y situaciones del sector arrocero.</p>
          <ul class="lista-servicios">
            <li>Estudio de aptitud de campo para producción de arroz.</li>
            <li>Elaboración de proyectos de producción.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonios">
    <div class="container">
      <div class="owl-testimonios owl-carousel owl-theme">
        <div class="item">
          <div class="container-testimonios">
            <p class="text-testimonio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio deleniti tempore officia aperiam. Temporibus natus aut repudiandae aliquam iste, eos voluptas molestiae, ad maxime alias ipsam, sed facilis ratione veritatis?</p>
            <h4 class="autor-testimonio">Vanessa L. - Parent</h4>
          </div>
        </div>
        <div class="item">
          <div class="container-testimonios">
            <p class="text-testimonio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio deleniti tempore officia aperiam. Temporibus natus aut repudiandae aliquam iste, eos voluptas molestiae, ad maxime alias ipsam, sed facilis ratione veritatis?</p>
            <h4 class="autor-testimonio">Vanessa L. - Parent</h4>
          </div>
        </div>
        <div class="item">
          <div class="container-testimonios">
            <p class="text-testimonio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio deleniti tempore officia aperiam. Temporibus natus aut repudiandae aliquam iste, eos voluptas molestiae, ad maxime alias ipsam, sed facilis ratione veritatis?</p>
            <h4 class="autor-testimonio">Vanessa L. - Parent</h4>
          </div>
        </div>
        <div class="item">
          <div class="container-testimonios">
            <p class="text-testimonio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio deleniti tempore officia aperiam. Temporibus natus aut repudiandae aliquam iste, eos voluptas molestiae, ad maxime alias ipsam, sed facilis ratione veritatis?</p>
            <h4 class="autor-testimonio">Vanessa L. - Parent</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contacto" id="contacto">
    <div class="container">
      <h2 class="title-section mb-1">Contacto</h2>
      <p class="subtitle-servicios">Si necesitás información. Completá el formulario y nos comunicamos contigo.</p>
      <div class="row mt-3">
        <div class="col-md-6">
          <h3 class="title-form">Déjanos un mensaje</h3>
          <form action="#">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
            </div>
            <div class="form-group">
              <label for="asunto">Asunto</label>
              <div class="content-select-contacto">
                <select class="form-control" name="asunto" id="select" required>
                  <option value="Solicitar cotizacion" selected>Solicitar cotización</option>
                  <option value="Trabaja con nosotros">Trabajá con Nosotros</option>
                </select>
              </div>
            </div>
            <div class="form-group toogle-class" id='toogle-mensaje'>
              <div class="row">
                <div class="col-md-12">
                  <div class="custom-file">
                    <label class="file-label" for="File">Adjuntar CV (Solo .pdf o .docx)</label>
                    <input type="file" name="archivo" class="doc"  name="cv" id="archivo" accept="application/pdf,application/msword,.docx">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="mensaje">Mensaje</label>
              <textarea class="form-control" name="mensaje" id="mensaje" cols="10" rows="3" placeholder="Escriba su mensaje"></textarea>
            </div>
            <div class="form-group">
              <button class="btn-enviar">Enviar</button>
            </div>
          </form>
        </div>
        <div class="col-md-6 tabs-container">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Información</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="horario-tab" data-toggle="tab" href="#horario" role="tab" aria-controls="horario" aria-selected="false">Horario de Oficina</a>
            </li>
  
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
              <ul class="lista-info">
                <li>
                  <a href="https://goo.gl/maps/RnStzjBUWz4W2BQ98" target="_blank" class="align-items-start">
                    <div class="container-image-contacto">
                    <img class="phone" src="{{ url('assets_front/images/map.svg')}}" alt="Icono Mapa">
                    </div>
                    Ruta No 1 km 308 – Compañía San Rafael, Distrito de Coronel Bogado, Itapua – Paraguay
                  </a>
                </li>
                <li>
                  <a href="tel:+595984684092">
                    <div class="container-image-contacto">
                    <img src="{{ url('assets_front/images/phone.svg')}}" alt="Icono phone">
                    </div>
                    +595984 684 092
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
              </ul>
            </div>
            <div class="tab-pane fade" id="horario" role="tabpanel" aria-labelledby="horario-tab">
              <ul class="lista-horario">
                <li>
                  <div class="container-image-contacto">
                    <img src="{{ url('assets_front/images/clock.svg')}}" alt="Icono Hora">
                  </div>
                  Lunes- viernes: 7:30 a.m. – 17:00 p.m.
                </li>
                <li>
                  <div class="container-image-contacto">
                    <img src="{{ url('assets_front/images/clock.svg')}}" alt="Icono Hora">
                  </div>
                  Sábados: 7:30 a.m. – 12:00 a.m.
                </li>
              </ul>
            </div>
           
          </div>

          <div class="mapa-iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.9882769762517!2d-56.33582178481511!3d-27.125179208632336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9459d6339ebc7589%3A0xd402dd1d8fb8c515!2sArrozal%20S.A!5e0!3m2!1ses-419!2spy!4v1635179839354!5m2!1ses-419!2spy" width="100%" height="275" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

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
  
  sr.reveal('.container-mapa-info', { delay: 200})
  sr.reveal('.title-servicios', { delay: 200})

  sr.reveal('.title-servicios', { delay: 200})
  sr.reveal('.subtitle-servicios', { delay: 200})

  sr.reveal('.img-servicios', { interval: 16, delay:200})
  sr.reveal('.servi-text', { delay: 200})
  sr.reveal('.title-section', { delay: 200})

  sr.reveal('.tab-1', { delay:200})
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
</script>

@endsection