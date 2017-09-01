 @extends('user.account')

@section('account.content')
<h1 class="ui header" style="margin-top: 5em; margin-bottom: 2em;">
<span class="ui left">{{date("l jS, F Y") }}</span> &nbsp;
<div class="ui large compact menu" style="float: right">
  <a class="active item" href="{{route('entry')}}">
	  <i class="browser icon"></i>
	  Today Entry
  </a>
  <a class="item" href="{{route('milestones')}}">
  	<i class="file outline icon"></i>
  	Review Milestones
  </a>
  <a class="item" href="{{route('graph')}}">
  	<i class="bar chart icon"></i>
  	Graph
  </a>
</div>
</h1>


@if(is_null(App\User::find(Auth::user()->id)->full_name))
<script type="text/javascript">
	window.location = '/user/account';
</script>
@endif
<form class="ui large form" method="POST" action="{{ route('post-entry') }}" style="margin-bottom: 10px;">
    {{ csrf_field() }}
<div class="field">
	<label>Accomplished </label>
	<textarea name="accomplished" value="{{ old('accomplished') }}" required></textarea>
</div>
<div class="field">
	<label>Lessons</label>
	<textarea name="lesson" value="{{ old('lesson') }}" required></textarea>
</div>
<div class="field">
	<label>Suggestion</label>
	<textarea name="suggestion" value="{{ old('suggestion') }}" required></textarea>
</div>
<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
 <button type="submit" class="ui fluid large teal submit button">
    Submit Report
</button>
</form>
@endsection