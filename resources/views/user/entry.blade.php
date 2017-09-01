 @extends('user.account')

@section('account.content')
 <form class="ui large form" method="POST" action="{{ route('post-entry') }}">
    {{ csrf_field() }}
<div class="field">
	<label>Accomplished </label>
	<textarea></textarea>
</div>
<div class="field">
	<label>Lessons</label>
	<textarea></textarea>
</div>
<div class="field">
	<label>Suggestion</label>
	<textarea></textarea>
</div>

</form>
@endsection