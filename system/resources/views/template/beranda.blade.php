<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{url('public')}}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="{{url('public')}}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  @stack('style')
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
   <div class="container"> @include('template.section.header')</div>
    @include('template.section.sidebar')
  </div>

  <div class="content-wrapper">
    <div class="container"> 
      <div class="row">
        <div class="col-md-12">
           @include('utils.notif')
        </div>
      </div>
    </div>
           @yield('content')
  </div>
   
    @include('template.section.footer')   
      </div>



<script src="{{url('public')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{url('public')}}/plugins/jquery/jquery.min.js"></script>

<script src="{{url('public')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{url('public')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('public')}}/plugins/chart.js/Chart.min.js"></script>
<script src="{{url('public')}}/plugins/sparklines/sparkline.js"></script>
<script src="{{url('public')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="{{url('public')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="{{url('public')}}/plugins/moment/moment.min.js"></script>
<script src="{{url('public')}}/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{url('public')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{url('public')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script src="{{url('public')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!--DataTables-->
<script src="{{url('public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="{{url('public')}}/dist/js/adminlte.js"></script>
<script src="{{url('public')}}/dist/js/pages/dashboard.js"></script>
<script src="{{url('public')}}/dist/js/demo.js"></script>

@stack('script')
<script>
    $(".table-datatable").DataTable();
</script>
</body>
</html>
