<div class="sidebar" data-color="black" data-active-color="primary">
    <div class="logo">
        <a href="{{route('panel')}}" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ url('/assets_front/img/inarco-logo.svg')}}">
            </div>
        </a>
        <a href="{{route('panel')}}" class="simple-text logo-normal">
            <img src="{{ url('assets_front/img/inarco-logo.svg')}}" width="100">
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

                    <p>{{ __('Inicio') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'banner' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/banner') }}">
                    <i class="nc-icon nc-image"></i>
                    <p>{{ __('Banner') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'noticia' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/noticias') }}">
                    <i class="nc-icon nc-paper"></i>
                    <p>{{ __('Noticias') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'nosotros' || $elementActive == 'equipo' || $elementActive == 'conocenos' ? 'active' : '' }}">
                <a data-toggle="collapse" href="#nosotros">
                    <i class="nc-icon nc-badge"></i>
                    <p>
                        {{ __('Nosotros') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="nosotros">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'nosotros' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'panel/quienessomos') }}">
                                <span class="sidebar-mini-icon">AS</span>
                                <span class="sidebar-normal">{{ __('Quienes Somos') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'equipo' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'panel/dondeestamos') }}">
                                <span class="sidebar-mini-icon">AE</span>
                                <span class="sidebar-normal">{{ __('Donde Estamos') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'nuestrahistoria' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/nuestrahistoria') }}">
                    <i class="nc-icon nc-world-2"></i>

                    <p>{{ __('Nuestra Historia') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'newsletter' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/servicios') }}">
                    <i class="nc-icon nc-settings"></i>

                    <p>{{ __('Servicios') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'solicitud' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/pasantias') }}">
                    <i class="nc-icon nc-money-coins"></i>

                    <p>{{ __('Pasantias') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'solicitud' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/diadecampo') }}">
                    <i class="nc-icon nc-money-coins"></i>

                    <p>{{ __('Dia de Campo') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'solicitud' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/arrozales') }}">
                    <i class="nc-icon nc-money-coins"></i>

                    <p>{{ __('Arrozales del Chaco') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
