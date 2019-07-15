<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ env('APP_NAME') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/library.css"> 
  <link rel="stylesheet" href="/css/app.css?v={{uniqid()}}">
  <link rel="stylesheet" href="/css/image-picker.css">
  <link rel="stylesheet" href="/css/main.css?v={{uniqid()}}"> 
  <link rel="stylesheet" href="/dist/css/skins/skin-purple.css">
  
  <!-- Autocomplete -->
  <link rel="stylesheet" href="/css/autocomplete.css"> 

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


  
  
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="/js/ownWidgets.js"></script> 
  <script src="/js/image-picker.js"></script>   
  <script src="/js/image-picker.min.js"></script> 
  <script src="/js/autocomplete.js"></script>   


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]--> 
  
  <!-- Para calendario, popup, progress bar -->
    <link rel="stylesheet" href="/js//themes/base/jquery.ui.all.css">
    <script src="/js/jquery-1.8.3.js"></script>
    <script src="/js/ui/jquery.ui.core.js"></script>
    <script src="/js/ui/jquery.ui.widget.js"></script>
    <script src="/js/ui/jquery.ui.datepicker.js"></script> 
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition sidebar-collapse skin-purple fixed sidebar-mini">
<div class="wrapper">

  
 <!--header-->
 @include('admin.partial.header')
 <!--sidebar-->
 @include('admin.partial.sidebar')
  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
   @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.partial.footer')
<script src="https://maps.googleapis.com/maps/api/js?key={{env("GOOGLE_API_KEY")}}"></script>
<script src="/js/main.js?v={{ uniqid() }}"></script>
 
</div>


</body>
</html>
