@extends('layouts.front')
@section('title', 'Bienvenidos')
@section('content')
<main>
  <section class="banner">
    <div class="rev_slider_wrapper">
      <div id="rev-slider1" class="rev_slider  ">
          <ul>
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
                  </div> --}}
              </li>
              <li data-transition="random">
                  <img src="{{ url('assets_front/images/Campo3.jpg')}}" alt="" data-bgposition="center center" data-no-retina>
                  <div class="bg-slider-1"></div>
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
          <img class="img-nosotros load-hidden" src="{{ url('assets_front/images/quienes-somos2.JPG')}}" loading="lazy" alt="">
        </div>
        <div class="col-md-6 col-nosotros">
          <div class="container-text-nosotros load-hidden">
            <h2 class="title-nosotros">Quiénes Somos</h2>
            <p class="text-nosotros">Arrozal S.A, fundada en 2010 y ubicada en la ciudad de Coronel Bogado en Paraguay, es una empresa familiar pionera en el servicio de consultoría y asistencia técnica, como también en la investigación privada de arroz. Hoy en día, se dedica a la producción comercial de arroz comprometida en asegurar una calidad superior.</p>
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
                <p class="valores-text">Pasión, transparencia, compromiso e integridad.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sombra"></section>
  <section class="historia">
    <div class="container">
      <h2 class="title-historia">Nuestra Historia</h2>
      <div class='timeline'>
        <div class='timeline-progress'>
          <input class="input-hidde" checked='checked' id='step-1' name='step' type='radio'>
          <input class="input-hidde" id='step-2' name='step' type='radio'>
          <input class="input-hidde" id='step-3' name='step' type='radio'>
          <input class="input-hidde" id='step-4' name='step' type='radio'>
          <input class="input-hidde" id='step-5' name='step' type='radio'>
          {{-- <input class="input-hidde" id='step-6' name='step' type='radio'> --}}
          <div class='progress-container'>
            <label for='step-1'>
              <img src="{{ url('assets_front/images/Consultoria.png')}}" loading="lazy" alt="">
              2004
            </label>
          </div>
          <div class='progress-container'>
            <label for='step-2'>
              <img src="{{ url('assets_front/images/Silos2.JPG')}}" loading="lazy" alt="">
              2012
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


          <div class='progress_inner__bar'></div>
          <div class='progress_inner__bar--set'></div>
          <div class='progress-tabs'>
            <div class='tab-timeline tab-1'>
              <h5 class="title-timeline">Inicio de los servicios de consultoría
                y asistencia técnica en Paraguay.</h5>
            </div>

            <div class='tab-timeline tab-2'>
              <h5 class="title-timeline">
                Formación de la empresa Arrozal S.A. - Consultoría & Asistencia Técnica, Campo Experimental y Servicios de secado y almacenamiento de grano.
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
          </div>
        </div>
      </div>

      <div class="timeline-mobile">
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
            <p>2012</p>
          </div>
          <div class="contianer-timeline-text">
            <h5 class="title-timeline">Formación de la empresa Arrozal S.A. - Consultoría & Asistencia Técnica, Campo Experimental y Servicios de secado y almacenamiento de grano.</h5>

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

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="scroll" id="scroll">
    <figure class="mapa-1" id="mapa-1">
      <picture>
        <source srcset="{{ url('assets_front/images/mapa-responsive-1.jpg')}}" media="(max-width: 768px)">
        <img class="img-1" src="{{ url('assets_front/images/mapa-1.jpg')}}" alt="">
       </picture>
    </figure>
    <figure class="mapa-2" id="mapa-2">
      <picture>
        <source srcset="{{ url('assets_front/images/mapa-responsive-2.jpg')}}" media="(max-width: 768px)">
        <img class="img-2" src="{{ url('assets_front/images/mapa-7.png')}}" alt="">
       </picture>
    </figure>
    <figure class="mapa-3" id="mapa-3">
      <picture>
        <source srcset="{{ url('assets_front/images/mapa-responsive-2.jpg')}}" media="(max-width: 768px)">
        <img class="img-3" src="{{ url('assets_front/images/mapa-7.png')}}" alt="">
       </picture>
    </figure>
    <div class="container-mapa-info">
      <h2 class="title-mapa-info">Donde estamos</h2>
      <p class="text-mapa-info">Nuestra producción de arroz esta ubicada en dos regiones. La primera producción se encuentra en el Departamento de Itapúa en la cuenca del Río Paraná próxima a la Central Hidroeléctrica Yacyretá. El segundo emprendimiento esta ubicado en la cuenca del Río Paraguay, en el lado Chaco próximo a la ciudad de Concepción en el Departamento de Presidente Hayes. </p>
    </div>
  </section>

  <section class="sombra sombre-blanca"></section>
  {{-- <section class="nuestros-sevicios" id="servicios">
    <div class="container">
      <h2 class="title-servicios">Nuestros Servicios</h2>

      <div class="row row-servicios">
        <div class="col-md-12 col-lg-6">
          <img class="img-servicios" src="{{ url('assets_front/images/produccion.jpg')}}" loading="lazy" alt="">
        </div>
        <div class="col-md-12 col-lg-5 offset-lg-1 servi-text">
          <div class="container-text-servicios">
            <h2 class="title-row-servicios">Producción Comercial de Arroz</h2>
            <p>Ubicación: San Cosme - Itapúa</p>
            <p>Tipo de Arroz: Arroz largo fino</p>
            <p>Época de Cosecha: Enero a Abril</p>
          </div>
        </div>
      </div>

      <div class="row row-servicios">
        <div class="col-md-12 col-lg-5 col-order-1 servi-text">
          <div class="container-text-servicios">
            <h2 class="title-row-servicios">Comercialización</h2>
            <p>Exportamos arroz en cascara y actuamos como intermediarios de la exportación de arroz blanco.</p>
            <p>Constantemente estamos desarrollando mercados de exportación y relaciones valiosas a largo plazo.</p>
            <ul class="lista-servicios">
              <li>Paquetes de 1 kg - 5 kg</li>
              <li>Bolsas de 25 kg / 30kg</li>
              <li>Granel</li>
            </ul>
            <a href="#contacto" class="btn-enviar btn-cotizacion">Solicitar cotización</a>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 offset-lg-1 col-order-0">
          <img class="img-servicios" src="{{ url('assets_front/images/1.jpg')}}" loading="lazy" alt="">
        </div>
      </div>

      <div class="row row-servicios">
        <div class="cold-md-12 col-lg-6">
          <img class="img-servicios" src="{{ url('assets_front/images/consultoria.jpg')}}" loading="lazy" alt="">
        </div>
        <div class="cold-md-12 col-lg-5 offset-lg-1 servi-text">
          <div class="container-text-servicios">
            <h2 class="title-row-servicios">Consultoría Técnica</h2>
            <p>40 años de experiencia en el cultivo de arroz en Paraguay, Colombia y Brasil.</p>
            <ul class="lista-servicios">
              <li>Estudio de aptitud de campo para producción de arroz.</li>
              <li>Elaboración de proyectos de producción.</li>
            </ul>
          </div>
        </div>

      </div>

      <div class="row row-servicios">
        <div class="col-md-12 col-lg-5 col-order-1 servi-text">
          <div class="container-text-servicios">
            <h2 class="title-row-servicios">Servicios de secado y almacenaje </h2>
            <p>Ubicación: Coronel Bogado - Itapúa</p>
            <p>Servicio de 24 horas durante la época de cosecha.</p>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 offset-lg-1 col-order-0">
          <img class="img-servicios" src="{{ url('assets_front/images/silos.jpg')}}" loading="lazy" alt="">
        </div>
      </div>

      <div class="row row-servicios">
        <div class="cold-md-12 col-lg-6">
          <img class="img-servicios" src="{{ url('assets_front/images/maquinas.jpg')}}" loading="lazy" alt="">
        </div>
        <div class="cold-md-12 col-lg-5 offset-lg-1 servi-text">
          <div class="container-text-servicios">
            <h2 class="title-row-servicios">Servicio de Máquinas</h2>
            <p>Ofrecemos nuestras maquinas para realizar actividades agricolas relacionadas a la preparacion de suelo, siembra y cosecha. </p>
          </div>
        </div>
      </div>

      <div class="row row-servicios">
        <div class="col-md-12 col-lg-5 col-order-1 servi-text">
          <div class="container-text-servicios">
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
        </div>
        <div class="col-md-12 col-lg-6 offset-lg-1 col-order-0">
          <img class="img-servicios" src="{{ url('assets_front/images/experimental.jpg')}}" loading="lazy" alt="">
        </div>
      </div>

      <div class="row row-servicios pasantias" id="pasantias">
        <div class="col-md-12 col-lg-6">
          <img class="img-servicios" src="{{ url('assets_front/images/pasantia.jpg')}}" loading="lazy" alt="">
        </div>
        <div class="col-md-12 col-lg-5 offset-lg-1 servi-text">
          <div class="container-text-servicios">
            <h2 class="title-row-servicios">Programas de pasantías</h2>
            <p>Más de 30 estudiantes de universidades y colegios agrícolas han realizado sus pasantías en nuestro centro de investigación.</p>
          </div>
        </div>
      </div>

      <div class="row row-servicios mb-0 paddig-servicios">
        <div class="col-md-12 col-lg-5 col-order-1 servi-text">
          <div class="container-text-servicios">
            <h2 class="title-row-servicios">Día de Campo</h2>
            <p>Desde el año 2013, hemos estado organizando cada año el día de campo con el fin de reunir a todos los interesados en la producción de arroz. En este evento, participan productores, representantes de empresas, instituciones financieras, institutos nacionales e internacionales, profesores y estudiantes.</p>
            <p>Durante la jornada, los visitantes tienen la oportunidad de intercambiar información, recorrer el campo de producción y las parcelas experimentales, debatir importantes asuntos y situaciones del sector arrocero.</p>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 offset-lg-1 col-order-0">
          <iframe class="iframe-servicios" width="560" height="480" src="https://www.youtube-nocookie.com/embed/vbzP1LPUW1c?controls=0&showinfo=0&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section> --}}

  <section class="nuestros-sevicios" id="servicios">
    <div class="container">
      <h2 class="title-servicios">Nuestros Servicios</h2>

      <div class="grid-servicios">
        <div class="grid-servicios-items col-md-6">
          <div class="grid-servicios-images">
            <img src="{{ url('assets_front/images/produccion.jpg')}}" alt="">
          </div>
          <div class="grid-servicios-text">
            <h2 class="grid-servicios-title">Producción Comercial de Arroz</h2>
            <p class="grid-servicios-text">San Cosme – Itapúa (Arrozal S.A.), Pte. Hayes – Bajo Chaco (Arrozales del Chaco S.A.). Tipo de Arroz: Arroz largo fino. Época de Cosecha: Enero a Abril</p>
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
            <p class="grid-servicios-text">40 años de experiencia en el cultivo de arroz en Paraguay, Colombia y Brasil.</p>
          </div>
          <div class="grid-sevicions-button">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-03" class="grid-servicios-btn">Ver más</a>
          </div>
        </div>

        <div class="grid-servicios-items col-md-6">
          <div class="grid-servicios-images">
            <img src="{{ url('assets_front/images/silos.jpg')}}" alt="">
          </div>
          <div class="grid-servicios-text">
            <h2 class="grid-servicios-title">Servicios de secado y almacenaje</h2>
            <p class="grid-servicios-text">Ubicación: Coronel Bogado - Itapúa <br> Servicio de 24 horas durante la época de cosecha.</p>
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
            <p class="grid-servicios-text">Prestamos servicio de máquinas a la empresa Arrozales del Chaco cubriendo una área del 40%.</p>
          </div>
          <div class="grid-sevicions-button">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-05" class="grid-servicios-btn">Ver más</a>
          </div>
        </div>

        <div class="grid-servicios-items col-md-6">
          <div class="grid-servicios-images">
            <img src="{{ url('assets_front/images/experimental.jpg')}}" alt="">
          </div>
          <div class="grid-servicios-text">
            <h2 class="grid-servicios-title">Campo Experimental <br> Privado</h2>
            <p class="grid-servicios-text">Ubicación: Coronel Bogado - Itapúa, San Cosme - Itapúa, Bajo Chaco – Pte. Hayes</p>
          </div>
          <div class="grid-sevicions-button">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-06" class="grid-servicios-btn">Ver más</a>
          </div>
        </div>

        {{-- <div class="grid-servicios-items">
          <div class="grid-servicios-images">
            <img src="{{ url('assets_front/images/pasantia.jpg')}}" alt="">
          </div>
          <div class="grid-servicios-text">
            <h2 class="grid-servicios-title">Programas de pasantías</h2>
            <p class="grid-servicios-text">Más de 30 estudiantes de universidades y colegios agrícolas han realizado sus pasantías en nuestro centro de investigación.</p>
          </div>
          <div class="grid-sevicions-button">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-07" class="grid-servicios-btn">Ver más</a>
          </div>
        </div> --}}

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

      </div>
    </div>
  </section>

  <section class="pasantia" id="pasantia">

      <h2 class="title-servicios">Programas de pasantías</h2>
      <p class="text-pasantia">Más de 30 estudiantes de universidades y colegios agrícolas han realizado sus pasantías en nuestro centro de investigación.</p>

      <div class="grid-pasantia">
        <div class="grid-pasantia-item">
          <img src="{{ url('assets_front/images/Pasantia1.jpg')}}" alt="">
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
      </div>
  </section>

  <section class="pb-5 d-none">

      <h2 class="title-servicios">Día de Campo</h2>
      <p class="text-pasantia">Desde el año 2013, hemos estado organizando cada año el día de campo con el fin de reunir a todos los interesados en la producción de arroz. En este evento, participan productores, representantes de empresas, instituciones financieras, institutos nacionales e internacional, profesores y estudiantes.
        Durante la jornada, los visitantes tienen la oportunidad de intercambiar información, recorrer el campo de producción y las parcelas experimentales, debatir importantes asuntos y situaciones del sector arrocero.
      </p>

      <div class="grid-pasantia">
        <div class="grid-pasantia-item">
          <img src="{{ url('assets_front/images/Campo1.jpg')}}" alt="">
        </div>
        <div class="grid-pasantia-item">
          <img src="{{ url('assets_front/images/Campo2.jpeg')}}" alt="">
        </div>
        <div class="grid-pasantia-item">
          <img src="{{ url('assets_front/images/Campo3.jpg')}}" alt="">
        </div>
      </div>
  </section>

  <section class="adc">
    <div class="container">
      <img src="{{asset('assets_front/images/adc-logo1.png')}}" alt="Arrozales del Chaco S.A." class="adc-logo" loading="lazy">
      <p class="text-adc">Por medio de la unión de ARROZAL S.A. Y G.P.S.A.E., nace en el 2019 la empresa Arrozales del Chaco S.A. - El proyecto arrocero de mayor impacto en el país ubicado en el departamento Presidente Hayes. Hoy en día, se producen 6,000 hectáreas y se apunta a alcanzar el área de 10,000 hectáreas.
      </p>

      <div class="video-container mb-4">
        <iframe src="https://www.youtube.com/embed/ySJLXFdLGSk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <div class="row" style="gap: 30px 0px;">
        <div class="adc-img col-6 col-md-6">
          <img src="{{ url('assets_front/images/ADCH0.JPG')}}" class="img-fluid" loading="lazy" alt="">
        </div>
        <div class="adc-img col-6 col-md-6">
          <img src="{{ url('assets_front/images/ADCH1.JPG')}}" class="img-fluid" loading="lazy" alt="">
        </div>
        <div class="adc-img col-6 col-md-6">
          <img src="{{ url('assets_front/images/ADCH2.JPG')}}" class="img-fluid" loading="lazy" alt="">
        </div>
        <div class="adc-img col-6 col-md-6">
          <img src="{{ url('assets_front/images/ADCH3.JPG')}}" class="img-fluid" loading="lazy" alt="">
        </div>
        <div class="adc-img col-6 col-md-6">
          <img src="{{ url('assets_front/images/ADCH4.JPG')}}" class="img-fluid" loading="lazy" alt="">
        </div>
        <div class="adc-img col-6 col-md-6">
          <img src="{{ url('assets_front/images/ADCH5.JPG')}}" class="img-fluid" loading="lazy" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="contacto" id="contacto">
    <div class="container">
      <h2 class="title-section mb-1">Contacto</h2>
      <div class="row mt-4">
        <div class="col-md-12">
          <ul class="lista-info">
            <li>
              <a href="https://goo.gl/maps/RnStzjBUWz4W2BQ98" target="_blank" class="align-items-start">
                <div class="container-image-contacto">
                <img class="phone" src="{{ url('assets_front/images/map.svg')}}" alt="Icono Mapa">
                </div>
                Ruta Nº 1 km 308 – Compañía San Rafael, Distrito de Coronel Bogado, Itapua – Paraguay
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
            <li>
              <a href="#">
                <div class="container-image-contacto">
                  <img src="{{ url('assets_front/images/clock.svg')}}" alt="Icono Hora">
                </div>
                <p>Lunes- viernes: 7:30 a.m. – 17:00 p.m. <br>
                Sábados: 7:30 a.m. – 12:00 a.m.</p>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <div class="row mt-4">
        <div class="col-md-6">

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
                  <option value="Otros">Otros</option>
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
          {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
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

          </div> --}}

          <div class="mapa-iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.9882769762517!2d-56.33582178481511!3d-27.125179208632336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9459d6339ebc7589%3A0xd402dd1d8fb8c515!2sArrozal%20S.A!5e0!3m2!1ses-419!2spy!4v1635179839354!5m2!1ses-419!2spy" width="100%" height="462" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

{{-- /////////////Modales/////////////// --}}
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
              <h2 class="title-row-servicios">Producción Comercial de Arroz</h2>
              <p>Ubicación: San Cosme – Itapúa (Arrozal S.A.) <br>
                Pte. Hayes – Bajo Chaco (Arrozales del Chaco S.A.)
              </p>
              <p>Tipo de Arroz: Arroz largo fino</p>
              <p>Época de Cosecha: Enero a Abril</p>
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
              <ul class="lista-servicios">
                <li>Paquetes de 1 kg - 5 kg</li>
                <li>Bolsas de 25 kg / 30kg</li>
                <li>Granel</li>
              </ul>
              <a href="#contacto" class="btn-enviar btn-cotizacion">Solicitar cotización</a>
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
              <p>40 años de experiencia en el cultivo de arroz en Paraguay, Colombia y Brasil.</p>
              <p>Realizamos estudio de aptitud de campo para producción de arroz y elaboración de proyectos de producción.</p>
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
            <img class="img-modal" src="{{ url('assets_front/images/silos.jpg')}}" alt="">
          </div>
          <div class="grid-modal-item">
            <div class="container-text-servicios">
              <h2 class="title-row-servicios">Servicios de secado y almacenaje </h2>
              <p>Ubicación: Coronel Bogado - Itapúa</p>
              <p>Servicio de 24 horas durante la época de cosecha.</p>
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
              <p>Prestamos servicio de máquinas a la empresa Arrozales del Chaco cubriendo una área del 40%.</p>
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
            <img class="img-modal" src="{{ url('assets_front/images/experimental.jpg')}}" alt="">
          </div>
          <div class="grid-modal-item">
            <div class="container-text-servicios">
              <h2 class="title-row-servicios">Campo Experimental <br> Privado</h2>
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
</script>

@endsection
