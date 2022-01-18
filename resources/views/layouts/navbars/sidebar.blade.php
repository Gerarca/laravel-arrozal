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
            <li class="{{ $elementActive == 'usuarios' || $elementActive == 'editar_perfil' || $elementActive == 'roles' ? 'active' : '' }}">
                <a data-toggle="collapse" href="#users">
                    <i class="nc-icon nc-circle-10"></i>

                    <p>
                        {{ __('Usuarios') }}
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="users">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'usuarios' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'panel/usuarios') }}">
                                <span class="sidebar-mini-icon">AU</span>
                                <span class="sidebar-normal">{{ __('Administrar Usuarios') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'roles' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'panel/roles') }}">
                                <span class="sidebar-mini-icon">R</span>
                                <span class="sidebar-normal">{{ __('Roles') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'banner' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/banner') }}">
                    <i class="nc-icon nc-image"></i>
                    <p>{{ __('Banner') }}</p>
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
                            <a href="{{ route('page.index', 'panel/nosotros') }}">
                                <span class="sidebar-mini-icon">AS</span>
                                <span class="sidebar-normal">{{ __('Administrar Secciones') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'equipo' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'panel/equipo') }}">
                                <span class="sidebar-mini-icon">AE</span>
                                <span class="sidebar-normal">{{ __('Administrar Equipo') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'conocenos' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'panel/conocenos') }}">
                                <span class="sidebar-mini-icon">AC</span>
                                <span class="sidebar-normal">{{ __('Administrar Conocenos') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'proyectos' || $elementActive == 'imagenes_proyecto'  ? 'active' : '' }}">
                <a data-toggle="collapse" href="#proyectos">
                    <i class="nc-icon nc-chart-bar-32"></i>
                    <p>
                            {{ __('Proyectos') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="proyectos">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'proyectos' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'panel/proyectos') }}">
                                <span class="sidebar-mini-icon">AS</span>
                                <span class="sidebar-normal">{{ __('Administrar Secciones') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'imagenes_proyecto' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'panel/imagenes_proyecto') }}">
                                <span class="sidebar-mini-icon">AI</span>
                                <span class="sidebar-normal">{{ __('Administrar Imagenes') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'desarrollo' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/desarrollo') }}">
                    <i class="nc-icon nc-world-2"></i>

                    <p>{{ __('Desarrollo') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'newsletter' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/newsletter') }}">
                    <i class="nc-icon nc-email-85"></i>

                    <p>{{ __('Newsletter') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'solicitud' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'panel/solicitud') }}">
                    <i class="nc-icon nc-money-coins"></i>

                    <p>{{ __('Solicitudes') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
