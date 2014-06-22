@extends('layouts.admin')

@section('content')



 <!-- Page content -->
  <div class="page-content">

    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3>Brands <small>All brands of the products.</small></h3>
      </div>
    </div>
    <!-- /page header -->
    <!-- Breadcrumbs line -->
    <div class="breadcrumb-line">
      <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Brands</li>
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
    {{Form::open(array('method'=>'post', 'url'=>'brands/create', 'role'=>'form'))}}
      <div class="panel panel-default">
        <div class="panel-heading">
          <h6 class="panel-title"><i class="icon-pencil3"></i> Add Brand</h6>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label>Add Brand:</label>
                <input type="text" name="brand" placeholder="Laptops" class="form-control">
              </div>
              <div class="col-md-6">
                <label>Select Subcategory:</label>
                <select class="form-control" name="subcategory_id">
                  <option selected="selected" disabled="disabled">Select sub-category</option>
                  <?php $subcategories = DB::table('subcategories')->get() ?>
                  @foreach ($subcategories as $sub)
                    <option value="{{$sub->id}}">{{$sub->subcategory}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-actions text-right">
            <input type="submit" value="Add Brand" class="btn btn-primary">
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
              <h6 class="panel-title"><i class="icon-table"></i> Brands Database</h6>
            </div>
            <div class="datatable">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Brand</th>
                    <th>Sub-category</th>
                    <th>Category</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; ?>
                  @foreach ($brands as $brand)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$brand->brand}}</td>
                    <td>{{$brand->subcategory->subcategory}}</td>
                    <td>{{$brand->subcategory->category->category}}</td>
                    <td><a href="brands/remove/{{$brand->id}}"><button class="btn btn-danger btn-sm">X</button></a></td>
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