    <!-- Following Menu -->
    <div class="ui large top fixed hidden menu">
      <div class="ui container">
        <div class="item">
            <img src={{asset("/images/logo.png")}}>
        </div>
        <a class="active item" href="{{ url('/') }}">{{ config('app.name') }}</a>
        <a class="item">Our Work</a>
        <a class="item">Active Interns</a>
        <div class="right menu">
       
        @if (Auth::guest())                        
          <div class="item">
            <a class="ui button" href="{{ route('login') }}">Log in</a>
          </div>
          <div class="item">
            <a class="ui primary button" href="{{ route('register') }}">Request Account</a>
          </div>
        @else
        <div class="ui dropdown item">
          {{ Auth::user()->full_name }} <i class="dropdown icon"></i>
          <div class="menu">
            <a class="item button">My Profile</a>
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
      <a class="item">Active Interns</a>
      @if (Auth::guest()) 
      <a class="item">Login</a>
      <a class="item">Request Account</a>
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