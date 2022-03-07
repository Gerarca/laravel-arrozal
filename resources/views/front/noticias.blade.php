@extends('layouts.front')
@section('title', 'Noticias')
@section('content')
<main class="main-blog">
  <section class="banner-novedades">
    <div class="container">
      <h2 class="title-blog">{{ trans_choice('navigation.noticias',1) }} </h2>
    </div>
  </section>
  <section class="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="grid-blog">

            @if (!$Noticias->isEmpty())
                @foreach ($Noticias as $Noticia)
                <div class="item-grid-blog">
                    <div class="container-blog">
                        <div class="container-image-blog">
                            <a href="{{ $Noticia->enlace }}" target="_blank">
                                <img class="image-blog" src="{{ url('uploads/'.$Noticia->imagen)  }}" loading="lazy" alt="">
                            </a>
                            <p class="fecha">{{ $Noticia->year }}</p>
                        </div>
                        <div class="body-text-novedades">
                            <div class="container-info-blog">
                                <a href="{{ $Noticia->enlace }}" target="_blank">
                                    {{ $Noticia->titulo }}
                                </a>
                            </div>
                            <div class="container-blog-info">
                                <div class="blog-fecha">
                                    <p class="fuente">{{ trans_choice('sentences.fuente',1) }} : {{ $Noticia->fuente }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif

            {{--
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
            --}}
          </div>
        </div>
        <div class="col-md-3">
          <div class="filtros ">
            <h2 class="title-filtros m-auto">{{ trans_choice('sentences.por-anos',1) }} </h2>
            <ul class="lista-filtros">
                @if (count($NoticiasAnos) > 0 )
                    @foreach ($NoticiasAnos as $key => $value)
                        <li class="d-flex">
                            <a class="m-auto" href="{{ route('front.noticias.toyear',$key) }}">{{ $key }}</a>
                        </li>
                    @endforeach
                @endif
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
