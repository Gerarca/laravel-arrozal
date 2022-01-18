@include('layouts.navbars.navs.guest')

<div class=" wrapper-full-page">
    <div class="full-page section-image" filter-color="black" data-image="{{ asset('assets_front') . '/' . ($backgroundImagePath ?? "img/banner/banner01.jpg") }}">
        @yield('content')
        @include('layouts.footer')
    </div>
</div>
