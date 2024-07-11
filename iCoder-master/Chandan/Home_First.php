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
  <body >


      <!-- navbar start -->
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
        <h5 style="color:black">Fix the couse, not the symptom</h5>
        <button class="btn btn-success">Easy</button>
        <button class="btn btn-primary">Medium</button>
        <button class="btn btn-danger">Difficult</button>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="tech2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Simplicity is the soul of efficiency</h5>
        <button class="btn btn-success">Easy</button>
        <button class="btn btn-primary">Medium</button>
        <button class="btn btn-danger">Difficult</button>
        <!-- //yaha pargraph tag tha -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="tech3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 >Make it work, make it right, make it fast</h5>
        <a type="button" class="btn btn-success " href="Home_Easy.php">Easy Level</a>
        <a type="button" class="btn btn-primary" href="Home_Medium.php">Moderate Level</a>
        <a type="button" class="btn btn-danger" href="Home_Difficult.php">Difficult Level</a>

  
        
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
<br/>
<br/>
<br/>
<br/>
</div>
<div class="container my-4">    
    <a type="button" class="btn btn-success btn-lg btn-block my-4" href="Home_Easy.php">Easy Level</a>
    <a type="button" class="btn btn-primary btn-lg btn-block my-4" href="Home_Medium.php">Moderate Level</a>
    <a type="button" class="btn btn-danger btn-lg btn-block my-4"  href="Home_Difficult.php">Difficult Level</a>


<?php include('footer.php'); ?>



  </body>
</html>