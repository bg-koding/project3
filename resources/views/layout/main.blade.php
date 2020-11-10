<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="../resources/css/bootstrap.css">
	<link rel="stylesheet" href="../resources/css/app.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../public/product">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../public/contact">Contact</a>
      </li>
    </ul>
  </div>
  <div class="justify-content-end">
  	<ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/login">Login</a>
      </li>
    </ul>
  </div>
</nav>


<!-- content -->
  @yield('container')
<!-- End content -->


<script type="text/javascript" src="../resources/js/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="../resources/js/umd/popper.min.js"></script>
<script type="text/javascript" src="../resources/js/bootstrap.min.js"></script>
</body>
</html>