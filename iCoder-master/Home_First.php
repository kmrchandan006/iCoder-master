 <?php
// session_start();
// if(!isset($_SESSION['username'])){
//     header('location: login.php');
// }
?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>iCoder</title>
   
    <style>
  .container1{
        padding-top: 24px;
        max-width: 1363px;
        border: 1px solid #1112118f;
        border-radius: 2px;
        margin-left: -78px;
        margin-right: -123px;
        background-color: #f8f9fa;
        border-radius: 18px;
      }
    </style>




  </head>
  <body>


      <!-- navbar start -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">iCoder</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Practice
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="demo2.php">Easy Level</a>
          <a class="dropdown-item" href="#">Moderate Level</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Difficult Level</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
 </nav> -->
 <!-- navbar end -->
 <?php include('nav-bar.php'); ?>
 
 
 <div class="container-fluid">

 <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="tech1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fix the couse, not the symptom</h5>
        <button class="btn btn-success">Easy</button>
        <button class="btn btn-primary">Medium</button>
        <button class="btn btn-primary">Medium</button>
        <button class="btn btn-danger">Difficult</button>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="tech2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Simplicity is the soul of efficiency</h5>
        <button class="btn btn-success" herf="demo2.php">Easy</button>
        <button class="btn btn-primary">Medium</button>
        <button class="btn btn-danger">Difficult</button>
        <!-- //yaha pargraph tag tha -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="tech3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Make it work, make it right, make it fast</h5>
        <button class="btn btn-success">Easy</button>
        <button class="btn btn-primary">Medium</button>
        <button class="btn btn-danger">Difficult</button>  
        
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

</div>
<div class="container my-4">    
    <button type="button" class="btn btn-success btn-lg btn-block my-4">Easy Level</button>
    <button type="button" class="btn btn-primary btn-lg btn-block my-4">Moderate Level</button>
    <button type="button" class="btn btn-primary btn-lg btn-block my-4">Moderate Level</button>
    <button type="button" class="btn btn-danger btn-lg btn-block my-4">Difficult Level</button>



  </body>
</html>