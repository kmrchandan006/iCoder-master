<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>One More Weird game</title>
    <style>
		.question{
   border-radius: 33px;
    background-color: #f2f2f2;
    border: 10px solid #1112118f;
	  padding: auto;
	  width: 78%;
	  color:black;
	  margin-left:auto;
	  margin-right:auto;
	}

  .container{
    border: 10px solid #1112118f;
    border-radius: 18px;
  
    width: 36%;
    
    }


    .container1{
      max-width: 1352px;
    /* border: 10px solid #1112118f; */
    border-radius: 2px;
    margin-left: auto;
    margin-right: auto;
    background-color: #f8f9fa;
    }
    .footer{
  
    
  .links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
      &:hover{
        text-decoration:none;
        color:#4180CB;
        }
    }
  }  
  .about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#4180CB}
    }
  } 
  .location{
    i{font-size: 18px;}
  }
  .copyright p{border-top:1px solid rgba(255,255,255,.1);} 
}


	</style>


  </head>
  <body>
    

   




  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
          <a class="dropdown-item" href="#">Easy Level</a>
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
 </nav>



 <div class="question my-4" style="padding-left: 5px;padding-right: 5px">
     <pre>
                    <strong> 
                   <h3>
                    <strong> 1).One More Weird game</strong>
                   </h3>
                   
                    Leha is playing a very interesting game. The game will be played on a rectangular grid consisting of N rows and M columns.
                    Initially all the cells of the grid are uncolored.

                    Leha's initial score is zero. At each turn, he chooses some cell that is yet not colored, and colors that cell.
                    The score obtained in this step will be number of neighboring colored cells of the cell that Leha
                    colored in this step. 
                    Two cells are neighbors of each other if they share a side between them. The game will end when all the cells are colored. 
                    Finally, total score obtained at the end of the game will sum of
                    score obtained in each turn.
                    Leha wants to know what maximum score he can get? Can you please help him in finding this out?

                    Input
                    5 6 7 9 2 5 4 3 8 4
                    Each of the following T lines contains two space-separated integers N, M denoting the dimensions of the grid. 
                    
                    Output
                    49 110 13 17 52
                    For each test case, output a single line containing an integer corresponding to the maximal possible score Leha can obtain. 
                    
                    Constraints
                    1 <= T <= 100
                    1 <= N, M <= 1 000  
                    
                    

                         
                  </pre>
                </strong>
                <!-- <h4>Input:</h4>
<table style="width:100%;text-align: center;border-collapse: collapse;" class="table-success">
<tr>
	<td style="border: 5px solid green">10 5</td>
	<td style="border: 5px solid green">20 10</td>
	<td style="border: 5px solid green">30 10</td>
	<td style="border: 5px solid green">90 90</td>
	<td style="border: 5px solid green">100 100</td>
</tr>
</table>
<p>&nbsp;</p> -->
	</div>


  <table class="table table-success container">
  <thead>
    <tr>
      <th scope="col">Test Cases</th>
      <th scope="col">Input</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><pre><strong>5  6</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><pre><strong>7  9</strong></pre></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><pre><strong>2  5</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><pre><strong>4  3</strong></pre></td>
     
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><pre><strong>8  4</strong></pre></td>
     
    </tr> 
  </tbody>
</table>


<form class=" container my-4 text-center">
<h5 class="my-4">Here you have to Enter your output Respectively:- </h5>
  
  <div class="form-group   "> 
    <label for="exampleInputEmail1">Enter Output of 1st testcase:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group  ">
    <label for="exampleInputEmail1">Enter Output of 2nd testcase:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  
  <div class="form-group"> 
    <label for="exampleInputEmail1">Enter Output of 3rd testcase:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group col-xs-3">
    <label for="exampleInputEmail1">Enter Output of 4th testcase:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group col-xs-3">
    <label for="exampleInputEmail1">Enter Output of 5th testcase:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
<center>
  <div class="container">
  <h2>iCoder Question Bank</h2>                  
  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>
    <li class="page-item"><a class="page-link" href="#">7</a></li>
    <li class="page-item"><a class="page-link" href="#">8</a></li>
    <li class="page-item"><a class="page-link" href="#">9</a></li>
    <li class="page-item"><a class="page-link" href="#">10</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
</center>

<div class="mt-5 pt-5 pb-5 footer">
<div class="container1">
  <div class="row">
  <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4 text-center" >iCoder</h4>
      <pre>
      <i>
      This is the best online platform for programmer  
      Any fool can write code that a computer can
      understand. 
      Good programmers write code that humans can
      understand.
    </i>
      </pre>
  </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3 text-center">Links</h4>
        <ul class="m-0 p-0">
          <li>- <a href="www.instagram.com">Instagram</a></li>
          <li>- <a href="www.Linkedin.com">Linkedin</a></li>
          <li>- <a href="www.Twitter.com">Twitter</a></li>
          <li>- <a href="www.Facebook.com">Facebook</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4 text-center">Conatact us</h4>
      


      <p class="mb-0"><i class="fa fa-phone mr-3"></i>Phone No - +916396267480</p>
      <p><i class="fa fa-envelope-o mr-3"></i>Email - 2019017@iiitdmj.ac.in</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class="text-center"><small class="text-dark-50"><h3 class="text-center">© 2020.All Rights Reserved to Aman_Akshat Project.</h3></small></p>
    </div>
  </div>
</div>
</div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>