<!DOCTYPE html>
<html>
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
<head>
  <title>Shopping All</title>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('public')}}/img/client/akustik.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="row pt-4 pl-5 ">  
        <div class="card " style="width: 13rem; margin-left: 80px;">
          <img src="{{url('public')}}/img/client/akustik.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Gitar Akustik</h5>
            <p class="card-text">RP 5.000.000</p>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i> 
           <p> <a href="{{url('/akustik')}}" class="btn btn-warning">BELI</a></p>
          </div>
        </div>
        <div class="card ml-4 mr-4" style="width: 13rem;">
          <img src="{{url('public')}}/img/client/bass1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Gitar Bass</h5>
            <p class="card-text">RP 3.500.000</p>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i> 
            <p><a href="{{url('/bass')}}" class="btn btn-warning">BELI</a></p>
          </div>
        </div>
        <div class="card" style="width: 13rem;">
          <img src="{{url('public')}}/img/client/drum1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Drum</h5>
            <p class="card-text">RP 6.500.000</p>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p><a href="drum" class="btn btn-warning">BELI</a></p>
          </div>
        </div>
        <div class="card ml-4 mr-4" style="width: 13rem;">
          <img src="{{url('public')}}/img/client/piano.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Piano</h5>
            <p class="card-text">RP 4.890.000</p>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i> 
           <p> <a href="piano" class="btn btn-warning">BELI</a></p>
            
          </div>
        </div>
      </div>















<footer class="footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
    </div>

<script src="{{url('public')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{url('public')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{url('public')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('public')}}/plugins/chart.js/Chart.min.js"></script>
<script src="{{url('public')}}/plugins/sparklines/sparkline.js"></script>
<script src="{{url('public')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{url('public')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="{{url('public')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="{{url('public')}}/plugins/moment/moment.min.js"></script>
<script src="{{url('public')}}/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{url('public')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{url('public')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script src="{{url('public')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{url('public')}}/dist/js/adminlte.js"></script>
<script src="{{url('public')}}/dist/js/pages/dashboard.js"></script>
<script src="{{url('public')}}/dist/js/demo.js"></script>

</body>
</html>