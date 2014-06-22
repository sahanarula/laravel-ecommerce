@extends('layouts.login')

@section('form')
 <form action="/users/join" method="post" role="form" style="margin-bottom: 100px; margin-top: -50px;">
 	@if($errors->has())
 		<div class="alert alert-warning">
	 		<ul>
	 			@foreach($errors->all() as $error)
	 		    	<li>{{$error}}</li>
	 		    @endforeach
	 		</ul>
 		</div>
 	@endif
 	@if(Session::has('error'))
 		<div class="alert alert-danger">{{Session::get('error')}}</div>
 	@endif
 	@if(Session::has('success'))
 		<div class="alert alert-success">{{Session::get('success')}}</div>
 	@endif

    <div class="popup-header"><a href="/users/login" class="pull-left"><i class="icon-user"></i></a><span class="text-semibold">User Signup</span>
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
        <label>First Name</label>
        <input type="text" class="form-control" placeholder="First Name" name="first_name">
        <i class="icon-pencil form-control-feedback"></i></div>
      <div class="form-group has-feedback">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Last Name" name="last_name">
        <i class="icon-pencil form-control-feedback"></i></div>
      <div class="form-group has-feedback">
        <label>Username</label>
        <input type="text" class="form-control" placeholder="Username" name="username">
        <i class="icon-user form-control-feedback"></i></div>
      <div class="form-group has-feedback">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email">
        <i class="icon-mail form-control-feedback"></i></div>
      <div class="form-group has-feedback">
        <label>Contact</label>
        <input type="text" class="form-control" placeholder="Contact" name="contact">
        <i class="icon-phone form-control-feedback"></i></div>
      <div class="form-group has-feedback">
        <label>Title</label>
        <?php $titles = DB::table('titles')->get() ?>
        <select class="form-control" name="title">
          <option selected="selected" disabled="disabled">Select category</option>
          @foreach ($titles as $title)
            <option value="{{$title->title}}">{{$title->title}}</option>
          @endforeach
        </select>
        <i class="icon-users form-control-feedback"></i></div>                  
      <div class="form-group has-feedback">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password">
        <i class="icon-lock form-control-feedback"></i></div>
      <div class="form-group has-feedback">
        <label>Confirm Password</label>
        <input type="password" class="form-control" placeholder="Confirm Password" name="re-password">
        <i class="icon-lock form-control-feedback"></i></div>                      
      <div class="row form-actions">
        <div class="col-xs-6">
        </div>
        <div class="col-xs-6">
        	<input type="submit" class="btn btn-warning pull-right" value="Join">
        </div>
      </div>
    </div>
  </form>
@stop