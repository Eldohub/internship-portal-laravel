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

    <link href="{{ asset('assets/admin/css/mdb.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link href="{{ asset('assets/admin/fonts/material-icons.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/admin/custom/css/custom.css') }}" rel="stylesheet">

    @yield('style')
    <style>
        body{
            /*background: #d9e0e7;*/
        }
        .bmd-layout-content{
            z-index: 0 !important;
        }
    </style>
</head>
<body >
    <div>
        <div class="bmd-layout-container bmd-drawer-f-l">
            <!-- Nav Bar -->
                <nav class="navbar navbar-light bg-faded">
                    <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s1">
                        <span class="sr-only">Toggle drawer</span>
                        <i class="mi mi-menu light"></i>
                    </button>
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <button class="btn bmd-btn-icon">
                                <i class="mi mi-notifications"></i>
                                <div class="ripple-container"></div>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="submit" form="logout-form" class="btn bmd-btn-icon">
                                <i class="mi mi-exit-to-app"></i>
                                <div class="ripple-container"></div>
                            </button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button id="adminDropdownMenu" class="btn bmd-btn-icon btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mi mi-more-vert"></i>
                                    <div class="ripple-container"></div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdownMenu">
                                    <a href="/" class="dropdown-item">Home</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </nav>

            <!--Side Drawer -->
            <div id="" class="bmd-drawer-f-r bg-faded dark">
                <header class="navbar-brand ">
                    Eldo Hub Admin

                    <div>
                    </div>
                </header>
                <div class="divider"></div>
                <ul class="list-group">
                    <a class="list-group-item dark active" href="">
                        <i class="mi mi-home nav-icon"></i>Dashboard</a>
                    <a class="list-group-item dark" href="">
                        <i class="mi mi-people nav-icon"></i>Members</a>
                    <a class="list-group-item dark" href="">
                        <i class="mi mi-face nav-icon"></i>Interns</a>
                    <a class="list-group-item dark" href="">
                        <i class="mi mi-verified-user nav-icon"></i>Supervisors</a>
                    <a class="list-group-item dark" href="">
                        <i class="mi mi-inbox nav-icon"></i>Inbox</a>
                </ul>
            </div>

            <!-- Main Content -->
            <main id="app" class="bmd-layout-content">
                @yield('content')
                <footer class="light text-center">
                    <p>&copy; &nbsp;{{ date('Y') }} | Made with&nbsp;<i class="mi mi-favorite" style="color: #d4105d"></i>&nbsp;by Eldo-hub Dev.</p>
                </footer>
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
