 @extends('user.account')

@section('account.content')

<div class="ui four cards" style="margin-bottom: 5px;">
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
</div>


@endsection