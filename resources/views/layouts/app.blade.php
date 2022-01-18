<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Porta Agencia Web" />
    <link rel="shortcut icon" href="{{url('assets_front/img/inarco-logo.svg')}}">
    <title>@yield('title') | Arrozal</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets_front/img/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('assets_front/img/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets_front/img/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('assets_front/img/icons/site.webmanifest')}}">
    <link rel="mask-icon" href="{{url('assets_front/img/icons/safari-pinned-tab.svg')}}" color="#d3b190">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ url('assets_template/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets_template/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ url('assets_template/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="{{ $class }}">

    @auth()
        @include('layouts.page_templates.auth')
    @endauth

    @guest
        @include('layouts.page_templates.guest')
    @endguest
    <!--   Core JS Files   -->
    <!--   Core JS Files   -->
    <script src="{{ url('assets_template/js/core/jquery.min.js') }}"></script>
    <script src="{{ url('assets_template/js/core/popper.min.js') }}"></script>
    <script src="{{ url('assets_template/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets_template/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ url('assets_template/js/plugins/moment.min.js') }}"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ url('assets_template/js/plugins/bootstrap-switch.js')}}"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{ url('assets_template/js/plugins/sweetalert2.min.js')}}"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ url('assets_template/js/plugins/jquery.validate.min.js')}}"></script>
    <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ url('assets_template/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
    <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ url('assets_template/js/plugins/bootstrap-selectpicker.js')}}"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{ url('assets_template/js/plugins/bootstrap-datetimepicker.js')}}"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
    <script src="{{ url('assets_template/js/plugins/jquery.dataTables.min.js')}}"></script>
    <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ url('assets_template/js/plugins/bootstrap-tagsinput.js')}}"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ url('assets_template/js/plugins/jasny-bootstrap.min.js')}}"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{ url('assets_template/js/plugins/fullcalendar.min.js')}}"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{ url('assets_template/js/plugins/jquery-jvectormap.js')}}"></script>
    <!--  Plugin for the Bootstrap Table -->
    <script src="{{ url('assets_template/js/plugins/nouislider.min.js')}}"></script>
    <!--  Google Maps Plugin    -->
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
    <!-- Chart JS -->
    <script src="{{ url('assets_template/js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ url('assets_template/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ url('assets_template/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ url('assets_template/demo/demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();
        });
    </script>
    @stack('scripts')
    @yield('especifico')
</body>

</html>
