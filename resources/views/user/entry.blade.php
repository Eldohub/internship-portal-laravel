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

<div class="ui alternate stripe vertical segment" id="date-section">
  <div class="ui stackable center aligned grid container">
    <div class="fourteen wide column">
      <h1 class="ui icon header">
        <img class="ui inline icon image" src="/images/icons/rocket.png">
        You Entry is in lockdown till 5:00PM!
      </h1>
      <div class="ui stackable center aligned vertically padded grid">
        <div class="eight wide column">
          <h3 id="timer" class="ui header basic button" style="padding: 10px">0h 0Mins 0sec</h3>
          <p>Use this time to grow your skills by completing tasks that will mutually achieve Eldohub objectives as you learn.</p>
          <a class="ui large right labeled primary icon button" target="_blank" href="https://trello.com/invite/b/zfXngYxJ/b4a987eac92f7dce068e9e52b523560d/eldohub-website-revamp">
            <i class="right chevron icon"></i>
            Current Task - Eldohub Trello Board
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="entry-section">
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
</div>


<script type="text/javascript">

//By Default, entry is hidden
document.getElementById("entry-section").style.display = 'none';

var today = new Date();

// Schedule counting down to today 5PM
var countDownDate = new Date(today.getFullYear(), today.getMonth(), today.getDate(), 17,0, 0);

// Update the count down every 1 second
var x = setInterval(function() {
    

    // Get refreshing todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Display the countdown from 0000hrs
    document.getElementById("timer").innerHTML = hours + "hr "
     + minutes + "min " + seconds + "sec ";
    
    
    // If the count down is over, remove the countdown, auto-restarts at 0000hrs
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("date-section").style.display = 'none';
        document.getElementById("entry-section").style.display = 'block';
    }
}, 1000);
</script>
@endsection