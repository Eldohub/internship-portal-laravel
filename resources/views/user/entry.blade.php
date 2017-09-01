 @extends('user.account')

@section('account.content')
 <form class="ui large form" method="POST" action="{{ route('post-entry') }}">
    {{ csrf_field() }}
<div class="field">
	<label>Accomplished </label>
	<textarea name="accomplished" alue="{{ old('accomplished') }}" required></textarea>
</div>
<div class="field">
	<label>Lessons</label>
	<textarea name="lesson" alue="{{ old('lesson') }}" required></textarea>
</div>
<div class="field">
	<label>Suggestion</label>
	<textarea name="suggestion" alue="{{ old('suggestion') }}" required></textarea>
</div>
<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
 <button type="submit" class="ui fluid large teal submit button">
    Submit Report
</button>
</form>
@endsection