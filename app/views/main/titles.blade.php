@extends('layouts.admin')

@section('content')



 <!-- Page content -->
  <div class="page-content">

    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3>Titles <small>All titles for different users.</small></h3>
      </div>
    </div>
    <!-- /page header -->
    <!-- Breadcrumbs line -->
    <div class="breadcrumb-line">
      <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Titles</li>
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
    {{Form::open(array('method'=>'post', 'url'=>'titles/create', 'role'=>'form'))}}
      <div class="panel panel-default">
        <div class="panel-heading">
          <h6 class="panel-title"><i class="icon-pencil3"></i> Add title</h6>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label>Add Title:</label>
                <input type="text" name="title" placeholder="Administrator" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-actions text-right">
            <input type="submit" value="Add Title" class="btn btn-primary">
          </div>
        </div>
      </div>
    {{Form::close()}}

    <!-- Page tabs -->
    <div class="tabbable page-tabs">
     
      <div class="tab-content">
        <!-- First tab content -->
        <div class="tab-pane active fade in" id="inside">
          <!-- Default datatable inside panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h6 class="panel-title"><i class="icon-table"></i> Titles Database</h6>
            </div>
            <div class="datatable">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Created at</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; ?>
                  @foreach ($titles as $title)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$title->title}}</td>
                    <td>{{$title->created_at}}</td>
                    <td><a href="titles/remove/{{$title->id}}"><button class="btn btn-danger btn-sm">X</button></a></td>
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