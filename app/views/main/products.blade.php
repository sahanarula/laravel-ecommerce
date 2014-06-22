@extends('layouts.admin')

@section('content')



 <!-- Page content -->
  <div class="page-content">

    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3>Products <small>Inventory Management here.</small></h3>
      </div>
    </div>
    <!-- /page header -->
    <!-- Breadcrumbs line -->
    <div class="breadcrumb-line">
      <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Products</li>
      </ul>
    </div>
    <!-- /breadcrumbs line -->
    <div id="success" class="alert alert-success" hidden>
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         File added successfully.
    </div>
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
    {{Form::open(array('method'=>'post', 'url'=>'subcategories/create', 'role'=>'form'))}}
      <div class="panel panel-default">
        <div class="panel-heading">
          <h6 class="panel-title"><i class="icon-pencil3"></i> Add Product</h6>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label>Add title:</label>
                <input type="text" name="title" placeholder="Silk Saree" class="form-control">
              </div>
              <div class="col-md-6">
                <label>Select Category:</label>
                <?php $categories = DB::table('categories')->get() ?>
                <select class="form-control" name="category_id">
                  <option selected="selected" disabled="disabled">Select category</option>
                  @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label>Description</label>
                <textarea id="description" placeholder="Add description here..." class="form-control" name="description"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label>Price</label>
                <input type="text" placeholder="price..." name="price" class="form-control">
              </div>
              <div class="col-md-6">
                <label>Weight</label>
                <input type="weight" placeholder="weight..." name="weight" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h6><i class="icon-upload"></i> Images Uploader</h6>
                  <div class="multiple-uploader">Your browser doesn't support native upload.</div>
                </div>
                <?php $query = DB::table('products')->max('id');?>
                <input type="number" class="form-control hidden" value="{{$query+1}}" id="product_id">
              </div>
            </div>
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
     
      <div class="tab-content">
        <!-- First tab content -->
        <div class="tab-pane active fade in" id="inside">
          <!-- Default datatable inside panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h6 class="panel-title"><i class="icon-table"></i> Sub-categories Database</h6>
            </div>
            <div class="datatable">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Subcategory</th>
                    <th>Root Category</th>
                    <th>Created at</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                
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