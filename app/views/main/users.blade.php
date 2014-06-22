@extends('layouts.admin')

@section('content')
 <!-- Page content -->
  <div class="page-content">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3>Users <small>All users consisting of suppliers, buyers, administrators.</small></h3>
      </div>
    </div>
    <!-- /page header -->
    <!-- Breadcrumbs line -->
    <div class="breadcrumb-line">
      <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Users</li>
      </ul>
    </div>
    <!-- /breadcrumbs line -->
    <!-- Page tabs -->
    <div class="tabbable page-tabs">
     
      <div class="tab-content">
        <!-- First tab content -->
        <div class="tab-pane active fade in" id="inside">
          <!-- Default datatable inside panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h6 class="panel-title"><i class="icon-table"></i> Users Database</h6>
            </div>
            <div class="datatable">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Title</th>
                    <th>Created_at</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; ?>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$user->first_name}} {{$user->last_name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->contact}}</td>
                    <td>{{$user->title}}</td>
                    <td>{{$user->created_at}}</td>
                    <td><a href="users/remove/{{$user->id}}"><button class="btn btn-danger btn-sm">X</button></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
         
         </div>
        <!-- /third tab content -->
      </div>
    </div>
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