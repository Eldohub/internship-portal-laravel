@extends('layouts.app')

@section('content')
<div class="ui container">
<div class="ui large compact menu" style="margin-top: 10em; margin-bottom: 5em;">
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
@yield('account.content')
</div>
@endsection