@extends('layouts.front')
@section('title', 'Noticias')    
@section('content')
<main class="main-blog">
  <section class="banner-novedades">
    <div class="container">
      <h2 class="title-blog">Noticias</h2>
    </div>
  </section>
  <section class="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="grid-blog">
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://infonegocios.com.py/infoagro/arrozales-del-chaco-el-proyecto-que-aposto-al-cultivo-de-arroz-en-suelo-chaqueno-ya-exporta-casi-el-100-de-su-produccion" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-1.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">6/28/2021</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://infonegocios.com.py/infoagro/arrozales-del-chaco-el-proyecto-que-aposto-al-cultivo-de-arroz-en-suelo-chaqueno-ya-exporta-casi-el-100-de-su-produccion" target="_blank">Arrozales del Chaco, el proyecto que apostó al cultivo de arroz en suelo chaqueño ya exporta casi el 100% de su producción.
                    </a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: InfoNegocios</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.campoagropecuario.com.py/notas/2200/experiencia-exitosa-que-suma-valor" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-2.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">4/20/2021</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.campoagropecuario.com.py/notas/2200/experiencia-exitosa-que-suma-valor" target="_blank">Experiencia exitosa que suma valor.</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: Campo Agropecuario</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.abc.com.py/nacionales/2021/03/15/el-arroz-expande-su-horizonte-en-el-chaco/" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-9.jpg')}}" loading="lazy" alt="Avatinas">
                  </a>
                  <p class="fecha">3/15/2021</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.abc.com.py/nacionales/2021/03/15/el-arroz-expande-su-horizonte-en-el-chaco/" target="_blank">El arroz expande su horizonte en el chaco.</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ABC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.productivacm.com/soja-fiel-companera-del-arroz-en-suelos-marginales/" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-4.jpg')}}" loading="lazy" alt="Avatinas">
                  </a>
                  <p class="fecha">1/19/2021</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.productivacm.com/soja-fiel-companera-del-arroz-en-suelos-marginales/" target="_blank">Soja: fiel compañera del arroz en suelos marginales.</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: Productiva</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.usaid.gov/sites/default/files/documents/1862/arroz.pdf" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/4.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">5/1/2020</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.usaid.gov/sites/default/files/documents/1862/arroz.pdf" target="_blank">USAID – Paraguay verde arroz negocio creciente.</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: USAID</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.abc.com.py/tv/abc-rural/2020/03/21/programa-18-arrozales-del-chaco/" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-5.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">3/21/2020</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.abc.com.py/tv/abc-rural/2020/03/21/programa-18-arrozales-del-chaco/" target="_blank">Programa 18: Arrozales del Chaco.</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ABC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.abc.com.py/edicion-impresa/suplementos/abc-rural/2020/03/04/el-chaco-muestra-que-es-apto-para-el-cultivo-del-arroz-y-su-desarrollo/" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-6.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">3/4/2020</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.abc.com.py/edicion-impresa/suplementos/abc-rural/2020/03/04/el-chaco-muestra-que-es-apto-para-el-cultivo-del-arroz-y-su-desarrollo/" target="_blank">El Chaco muestra que es apto para el cultivo de arro y su desarrollo.</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ABC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.lanacion.com.py/negocios_edicion_impresa/2020/02/29/grupo-gpsa-presenta-su-potencial-productivo-en-3-jornada-del-arroz/" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-7.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">2/29/2020</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.lanacion.com.py/negocios_edicion_impresa/2020/02/29/grupo-gpsa-presenta-su-potencial-productivo-en-3-jornada-del-arroz/" target="_blank">Grupo GPSA presenta su potencial productivo en 3ª Jornada del Arroz.</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: La Nacion</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.ultimahora.com/cultivo-arroz-el-chaco-tuvo-exitoso-resultado-n2872256.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/3.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">2/28/2020</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.ultimahora.com/cultivo-arroz-el-chaco-tuvo-exitoso-resultado-n2872256.html" target="_blank">Cultivo de arroz en el Bajo Chaco tuvo exitoso resultado.</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ULTIMA HORA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.campoagropecuario.com.py/notas/264/firme-crecimiento-del-proyecto-arrocero-de-gpsa-y-arrozal-en-el-chaco" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-8.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">2/25/2020</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.campoagropecuario.com.py/notas/264/firme-crecimiento-del-proyecto-arrocero-de-gpsa-y-arrozal-en-el-chaco" target="_blank">Firme crecimiento del Proyecto arrocero de GPSA Y ARROZAL EN EL CHACO.</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: Campo Agropecuario</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.abc.com.py/edicion-impresa/economia/2020/02/25/la-produccion-de-arroz-se-cuadruplico-en-10-anos/" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-9.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">2/22/2020</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.abc.com.py/edicion-impresa/economia/2020/02/25/la-produccion-de-arroz-se-cuadruplico-en-10-anos/" target="_blank">La produccion de arroz se cuadruplico en 10 años</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ABC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.abc.com.py/edicion-impresa/suplementos/abc-rural/2020/02/05/arroz-debe-seguir-creciendo/" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-11.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">2/5/2020</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.abc.com.py/edicion-impresa/suplementos/abc-rural/2020/02/05/arroz-debe-seguir-creciendo/" target="_blank">Arroz debe seguir creciendo</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ABC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.campoagropecuario.com.py/notas/676/gpsa-lanzo-la-campana-de-arroz-20192020" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-12.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">7/16/2019</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.campoagropecuario.com.py/notas/676/gpsa-lanzo-la-campana-de-arroz-20192020" target="_blank">GPSA lanzó la campaña de Arroz 2019/2020</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: Campo Agropecuario</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://gauchazh.clicrbs.com.br/economia/campo-e-lavoura/noticia/2019/04/lavouras-de-arroz-avancam-240-em-10-anos-no-paraguai-e-atraem-industrias-cjud2z5a401d501rtsipt0722.html" target="_blank">
                    <img class="image-blog"  src="{{ url('assets_front/images/noticias/noticia10.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">4/12/2019</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://gauchazh.clicrbs.com.br/economia/campo-e-lavoura/noticia/2019/04/lavouras-de-arroz-avancam-240-em-10-anos-no-paraguai-e-atraem-industrias-cjud2z5a401d501rtsipt0722.html" target="_blank">Lavouras de arroz avançam 240% em 10 anos no Paraguai e atraem indústrias</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: Gauchazh</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.abc.com.py/edicion-impresa/suplementos/abc-rural/produccion-de-arroz-en-armonia-con-el-medio---ing-agr-hector-ramirez--1792740.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-13.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">3/6/2019</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.abc.com.py/edicion-impresa/suplementos/abc-rural/produccion-de-arroz-en-armonia-con-el-medio---ing-agr-hector-ramirez--1792740.html" target="_blank">Produccion de arroz en armonia con el medio - Ing. Agr. Hector Ramirez</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ABC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://campoagropecuario.com.py/notas/1130/avanza-la-agricultura-en-el-corazon-del-chaco" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-12.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">3/6/2019</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://campoagropecuario.com.py/notas/1130/avanza-la-agricultura-en-el-corazon-del-chaco" target="_blank">Avanza la agricultura en el corazón del chaco</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: Campo Agropecuario</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.abc.com.py/edicion-impresa/suplementos/abc-rural/investigacion-y-tecnologia-en-arroz---ing-agr-hector-ramirez--1675010.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-14.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">2/14/2018</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.abc.com.py/edicion-impresa/suplementos/abc-rural/investigacion-y-tecnologia-en-arroz---ing-agr-hector-ramirez--1675010.html" target="_blank">Investigacion y Tecnologia en arroz - Ing. Agr. Hector Ramirez</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ABC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.abc.com.py/edicion-impresa/suplementos/abc-rural/arroz-para-el-mundo-1675008.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-12.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">2/14/2018</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.abc.com.py/edicion-impresa/suplementos/abc-rural/arroz-para-el-mundo-1675008.html" target="_blank">Arroz para el mundo</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ABC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://rcc.com.py/nacionales/arroz-en-el-chaco/" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-15.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">2/1/2018</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://rcc.com.py/nacionales/arroz-en-el-chaco/" target="_blank">Arroz en el Chaco</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: RCC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.adndigital.com.py/etiqueta/hector-ramirez/" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-16.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">6/11/2017</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.adndigital.com.py/etiqueta/hector-ramirez/" target="_blank">Preocupa a arroceros paraguayos la incertidumbre en el Brasil</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ADN Politico</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.ultimahora.com/la-incertidumbre-brasil-preocupa-los-arroceros-paraguayos-n1086560.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-17.png')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">5/20/2017</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.ultimahora.com/la-incertidumbre-brasil-preocupa-los-arroceros-paraguayos-n1086560.html" target="_blank">La incertidumbre en Brasil preocupa a los arroceros paraguayos</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ULTIMA HORA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.ultimahora.com/optimismo-el-rubro-del-arroz-dos-anos-dificiles-n1059639.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-12.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">2/1/2017</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.ultimahora.com/optimismo-el-rubro-del-arroz-dos-anos-dificiles-n1059639.html" target="_blank">Optimismo para el rubro del arroz tras dos años difíciles</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ULTIMA HORA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.abc.com.py/edicion-impresa/suplementos/gaceta-del-sur/arrozal-recibe-una-distincion-internacional-1452090.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-18.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">2/10/2016</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.abc.com.py/edicion-impresa/suplementos/gaceta-del-sur/arrozal-recibe-una-distincion-internacional-1452090.html" target="_blank">Arrozal recibe una distición internacional</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ABC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.abc.com.py/edicion-impresa/economia/paraguay-apunta-a-varios-mercados-de-centroamerica-para-el-arroz-1451041.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-19.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">2/5/2016</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.abc.com.py/edicion-impresa/economia/paraguay-apunta-a-varios-mercados-de-centroamerica-para-el-arroz-1451041.html" target="_blank">Paraguay apunta a varios mercado de centroamerica para el arroz</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ABC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.ultimahora.com/productores-cautelosos-el-desarrollo-campana-sojera-n948369.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-20.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">11/26/2015</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.ultimahora.com/productores-cautelosos-el-desarrollo-campana-sojera-n948369.html" target="_blank">Productores, cautelosos ante el desarrollo de campaña sojera</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ULTIMA HORA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.ultimahora.com/exportacion-arroz-esta-paralizada-dicen-industriales-n904962.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-21.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">6/15/2015</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.ultimahora.com/exportacion-arroz-esta-paralizada-dicen-industriales-n904962.html" target="_blank">Exportación de arroz está paralizada, dicen industriales</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ULTIMA HORA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.abc.com.py/edicion-impresa/economia/buscan-que-arrozales-sean-amigables-con-las-aves-1396750.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-22.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">5/10/2015</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.abc.com.py/edicion-impresa/economia/buscan-que-arrozales-sean-amigables-con-las-aves-1396750.html" target="_blank">Buscan que arrozales sean amigables con las aves</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ABC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.lanacion.com.py/2015/04/22/inversion-tecnologica-es-la-fortaleza-del-sector-arrocero/" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-23.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">4/21/2015</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.lanacion.com.py/2015/04/22/inversion-tecnologica-es-la-fortaleza-del-sector-arrocero/" target="_blank">Inversión tecnológica es la fortaleza del sector arrocero</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: La Nacion</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.ultimahora.com/la-crisis-el-brasil-amenaza-las-empresas-exportadoras-paraguayas-n882104.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-12.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">3/22/2015</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.ultimahora.com/la-crisis-el-brasil-amenaza-las-empresas-exportadoras-paraguayas-n882104.html" target="_blank">La crisis en el Brasil amenaza a las empresas exportadoras paraguayas</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ULTIMA HORA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.ultimahora.com/siembra-arroz-aumentara-mas-del-10-este-ano-afirman-los-productores-n844510.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-24.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">11/4/2014</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.ultimahora.com/siembra-arroz-aumentara-mas-del-10-este-ano-afirman-los-productores-n844510.html" target="_blank">Siembra de arroz aumentará en más del 10% este año, afirman los productores</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ULTIMA HORA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.ultimahora.com/arroceros-reclaman-mas-apoyo-entes-publicos-su-labor-n812948.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-25.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">7/18/2014</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.ultimahora.com/arroceros-reclaman-mas-apoyo-entes-publicos-su-labor-n812948.html" target="_blank">Arroceros reclaman más apoyo de entes públicos a su labor</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ULTIMA HORA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://www.ultimahora.com/arroceros-reclaman-mayor-apoyo-instituciones-publicas-n812807.html" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-12.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">7/17/2014</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://www.ultimahora.com/arroceros-reclaman-mayor-apoyo-instituciones-publicas-n812807.html" target="_blank">Arroceros reclaman mayor apoyo a instituciones públicas</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: ULTIMA HORA</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="item-grid-blog">
              <div class="container-blog">
                <div class="container-image-blog">
                  <a href="https://flar.org/paraguay-el-area-de-cultivo-del-arroz-crecio-cerca-del-33-por-ciento/" target="_blank">
                    <img class="image-blog" src="{{ url('assets_front/images/noticias/noticia-8.jpg')}}" loading="lazy" alt="">
                  </a>
                  <p class="fecha">3/12/2011</p>
                </div>
                <div class="body-text-novedades">
                  <div class="container-info-blog">
                    <a href="https://flar.org/paraguay-el-area-de-cultivo-del-arroz-crecio-cerca-del-33-por-ciento/" target="_blank">PARAGUAY – EL ÁREA DE CULTIVO DEL ARROZ CRECIÓ CERCA DEL 33 POR CIENTO</a>
                  </div>
                  <div class="container-blog-info">
                    <div class="blog-fecha">
                      <p class="fuente">Fuente: FLAR</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
        <div class="col-md-3">
          <div class="filtros">
            <h2 class="title-filtros">Por años</h2>
            <ul class="lista-filtros">
              <li>
                <a href="#">2020 - 2021</a>
              </li>
              <li>
                <a href="#">2018 - 2019</a>
              </li>
              <li>
                <a href="#">2016 - 2017</a>
              </li>
              <li>
                <a href="#">2014 - 2015</a>
              </li>
              <li>
                <a href="#">2012 - 2013</a>
              </li>
              <li>
                <a href="#">2010 - 2011</a>
              </li>
            </ul>
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
  sr.reveal('.title-banner', { delay: 200})

  sr.reveal('.item-grid-blog', { interval: 16, delay:200})

</script>
@endsection