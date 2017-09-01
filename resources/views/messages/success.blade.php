@if(Session::has('success'))
<div class="ui success message">
  <i class="close icon"></i>
  <div class="header">
    Your request was successful!
  </div>
  <p>{{ Session::get('success')}}</p>
</div>
@endif


