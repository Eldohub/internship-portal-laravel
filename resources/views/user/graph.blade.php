 @extends('user.account')

@section('account.content')
<h1 class="ui header" style="margin-top: 5em; margin-bottom: 2em;">
<span class="ui left">{{date("l jS, F Y") }}</span> &nbsp;
<div class="ui large compact menu" style="float: right">
  <a class="item" href="{{route('entry')}}">
	  <i class="browser icon"></i>
	  Today Entry
  </a>
  <a class="item" href="{{route('milestones')}}">
  	<i class="file outline icon"></i>
  	Review Milestones
  </a>
  <a class="active item" href="{{route('graph')}}">
  	<i class="bar chart icon"></i>
  	Graph
  </a>
</div>
</h1>

<div class="ui icon message large" style="margin-bottom: 5em;">
  <i class="notched circle loading icon"></i>
  <div class="content">
    <div class="header">
      This is still work in progress...
    </div>
    <p>Here, you will be able to track your milestones on realtime graph.</p>
  </div>
</div>
@endsection