@if(session('Insert_Message'))

<div class="alert alert-success">
  <strong>Success!</strong> {{session ('Insert_Message')}}
</div>

@endif


@if(session('update_message'))

<div class="alert alert-success">
  <strong>Success!</strong> {{session ('update_message')}}
</div>

@endif

@if(session('delete_message'))

<div class="alert alert-success">
  <strong>Success!</strong> {{session ('delete_message')}}
</div>

@endif