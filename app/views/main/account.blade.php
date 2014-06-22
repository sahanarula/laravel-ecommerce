@extends('layouts.admin')

@section('content')



 <!-- Page content -->
  <div class="page-content">

    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3>Account <small>Update your profile here.</small></h3>
      </div>
    </div>
    <!-- /page header -->
    <!-- Breadcrumbs line -->
    <div class="breadcrumb-line">
      <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Account</li>
      </ul>
    </div>
    <!-- /breadcrumbs line -->

    @if(Session::has('success'))
    	<div class="alert alert-success">
    		 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    		{{Session::get('success')}}
    	</div>
    @endif
    @if($errors->has())
    	<div class="alert alert-danger">
    		 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    		@foreach($errors->all() as $err)
	    		<ul>
	    		    <li>{{$err}}</li>
	    		</ul>
    		@endforeach
    	</div>
    @endif
    {{Form::open(array('method'=>'post', 'url'=>'users/update', 'role'=>'form'))}}
      <div class="panel panel-default">
        <div class="panel-heading">
          <h6 class="panel-title"><i class="icon-pencil3"></i> Update Profile</h6>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label>First Name:</label>
                <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control">
              </div>
              <div class="col-md-6">
                <label>Last Name:</label>
                <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label>Email:</label>
                <input type="text" name="email" value="{{$user->email}}" class="form-control">
              </div>
              <div class="col-md-6">
                <label>Contact:</label>
                <input type="text" name="contact" value="{{$user->contact}}" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label>Password:</label>
                <input type="password" name="password" placeholder="password..." class="form-control">
              </div>
              <div class="col-md-6">
                <label>Confirm Password:</label>
                <input type="password" name="re-password" placeholder="confirm password..." class="form-control">
              </div>
            </div>
          </div>
          <div class="form-actions text-right">
            <input type="submit" value="Update Profile" class="btn btn-primary">
          </div>
        </div>
      </div>
      <script type="text/javascript">
        var value = 3;
        $('.age option[value="'+value+'"]').attr('selected', 'selected');
      </script>
    {{Form::close()}}

    <!-- Page tabs -->
    <div class="tabbable page-tabs">
     
    <!-- /page tabs -->
    <!-- Footer -->
    <div class="footer clearfix">
      <div class="pull-left">&copy; 2014. Indeant Admin page by <a href="http://github.com/sahanarula">Sahil Narula</a></div>
      <div class="pull-right icons-group"> <a href="#"><i class="icon-screen2"></i></a> <a href="#"><i class="icon-balance"></i></a> <a href="#"><i class="icon-cog3"></i></a> </div>
    </div>
    <!-- /footer -->
  </div>
  <!-- /page content -->

@stop