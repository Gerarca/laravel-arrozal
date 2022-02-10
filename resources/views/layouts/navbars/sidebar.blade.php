<div class="sidebar" data-color="black" data-active-color="primary">
    <div class="logo">
        <a href="{{route('panel')}}" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ url('/assets_front/images/logo.svg')}}">
            </div>
        </a>
        <a href="{{route('panel')}}" class="simple-text logo-normal">
            <img src="{{ url('assets_front/images/logo.svg')}}" width="100">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                @if(Auth::user() && strlen(Auth::user()->image)>=1)
                    <img src="{{ url('uploads/'.Auth::user()->image) }}"/>
                @else
                    <img src="{{ url('assets_template/img/default-avatar.png') }}"/>
                @endif
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#" class="collapsed">
              <span>
                {{ Auth::user()->name }}
              </span>
                </a>
            </div>
        </div>
        <ul class="nav">
            <li class="{{ $elementActive == 'panel' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel') }}">
                    <i class="nc-icon nc-layout-11"></i>

                    <p>{{ trans_choice('navigation.inicio', 1) }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'banner' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/banner') }}">
                    <i class="nc-icon nc-image"></i>
                    <p>{{ trans_choice('navigation.banner', 1) }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'noticia' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/noticias') }}">
                    <i class="nc-icon nc-paper"></i>
                    <p>{{ trans_choice('navigation.noticias', 1) }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'nosotros' || $elementActive == 'equipo' || $elementActive == 'conocenos' ? 'active' : '' }}">
                <a data-toggle="collapse" href="#nosotros">
                    <i class="nc-icon nc-badge"></i>
                    <p>
                        {{trans_choice('navigation.nosotros', 1)}}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="nosotros">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'nosotros' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'panel/quienessomos') }}">
                                <span class="sidebar-mini-icon">{{ trans_choice('navigation.quienes-somos', 2) }}</span>
                                <span class="sidebar-normal">{{ trans_choice('navigation.quienes-somos', 1) }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'equipo' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'panel/dondeestamos') }}">
                                <span class="sidebar-mini-icon">{{ trans_choice('navigation.donde-estamos', 2) }}</span>
                                <span class="sidebar-normal">{{ trans_choice('navigation.donde-estamos', 1) }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'nuestrahistoria' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/nuestrahistoria') }}">
                    <i class="nc-icon nc-calendar-60"></i>

                    <p>{{ trans_choice('navigation.nuestra-historia', 1) }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'servicios' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/servicios') }}">
                    <i class="nc-icon nc-alert-circle-i"></i>

                    <p>{{ trans_choice('navigation.servicios', 1) }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'pasantias' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/pasantias') }}">
                    <i class="nc-icon nc-map-big"></i>

                    <p>{{ trans_choice('navigation.pasantias', 1) }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'diadecampo' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/diacampo') }}">
                    <i class="nc-icon nc-single-copy-04"></i>

                    <p>{{ trans_choice('navigation.dia-campo', 1) }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'arrozales' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/arrozales') }}">
                    <i class="nc-icon nc-money-coins"></i>

                    <p>{{ __('Arrozales del Chaco') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
