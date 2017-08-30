@extends('layouts.app')

@section('content')
<div class="ui container">
    <div class="ui middle aligned center aligned grid">
        <div class="column" style="max-width: 450px; margin-top: 150px; margin-bottom: 50px;">
        <h2 class="ui teal image header">
            <img class="image" style="width:8% !important" src={{asset("/images/logo.png")}} />
            <div class="content">
                Welcome, Register Here!
            </div>
        </h2>
            <form class="ui large form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="ui stacked segment">
                    <div class="field {{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
                        </div>
                    </div>

                    <div class="field {{ $errors->has('email') ? ' has-error' : ''}}">
                        <div class="ui left icon input">
                            <i class="mail icon"></i>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email Address">
                        </div>
                    </div>

                    <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="ui left icon input">
                            <i class="key icon"></i>
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                        </div>
                    </div>

                        
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="key icon"></i>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                        </div>
                    </div>

                    <button type="submit" class="ui fluid large teal submit button">
                        Apply
                    </button>
                </div>
                
            </form>
            <div class="ui message">
                Already an Eldohub intern?<a href="/login">Login here</a>
            </div>
        </div>
    </div>
</div>
@endsection
