@if(Session::has('error'))
<div class="ui negative message">
  <i class="close icon"></i>
  <div class="header">
    We're sorry we can't process your request
  </div>
  <p>{{ Session::get('error')}}</p>
</div>
@endif



