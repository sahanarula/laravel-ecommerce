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
     <div id="success" class="alert alert-success" hidden>
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         Product Updated successfully.
    </div>
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
                    <th>Sku</th>
                    <th>title</th>
                    <th>Price</th>
                    <th>Products left</th>
                    <th>Created at</th>
                    <th>In Stock</th>
                    <th>Update</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; ?>
                  @foreach ($products as $product)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$product->sku}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->price}}</td>
                    <td>yes</td>
                    <td>{{$product->created_at}}</td>
                    <td>
                      <label class="checkbox-inline">
                        <input type="checkbox" class="switch switch-mini" data-on="success" data-off="danger" data-on-label="A" data-off-label="N" {{$product->availability ? 'checked' : ''}}>
                      </label>
                    </td>
                    <td>
                      <div class="btn btn-success btn-sm update" id="{{$product->id}}" disabled>  update
                      </div>
                      <i class="icon-spinner7 spin"></i>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <script type="text/javascript">
            
            $('i').hide();
            $(':checkbox').change(function(event) {
                $('#success').hide();
                $(this).parents('td').next('td').children('.btn').removeAttr('disabled');
            });
            $('.update').click(function(event) {
              var id = $(this).attr('id');
              $(this).siblings('i').show();
              $.post('/products/availability',
              {
                id: id,
              },
              function(data, textStatus, xhr) {
                  $('.spin').hide();
                  window.location.href="#";
                  $('#success').fadeIn('slow');
              });
            });
          </script>
         
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