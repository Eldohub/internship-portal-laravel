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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet" type="text/css">
    <style>
        body{
            background: #d9e0e7;
        }
    </style>
</head>
<body >
    <div id="app">
        <v-app toolbar>
            <toolbar></toolbar>
            <drawer></drawer>
            <main class="mt-5">
                <v-container fluid class="mt-2">
                    <router-view></router-view>
                    <!-- @yield('content') -->
                </v-container>
            </main>
        </v-app>
        
        <!-- <dashboard></dashboard> -->
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
