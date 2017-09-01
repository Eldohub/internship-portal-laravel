 @extends('user.account')

@section('account.content')
 <h1>Congratulations {{Auth::user()->full_name}}! </h1>
 <p>You are one step closer to being a rockster professional!</p>
@endsection