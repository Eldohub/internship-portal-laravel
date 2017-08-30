@extends('layouts.app')

@section('content')
 <div class="ui container">
 <div class="ui middle aligned center aligned grid">
  <div class="column" style="max-width: 450px; margin-top: 150px; margin-bottom: 50px;">
    <h2 class="ui teal image header">
      <img class="image" style="width:8% !important" src={{asset("/images/logo.png")}} />
      <div class="content">
        Howdy, Welcome 127.0.0.1!
      </div>
    </h2>   
    <form class="ui large form" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i><input name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail address" type="text" />
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i><input name="password" placeholder="Password" type="password" />
          </div>
        </div>
        <div class="ui toggle checkbox" style="float: left; margin-bottom: 10px;">
         <input type="checkbox" name="remember">
         <label>Remember Me</label>
        </div>
        <button type="submit" class="ui fluid large teal submit button">
            Login
        </button>
         <a class="ui left fluid" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>
      </div>
      <div class="ui error message"></div>
    </form>
    <div class="ui message">
      Not an Eldohub intern?<a href=""> Apply here</a>
    </div>
  </div>
</div>
</div>

@endsection
