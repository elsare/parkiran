
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Bootstrap File Input</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Preview page of Metronic Admin Theme #1 for advanced bootstrap file input examples" name="description">
        <meta content="" name="author">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css">
        <link href="{{ asset('css/plugins-md.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color">
        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
        <div class="page-wrapper">
            @include('layouts.navigation')
            <div class="page-container">
                @include('layouts.sidebar')
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>
        <div class="quick-nav-overlay"></div>
        <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
        <script src="{{ asset('js/sweetalert.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap-fileinput.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/select2.min.js') }}"></script>
        <script src="{{ asset('js/app.min.js') }}" type="text/javascript"></script>
        @yield('script')
        <script src="{{ asset('js/layout.min.js') }}" type="text/javascript"></script>
        @yield('footer')
    </body>
</html>