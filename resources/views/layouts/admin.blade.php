<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->

    <!--Material design-->
    <link href="{{ asset('assets/admin/css/mdb.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ asset('assets/admin/fonts/material-icons.min.css') }}" rel="stylesheet">

    <!--<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet" type="text/css"> -->

    <link href="{{ asset('assets/admin/custom/css/custom.css') }}" rel="stylesheet">

    <style>
        body{
            /*background: #d9e0e7;*/
        }
    </style>
</head>
<body >
    <div>
        <div class="bmd-layout-container bmd-drawer-f-l">

            <!-- Nav Bar -->
            <header class="bmd-layout-header">
                <div class="navbar navbar-light bg-faded">
                    <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s1">
                        <span class="sr-only">Toggle drawer</span>
                        <i class="mi mi-menu"></i>
                    </button>
                    <ul class="nav navbar-nav">
                        <li class="nav-item">Title</li>
                    </ul>
                </div>
            </header>

            <!--Side Drawer -->
            <div id="" class="bmd-drawer-f-r bg-faded dark">
                <header>
                    <a class="navbar-brand">Title</a>
                </header>
                <ul class="list-group">
                    <a class="list-group-item">Link 1</a>
                    <a class="list-group-item">Link 2</a>
                    <a class="list-group-item">Link 3</a>
                </ul>
            </div>

            <!-- Main Content -->
            <main id="app" class="bmd-layout-content">
                <div class="container">
                    @yield('content')
                </div>
            </main>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Material JS -->
    <script src="{{ asset('assets/admin/js/mdb.js') }}"></script>

@yield('scripts')
</body>
</html>
