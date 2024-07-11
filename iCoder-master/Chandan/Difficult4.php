<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>From heaven to earth</title>
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
      padding-top: 24px;
     max-width: 1352px;
    border: 1px solid #1112118f;
    border-radius: 2px;
    margin-left: auto;
    margin-right: auto;
    background-color: #f8f9fa;
    border-radius: 18px;
    }
  
  
    
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
<?php include('nav-bar.php'); ?>



 <div class="question my-4" style="padding-left: 5px;padding-right: 5px">
     <pre>
                    <strong> 
                   <h3>
                    <strong>4).From heaven to earth</strong>
                   </h3>      
            Chef has been working in a restaurant which has N floors. 
            He wants to minimize the time it takes him to go from the N-th floor to ground floor. 
            He can either take the elevator or the stairs.
            The stairs are at an angle of 45 degrees and Chef's velocity is V1 m/s when taking the stairs down. 
            The elevator on the other hand moves with a velocity V2 m/s. Whenever an elevator is called, 
            it always starts from ground floor and goes to N-th floor where it collects Chef (collecting takes no time), 
            it then makes its way down to the ground floor with Chef in it.
            The elevator cross a total distance equal to N meters when going from N-th floor to ground floor or vice versa, 
            while the length of the stairs is sqrt(2) * N because the stairs is at angle 45 degrees.
            Chef has enlisted your help to decide whether he should use stairs or the elevator to minimize his travel time. 
            Can you help him out?

            Input:
            The number of test cases. Each test case is described by a single line containing three space-separated integers N, V1, V2.

            Output: 
            For each test case, output a single line with string Elevator or Stairs, denoting the answer to the problem.

            Constraints:
            1 ≤ T ≤ 1000 
            1 ≤ N, V1, V2 ≤ 100
             </pre>
                </strong>
               
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
      <td><pre><strong>5  10  15</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><pre><strong>2  10  14</strong></pre></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><pre><strong>7  14  10</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><pre><strong>8  15  10</strong></pre></td>
     
    </tr>
    
      
  </tbody>
</table>


<form class=" container my-4 text-center">
<h5 class="my-4">Here you have to Enter your output Respectively:- </h5>
  
<div class="form-group   "> 
    <label for="Qno">Enter Question Number</label>
    <input type="number" min="1" max="10" class="form-control" name="Qno" id="Difficult" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group  ">
    <label for="output1">Enter Output of 1st testcase:</label>
    <input type="text" class="form-control" name="Option1" id="Difficult" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group"> 
    <label for="output2">Enter Output of 2nd testcase:</label>
    <input type="text" class="form-control" name="Option2" id="Difficult" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group col-xs-3">
    <label for="output3">Enter Output of 3rd testcase:</label>
    <input type="text" class="form-control" name="Option3" id="Difficult" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group col-xs-3">
    <label for="output4">Enter Output of 4th testcase:</label>
    <input type="text" class="form-control" name="Option4" id="Difficult" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


    
<center>
  <div class="container">
  <h2>iCoder Question Bank</h2>                  
  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="Difficult3.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="Difficult1.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Difficult2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Difficult3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Difficult4.php"><b>4</b></a></li>
    <li class="page-item"><a class="page-link" href="Difficult5.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Difficult6.php">6</a></li>
    <li class="page-item"><a class="page-link" href="Difficult7.php">7</a></li>
    <li class="page-item"><a class="page-link" href="Difficult8.php">8</a></li>
    <li class="page-item"><a class="page-link" href="Difficult9.php">9</a></li>
    <li class="page-item"><a class="page-link" href="Difficult10.php">10</a></li>
    <li class="page-item"><a class="page-link" href="Difficult5.php">Next</a></li>
  </ul>
</nav>
</div>
</center>






<!-- footer start from here -->
<?php include('footer.php'); ?>
  </body>
</html>

