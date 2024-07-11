<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tanu and Head-bob</title>
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
                    <strong>8).Tanu and Head-bob</strong>
                   </h3>
            Tanu has got interested in signs and gestures that we use for communication. One such gesture is the head-bob.
            When we want to signal "Yes" to someone, we move the head up-and-down. For "No", the head is moved left-and-right,
            rotating about the vertical axis.
            There is a peculiar way of gesturing "Yes", commonly seen in India, by moving head sideways
            (rotating about the forward-back axis). This is called the Indian head-bob.
            Tanu observed many people on the railways station, and made a list of gestures that they made. 
            Usual "Yes" gesture is recorded as "Y", no as "N" and Indian "Yes" gesture as "I". (Assume no foreigner uses 
            the Indian "Yes" gesture and vice-versa). 
            Identify which of them were Indians, which were not Indian, and which one you cannot be sure about.

            Input:
            First line of the input contains the number of testcases T.For each test case,
            Each person is described in two lines. First line of the description contains a single integer N, 
            the number of gestures recorded for this person. Next line contains a string of N characters, 
            each character can be "Y", "N" or "I".

            Output:
            For each person, print "INDIAN" if he/she is from India, "NOT INDIAN" if not from India, 
            and "NOT SURE" if the information is insufficient to make a decision.

            Constraints:
            For 30 points: 1 ≤ T,N ≤ 100
            For 70 points: 1 ≤ T,N ≤ 1000
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
NNNYY</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><pre><strong>6
NNINNI</strong></pre></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><pre><strong>4
NNNN</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><pre><strong>5
NNYYI</strong></pre></td>
     
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
    <li class="page-item"><a class="page-link" href="Difficult7.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="Difficult1.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Difficult2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Difficult3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Difficult4.php">4</a></li>
    <li class="page-item"><a class="page-link" href="Difficult5.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Difficult6.php">6</a></li>
    <li class="page-item"><a class="page-link" href="Difficult7.php">7</a></li>
    <li class="page-item"><a class="page-link" href="Difficult8.php"><b>8</b></a></li>
    <li class="page-item"><a class="page-link" href="Difficult9.php">9</a></li>
    <li class="page-item"><a class="page-link" href="Difficult10.php">10</a></li>
    <li class="page-item"><a class="page-link" href="Difficult9.php">Next</a></li>
  </ul>
</nav>
</div>
</center>





<!-- footer start from here -->
<?php include('footer.php'); ?>
  </body>
</html>

