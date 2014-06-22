
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Indeant - admin page</title>
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/css/londinium-theme.min.css" rel="stylesheet" type="text/css">
<link href="/css/styles.min.css" rel="stylesheet" type="text/css">
<link href="/css/custom.css" rel="stylesheet" type="text/css">
<link href="/css/icons.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/plugins/charts/sparkline.min.js"></script>
<script type="text/javascript" src="/js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="/js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="/js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="/js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="/js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="/js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="/js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="/js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="/js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="/js/plugins/forms/switch.min.js"></script>
<script type="text/javascript" src="/js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="/js/plugins/forms/uploader/plupload.queue.min.js"></script>
<script type="text/javascript" src="/js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="/js/plugins/forms/wysihtml5/toolbar.js"></script>
<script type="text/javascript" src="/js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="/js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="/js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="/js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="/js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="/js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="/js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="/js/plugins/interface/timepicker.min.js"></script>
<script type="text/javascript" src="/js/plugins/interface/collapsible.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/angular.min.js"></script>
<script type="text/javascript" src="/js/application.js"></script>
</head>
<body class="sidebar-wide">
<!-- Navbar -->
<div class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header"><a class="navbar-brand" href="#"><img src="/images/logo.png" alt="Londinium"></a><a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons"><span class="sr-only">Toggle navbar</span><i class="icon-grid3"></i></button>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar"><span class="sr-only">Toggle navigation</span><i class="icon-paragraph-justify2"></i></button>
  </div>
  <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-people"></i><span class="label label-default">2</span></a>
      <div class="popup dropdown-menu dropdown-menu-right">
        <div class="popup-header"><a href="#" class="pull-left"><i class="icon-spinner7"></i></a><span>Activity</span><a href="#" class="pull-right"><i class="icon-paragraph-justify"></i></a></div>
        <ul class="activity">
          <li> <i class="icon-cart-checkout text-success"></i>
            <div> <a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a> <span>14 minutes ago</span> </div>
          </li>
          <li> <i class="icon-heart text-danger"></i>
            <div> Your <a href="#">latest post</a> was liked by <a href="#">Audrey Mall</a> <span>35 minutes ago</span> </div>
          </li>
          <li> <i class="icon-checkmark3 text-success"></i>
            <div> Mail server was updated. See <a href="#">changelog</a> <span>About 2 hours ago</span> </div>
          </li>
          <li> <i class="icon-paragraph-justify2 text-warning"></i>
            <div> There are <a href="#">6 new tasks</a> waiting for you. Don't forget! <span>About 3 hours ago</span> </div>
          </li>
        </ul>
      </div>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-paragraph-justify2"></i><span class="label label-default">6</span></a>
      <div class="popup dropdown-menu dropdown-menu-right">
        <div class="popup-header"><a href="#" class="pull-left"><i class="icon-spinner7"></i></a><span>Messages</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
        <ul class="popup-messages">
          <li class="unread"><a href="#"><img src="/images/demo/users/face1.png" alt="" class="user-face"><strong>Eugene Kopyov <i class="icon-attachment2"></i></strong><span>Aliquam interdum convallis massa...</span></a></li>
          <li><a href="#"><img src="/images/demo/users/face2.png" alt="" class="user-face"><strong>Jason Goldsmith <i class="icon-attachment2"></i></strong><span>Aliquam interdum convallis massa...</span></a></li>
          <li><a href="#"><img src="/images/demo/users/face3.png" alt="" class="user-face"><strong>Angel Novator</strong><span>Aliquam interdum convallis massa...</span></a></li>
          <li><a href="#"><img src="/images/demo/users/face4.png" alt="" class="user-face"><strong>Monica Bloomberg</strong><span>Aliquam interdum convallis massa...</span></a></li>
          <li><a href="#"><img src="/images/demo/users/face5.png" alt="" class="user-face"><strong>Patrick Winsleur</strong><span>Aliquam interdum convallis massa...</span></a></li>
        </ul>
      </div>
    </li>
    <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle"><i class="icon-grid"></i></a>
      <div class="popup dropdown-menu dropdown-menu-right">
        <div class="popup-header"><a href="#" class="pull-left"><i class="icon-spinner7"></i></a><span>Tasks list</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Description</th>
              <th>Category</th>
              <th class="text-center">Priority</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="status status-success item-before"></span> <a href="#">Frontpage fixes</a></td>
              <td><span class="text-smaller text-semibold">Bugs</span></td>
              <td class="text-center"><span class="label label-success">87%</span></td>
            </tr>
            <tr>
              <td><span class="status status-danger item-before"></span> <a href="#">CSS compilation</a></td>
              <td><span class="text-smaller text-semibold">Bugs</span></td>
              <td class="text-center"><span class="label label-danger">18%</span></td>
            </tr>
            <tr>
              <td><span class="status status-info item-before"></span> <a href="#">Responsive layout changes</a></td>
              <td><span class="text-smaller text-semibold">Layout</span></td>
              <td class="text-center"><span class="label label-info">52%</span></td>
            </tr>
            <tr>
              <td><span class="status status-success item-before"></span> <a href="#">Add categories filter</a></td>
              <td><span class="text-smaller text-semibold">Content</span></td>
              <td class="text-center"><span class="label label-success">100%</span></td>
            </tr>
            <tr>
              <td><span class="status status-success item-before"></span> <a href="#">Media grid padding issue</a></td>
              <td><span class="text-smaller text-semibold">Bugs</span></td>
              <td class="text-center"><span class="label label-success">100%</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </li>
    <li class="user dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><img src="/images/demo/users/face1.png" alt=""><span>Eugene Kopyov</span><i class="caret"></i></a>
      <ul class="dropdown-menu dropdown-menu-right icons-right">
        <li><a href="/users/account"><i class="icon-user"></i> Profile</a></li>
        <li><a href="/users/logout"><i class="icon-exit"></i> Logout</a></li>
      </ul>
    </li>
  </ul>
</div>
<!-- /navbar -->
<!-- Page container -->
<div class="page-container">
  <!-- Sidebar -->
  <div class="sidebar collapse">
    <div class="sidebar-content">
      <!-- User dropdown -->
      <div class="user-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/images/demo/users/face3.png" alt="">
        <div class="user-info">Madison Gartner <span>Web Developer</span></div>
        </a>
        <div class="popup dropdown-menu dropdown-menu-right">
          <div class="thumbnail">
            <div class="thumb"><img alt="" src="/images/demo/users/face3.png">
              <div class="thumb-options"><span><a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a><a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a></span></div>
            </div>
            <div class="caption text-center">
              <h6>Madison Gartner <small>Front end developer</small></h6>
            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item"><i class="icon-pencil3 text-muted"></i> My posts <span class="label label-success">289</span></li>
            <li class="list-group-item"><i class="icon-people text-muted"></i> Users online <span class="label label-danger">892</span></li>
            <li class="list-group-item"><i class="icon-stats2 text-muted"></i> Reports <span class="label label-primary">92</span></li>
            <li class="list-group-item"><i class="icon-stack text-muted"></i> Balance
              <h5 class="pull-right text-danger">$45.389</h5>
            </li>
          </ul>
        </div>
      </div>
      <!-- /user dropdown -->
      <!-- Main navigation -->
      <ul class="navigation">
        <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
        <li class="{{Request::is('users') ? 'active' : ''}}"><a href="/users"><span>Users</span> <i class="icon-users"></i></a></li>
        <li class="{{Request::is('titles') ? 'active' : ''}}"><a href="/titles"><span>Titles</span> <i class="icon-paragraph-justify"></i></a></li>
        <li><a href="#" class="expand {{Request::is('invoice/incoming')||Request::is('invoice/outgoing') ? 'level-opened' : ''}}"><span>Invoice</span> <i class="icon-stack"></i></a>
          <ul style="display:{{Request::is('invoice/incoming')||Request::is('invoice/outgoing') ? 'block' : ''}}">
            <li class="{{Request::is('invoice/incoming') ? 'active' : ''}}"><a href="/invoice/incoming">Incoming</a></li>
            <li class="{{Request::is('invoice/outgoing') ? 'active' : ''}}"><a href="/invoice/outgoing"k>Outgoing</a></li>
          </ul>
        <li class="{{Request::is('categories') ? 'active' : ''}}"><a href="/categories"><span>Categories</span> <i class="icon-numbered-list"></i></a></li>
        <li class="{{Request::is('subcategories') ? 'active' : ''}}"><a href="/subcategories"><span>Sub-categories</span> <i class="icon-numbered-list"></i></a></li>
        <li class="{{Request::is('brands') ? 'active' : ''}}"><a href="/brands"><span>Brands</span> <i class="icon-screen2"></i></a></li>
        <li><a href="#" class="expand {{Request::is('products/add')||Request::is('product/list') ? 'level-opened' : ''}}"><span>Products</span> <i class="icon-stack"></i></a>
          <ul style="display:{{Request::is('invoice/incoming')||Request::is('invoice/outgoing') ? 'block' : ''}}">
            <li class="{{Request::is('product/add') ? 'active' : ''}}"><a href="/products/add">Add Product</a></li>
            <li class="{{Request::is('product/list') ? 'active' : ''}}"><a href="/products/list"k>All Products</a></li>
          </ul>
        <li class="{{Request::is('users/account') ? 'active' : ''}}"><a href="/users/account"><span>Account</span> <i class="icon-user"></i></a></li>
        <li><a href="#" class="expand"><span>Navigation levels</span> <i class="icon-stack"></i></a>
          <ul>
            <li><a href="#">Second level first item</a></li>
            <li><a href="#" class="expand">Second level second item</a>
              <ul>
                <li><a href="#">Third level first item</a></li>
                <li><a href="#">Third level second item</a></li>
                <li><a href="#" class="expand">Third level third item</a>
                  <ul>
                    <li><a href="#">Fourth level first item</a></li>
                    <li><a href="#">Fourth level second item</a></li>
                    <li><a href="#">Fourth level third item</a></li>
                  </ul>
                </li>
                <li><a href="#">Third level second item</a></li>
              </ul>
            </li>
            <li><a href="#">Second level third item</a></li>
          </ul>
        </li>
      </ul>
      <!-- /main navigation -->
    </div>
  </div>
  <!-- /sidebar -->
  @yield('content')
  </div>
<!-- /page container -->
</body>
</html>