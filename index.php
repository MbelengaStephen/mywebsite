<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Image.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
    </ul>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/nature_1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Nature</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/architecture_1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Architecture</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/travel_1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Travel</h3>
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

 <!-- Nature section -->
<section class="my-4" id="nature">
  <div class="py-4">
    <h2 class="text-center">Nature</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-3"> 
    <img src="images/nature_3.jpg" alt="nature" class="image-fluid pb-3">
  </div>
  <div class="col-lg-3"> 
    <img src="images/nature5.jpg" alt="nature" class="image-fluid pb-3">
  </div>
  <div class="col-lg-3"> 
    <img src="images/nature_3.jpg" alt="nature" class="image-fluid pb-3">
  </div>
  <div class="col-lg-3"> 
    <img src="images/nature5.jpg" alt="nature" class="image-fluid pb-3">
</div>
  </div>
  </div>
</section>

<!-- Architecture Section -->
<section class="my-4" id="architecture">
  <div class="py-4">
    <h2 class="text-center">Architecture</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-3"> 
    <img src="images/architecture5.jpg" alt="archi" class="image-fluid pb-3">
  </div>
  <div class="col-lg-3"> 
    <img src="images/architecture_1.jpg" alt="archi" class="image-fluid pb-3">
  </div>
  <div class="col-lg-3"> 
    <img src="images/architecture5.jpg" alt="archi" class="image-fluid pb-3">
  </div>
  <div class="col-lg-3"> 
    <img src="images/architecture_1.jpg" alt="archi" class="image-fluid pb-3">
</div>
  </div>
  </div>
</section>
<!-- Travel Section -->
<section class="my-4" id="travel">
  <div class="py-4">
    <h2 class="text-center">Travel</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-3"> 
    <img src="images/travel_2.jpg" alt="travel" class="image-fluid pb-3">
  </div>
  <div class="col-lg-3"> 
    <img src="images/travel_3.jpg" alt="travel" class="image-fluid pb-3">
  </div>
  <div class="col-lg-3"> 
    <img src="images/travel_2.jpg" alt="travel" class="image-fluid pb-3">
  </div>
  <div class="col-lg-3"> 
    <img src="images/travel_3.jpg" alt="travel" class="image-fluid pb-3">
</div>
  </div>
  </div>
</section>

<!-- Contact Section -->
<section class="my-4" id="contact">
<div class="py-4">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="about.php" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name." class="form-control">
      </div>
      <div class="form-group">
        <label for="name">Email</label>
        <input type="email" name="email" placeholder="Enter your email." class="form-control">
      </div>
      <div class="form-group">
        <label for="name">Phone Number</label>
        <input type="text" name="number" placeholder="Enter your  Phone Number." class="form-control">        
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
  </div>
</form>
</section><hr>

<!-- About Section  -->
<Section class="my-4" id="about">
<div class="py-4">
    <h2 class="text-center">About.</h2>
  </div>
  <div class="container-fluid">
  <h3 class="text-center">Mbelenga.</h3>
  <p class="text-center"> <b>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b> </p>
  </div>
</Section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
