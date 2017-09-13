@extends('layouts.app')

@section('content')
<div class="ui container" style="min-height: 300px;">

@include('messages.success')
@include('messages.error')

@yield('account.content')
</div>
@endsection