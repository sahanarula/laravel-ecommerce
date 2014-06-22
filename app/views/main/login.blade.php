@extends('layouts.login')

@section('form')
 <form action="/users/login" method="post" role="form">
 	@if($errors->has())
 		<ul>
 			@foreach($errors->all() as $error)
 		    	<li>{{$error}}</li>
 		    @endforeach
 		</ul>
 	@endif
 	@if(Session::has('error'))
 		<div class="alert alert-danger">{{Session::get('error')}}</div>
 	@endif
 	@if(Session::has('success'))
 		<div class="alert alert-success">{{Session::get('success')}}</div>
 	@endif
    <div class="popup-header"><a href="/users/join" class="pull-left"><i class="icon-user-plus"></i></a><span class="text-semibold">User Login</span>
      <div class="btn-group pull-right"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
        <ul class="dropdown-menu icons-right dropdown-menu-right">
          <li><a href="#"><i class="icon-people"></i> Change user</a></li>
          <li><a href="#"><i class="icon-info"></i> Forgot password?</a></li>
          <li><a href="#"><i class="icon-support"></i> Contact admin</a></li>
          <li><a href="#"><i class="icon-wrench"></i> Settings</a></li>
        </ul>
      </div>
    </div>
    <div class="well">
      <div class="form-group has-feedback">
        <label>Username</label>
        <input type="text" class="form-control" placeholder="Username" name="username">
        <input type="text" class="form-control hidden" placeholder="Username" name="title" value="administrator">
        <i class="icon-users form-control-feedback"></i></div>
      <div class="form-group has-feedback">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password">
        <i class="icon-lock form-control-feedback"></i></div>
      <div class="row form-actions">
        <div class="col-xs-6">
          <div class="checkbox checkbox-success">
            <label>
              <input type="checkbox" class="styled" name="remember">
              Remember me</label>
          </div>
        </div>
        <div class="col-xs-6">
        	<input type="submit" class="btn btn-warning pull-right" value="Sign in">
        </div>
      </div>
    </div>
  </form>
@stop