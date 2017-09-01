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
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/components/icon.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/components/transition.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/components/sidebar.min.css">
    <style type="text/css" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/components/dropdown.min.css"></style>
    <style type="text/css">

        /**
        * Semantic UI template Resets / Customizations
        **/

        .ui.inverted.segment, .ui.primary.inverted.segment{
          background: #594b41 !important;
        }
        .ui.primary.button, .ui.primary.buttons .button{
          background-color: #8dc440;
        }


        /**
        * Menu and Sidebar Stylings
        **/
        .hidden.menu {
          display: none;
        }

        .masthead.segment {
          min-height: 700px;
          padding: 1em 0em;
        }
        .masthead .logo.item img {
          margin-right: 1em;
        }
        .masthead .ui.menu .ui.button {
          margin-left: 0.5em;
        }
        .masthead h1.ui.header {
          margin-top: 3em;
          margin-bottom: 0em;
          font-size: 4em;
          font-weight: normal;
        }
        .masthead h2 {
          font-size: 1.7em;
          font-weight: normal;
        }

        .ui.vertical.stripe {
          padding: 8em 0em;
        }
        .ui.vertical.stripe h3 {
          font-size: 2em;
        }
        .ui.vertical.stripe .button + h3,
        .ui.vertical.stripe p + h3 {
          margin-top: 3em;
        }
        .ui.vertical.stripe .floated.image {
          clear: both;
        }
        .ui.vertical.stripe p {
          font-size: 1.33em;
        }
        .ui.vertical.stripe .horizontal.divider {
          margin: 3em 0em;
        }

        .quote.stripe.segment {
          padding: 0em;
        }
        .quote.stripe.segment .grid .column {
          padding-top: 5em;
          padding-bottom: 5em;
        }

        .footer.segment {
          padding: 5em 0em;
        }

        .fixed.masthead.menu .toc.item {
          display: none;
        }

        @media only screen and (max-width: 700px) {
          .fixed.masthead.menu .item,
          .fixed.masthead.menu .menu {
            display: none;
          }
          .fixed.masthead.menu .toc.item {
            display: block;
          }
          .masthead.segment {
            min-height: 350px;
          }
          .masthead h1.ui.header {
            font-size: 2em;
            margin-top: 1.5em;
          }
          .masthead h2 {
            margin-top: 0.5em;
            font-size: 1.5em;
          }
        }
    </style>
</head>
<body>
    <div id="app">

        <!-- Main Menu -->
        <div class="ui large top fixed menu masthead">
          <div class="ui container">
            <a class="toc item">
              <i class="sidebar icon"></i>
            </a>
            <div class="item">
                <img src={{asset("/images/logo.png")}}>
            </div>
            <a class="active item" href="{{ url('/') }}">{{ config('app.name') }}</a>
            <a class="item">Our Work</a>
            <a class="item" href="{{route('interns')}}">Our Network</a>
            <div class="right menu">
           
            @if (Auth::guest())                        
              <div class="item">
                <a class="ui button" href="{{ route('login') }}">Log in</a>
              </div>
              <div class="item">
                <a class="ui primary button" href="{{ route('register') }}">Apply for internship</a>
              </div>
            @else
            <div class="ui dropdown item">
              {{ Auth::user()->email }} <i class="dropdown icon"></i>
              <div class="menu">
                <a class="item button" href="{{ route('home') }}">My Profile</a>
                <a class="item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </div>
            </div>
            @endif
            </div>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <div class="ui vertical inverted sidebar menu">
          <div class="item">
             <img class="ui mini image" src={{asset("/images/logo.png")}}>
          </div>
          <a class="active item" href="{{ url('/') }}">{{ config('app.name') }}</a>
          <a class="item">Our Work</a>
          <a class="item" href="{{route('interns')}}">Our Network</a>
          @if (Auth::guest()) 
          <a class="item">Login</a>
          <a class="item">Apply for internship</a>
          @else
          <a class="item button">My Profile</a>
          <a class="item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
          @endif
        </div>

    @yield('content')
    
    </div>

    @include('main-footer.footer')

<!-- Scripts -->
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/semantic.min.js') }}"></script>
<!-- <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/components/transition.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/components/sidebar.min.js"></script>
<script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/components/visibility.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/components/dropdown.min.js"></script>
<script>
  $(document).ready(function() {
      // create sidebar and attach to menu open
      $('.ui.sidebar').sidebar('attach events', '.toc.item');

      //Create dropdown
      $('.ui.dropdown').dropdown();

    });
</script>
</body>
</html>
