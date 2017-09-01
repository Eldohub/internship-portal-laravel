@extends('layouts.app')

@section('content')
<div class="ui container" style="min-height: 300px;">

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

@include('messages.success')
@include('messages.error')

@yield('account.content')
</div>
@endsection