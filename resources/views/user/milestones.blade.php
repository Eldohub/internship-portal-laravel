 @extends('user.account')

@section('account.content')
<h1 class="ui header" style="margin-top: 5em; margin-bottom: 2em;">
<span class="ui left">{{date("l jS, F Y") }}</span> &nbsp;
<div class="ui large compact menu" style="float: right">
  <a class="item" href="{{route('entry')}}">
	  <i class="browser icon"></i>
	  Today Entry
  </a>
  <a class="active item" href="{{route('milestones')}}">
  	<i class="file outline icon"></i>
  	Review Milestones
  </a>
  <a class="item" href="{{route('graph')}}">
  	<i class="bar chart icon"></i>
  	Graph
  </a>
</div>
</h1>

<div class="ui four cards" style="margin-bottom: 5em;">
@if($milestones->isEmpty())
<div class="ui success icon message large" style="margin-bottom: 5em;">
  <i class="minus circle icon"></i>
  <div class="content">
    <div class="header">
      You don't have any entry yet! 
    </div>
    <p>Add your entry for today to start your journey of growing self</p>
  </div>
</div>
@else
@foreach($milestones as $milestone)
  <div class="card">
    <div class="content">
      <div class="header">{{date("l jS F", strtotime($milestone->created_at))}}</div>
      <div class="meta">Day {{$loop->iteration}}</div>
      <div class="description">
        {{ $milestone->accomplished }}
      </div>
    </div>
  </div>
@endforeach
@endif

</div>


@endsection