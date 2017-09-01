 @extends('user.account')

@section('account.content')
 <form class="ui large form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
<div class="field">
	<label>Text</label>
	<textarea></textarea>
</div>

</form>
@endsection