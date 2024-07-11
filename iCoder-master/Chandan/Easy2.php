<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Dinosours Footballs</title>
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
                    <strong> 2).Dinosours Footballs</strong>
                   </h3>       
            Chef Ada is the FootBall coach of the Dinosaurs Institute of Technology.
            There are N dinosaurs (enumerated 11 through N) placed in a line. 
            The i-th dinosaur has a height of ii meters.Ada is training The dinosaurs in the following tactic:

            Initially the leftmost dinosaur has the ball.
            The dinosaur that has the ball passes the ball to the nearest dinosaur to the right that is tallest than him.
            The previous step continues until the ball reaches the tallest dinosaur, then he throws the ball and scores a goal!

            Help Ada reordering the dinosaurs in such a way that the ball is passed from dinosaur to dinosaur exactly K times.
            For example, if there are 5 dinosaurs ordered as [2,3,1,5,4], then the ball goes 2->3->5->goal, and the ball was passed two times.
            
            Input:
             Each test case consist of a line with two space separated integers N,K.

            Output:
             For each testcase, output in a single line containing N integers representing one possible ordering in which the dinosaurs can be placed.

            Constraints:
             1 ≤ T ≤  2^8
             2 ≤ N ≤ 20
             0 ≤ K ≤ N-1                         
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
      <td><pre><strong>5  2</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><pre><strong>6  3</strong></pre></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><pre><strong>7  5</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><pre><strong>9  4</strong></pre></td>
     
    </tr>
     
  </tbody>
</table>


<form class=" container my-4 text-center">
<h5 class="my-4">Here you have to Enter your output Respectively:- </h5>
  
<div class="form-group   "> 
    <label for="Qno">Enter Question Number</label>
    <input type="number" min="1" max="10" class="form-control" name="Qno" id="Easy" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group  ">
    <label for="output1">Enter Output of 1st testcase:</label>
    <input type="text" class="form-control" name="Option1" id="Easy" aria-describedby="emailHelp">
  </div>
  
  
  
  <div class="form-group"> 
    <label for="output2">Enter Output of 2nd testcase:</label>
    <input type="text" class="form-control" name="Option2" id="Easy" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group col-xs-3">
    <label for="output3">Enter Output of 3rd testcase:</label>
    <input type="text" class="form-control" name="Option3" id="Easy" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group col-xs-3">
    <label for="output4">Enter Output of 4th testcase:</label>
    <input type="text" class="form-control" name="Option4" id="Easy" aria-describedby="emailHelp">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
<center>
  <div class="container">
  <h2>iCoder Question Bank</h2>                  
  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="Easy1.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="Easy1.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Easy2.php"><b>2</b></a></li>
    <li class="page-item"><a class="page-link" href="Easy3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Easy4.php">4</a></li>
    <li class="page-item"><a class="page-link" href="Easy5.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Easy6.php">6</a></li>
    <li class="page-item"><a class="page-link" href="Easy7.php">7</a></li>
    <li class="page-item"><a class="page-link" href="Easy8.php">8</a></li>
    <li class="page-item"><a class="page-link" href="Easy9.php">9</a></li>
    <li class="page-item"><a class="page-link" href="Easy10.php">10</a></li>
    <li class="page-item"><a class="page-link" href="Easy3.php">Next</a></li>
  </ul>
</nav>
</div>
</center>





<!-- footer start from here -->
<?php include('footer.php'); ?>
  </body>
</html>










