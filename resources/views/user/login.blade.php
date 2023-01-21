@extends('layouts.user')
@include('partials.errors')
@if(session('errorLogin'))
   <div class='alert alert-danger'>
       <p>User and Password are Wrong</p>
   </div>
@endif
<form class='col-6 container' method='post' action=''>
  {{csrf_field()}}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmail4" value="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input name="password" type="password" class="form-control" id="inputPassword4"  }}>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" style='margin-top:5px;'>Sign in</button>
</form>