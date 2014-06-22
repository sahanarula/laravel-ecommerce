
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Londinium - premium responsive admin template by Eugene Kopyov</title>
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/css/londinium-theme.min.css" rel="stylesheet" type="text/css">
<link href="/css/styles.min.css" rel="stylesheet" type="text/css">
<link href="/css/icons.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/application.js"></script>
</head>
<body class="full-width page-condensed">
<!-- Navbar -->
<div class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-right"><span class="sr-only">Toggle navbar</span><i class="icon-grid3"></i></button>
    <a class="navbar-brand" href="#"><img src="/images/logo.png" alt="Londinium"></a></div>
  
</div>
<!-- /navbar -->
<!-- Login wrapper -->
<div class="login-wrapper">
@yield('form')
</div>
<!-- /login wrapper -->
<!-- Footer -->
<div class="footer clearfix" style="position:fixed">
  <div class="pull-left">&copy; 2014. Indeant admin page by <a href="http://github.com/sahanarula">Sahil Narula</a></div>
</div>
<!-- /footer -->
</body>
</html>