<!DOCTYPE html>
<html>
<head>
  <title>E-commerccee</title>

  <link rel="stylesheet" href="{{ url('../resources/css/bootstrap.css') }}">
</head>

<body>
  
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">E-Commerccee</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>  


<!-- ini bagian crousel -->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('../resources/img/1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('../resources/img/2.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('../resources/img/3.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<section class="section-feature">
  <div class="container">
    <h3 class="container-title text-center">FEATURE</h3>
    <div class="row">

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">Header</div>
          <div class="card-body">Body</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">Header</div>
          <div class="card-body">Body</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">Header</div>
          <div class="card-body">Body</div>
        </div>
      </div>


    </div>
  </div>
</section>













<script type="text/javascript" src="{{ url('../resources/js/jquery-3.5.1.slim.min.js') }}"></script>
<script type="text/javascript" src="{{ url('../resources/js/umd/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ url('../resources/js/bootstrap.min.js') }}"></script>
</body>


</html>