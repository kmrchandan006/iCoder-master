<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Chef Judges a Competition</title>
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
                    <strong>5).Chef Judges a Competition</strong>
                   </h3>  
            Chef is the judge of a competition. There are two players participating in this competition — Alice and Bob.
            The competition consists of N races. For each i (1 ≤ i ≤ N), Alice finished the i-th race in Ai minutes, 
            while Bob finished it in Bi minutes. The player with the smallest sum of finish times wins. 
            If this total time is the same for Alice and for Bob, a draw is declared.
            The rules of the competition allow each player to choose a race which will not be counted towards their total time. 
            That is, Alice may choose an index x and her finish time in the race with this index will be considered zero; similarly, 
            Bob may choose an index y and his finish time in the race with this index will be considered zero. 
            Note that x can be different from y; the index chosen by Alice does not affect Bob's total time or vice versa.
            Chef, as the judge, needs to announce the result of the competition. 
            He knows that both Alice and Bob play optimally and will always choose the best option. Please help Chef determine the result!

            Input: 
            The first line of each test case contains a single integer N. 
            The second line contains N space-separated integers A1, A2, ..., AN.
            The third line contains N space-separated integers B1, B2, ..., BN

            Output:
            For each test case, print a single line containing the string "Alice" if Alice wins, 
            "Bob" if Bob wins or "Draw" if the result is a draw (without quotes).

            Constraints: 
            1 ≤ T ≤ 100
            2 ≤ N ≤ 100
            1 ≤ Ai ≤ 1000 for each valid i
            1 ≤ Bi ≤ 1000 for each valid i
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
      <td><pre><strong>5
3  1  3  3  4
1  6  2  5  3</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><pre><strong>5
1  6  2  5  3
3  1  3  3  4</strong></pre></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><pre><strong>3
4  1  3
2  2  7</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><pre><strong>4
4  5  2  3
5  2  6  1</strong></pre></td>
     
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
    <li class="page-item"><a class="page-link" href="Difficult4.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="Difficult1.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Difficult2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Difficult3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Difficult4.php">4</a></li>
    <li class="page-item"><a class="page-link" href="Difficult5.php"><b>5</b></a></li>
    <li class="page-item"><a class="page-link" href="Difficult6.php">6</a></li>
    <li class="page-item"><a class="page-link" href="Difficult7.php">7</a></li>
    <li class="page-item"><a class="page-link" href="Difficult8.php">8</a></li>
    <li class="page-item"><a class="page-link" href="Difficult9.php">9</a></li>
    <li class="page-item"><a class="page-link" href="Difficult10.php">10</a></li>
    <li class="page-item"><a class="page-link" href="Difficult6.php">Next</a></li>
  </ul>
</nav>
</div>
</center>






<!-- footer start from here -->
<?php include('footer.php'); ?>
  </body>
</html>
