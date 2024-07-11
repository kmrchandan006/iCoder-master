<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Temple Land</title>
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
                    <strong>10).Temple Land</strong>
                   </h3>      
            The snakes want to build a temple for Lord Cobra. There are multiple strips of land that they are looking at, 
            but not all of them are suitable. They need the strip of land to resemble a coiled Cobra. You need to find out which strips do so.
            Formally, every strip of land, has a length. Suppose the length of the i-th strip is is Ni, 
            then there will be Ni integers, Hi1, Hi2, .. HiNi, which represent the heights of the ground at various parts of the strip, in sequential order. 
            That is, the strip has been divided into Ni parts and the height of each part is given. 
            This strip is valid, if and only if all these conditions are satisfied:

            There should be an unique 'centre' part. This is where the actual temple will be built. By centre, 
            we mean that there should be an equal number of parts to the left of this part, and to the right of this part.
            Hi1 = 1
            The heights keep increasing by exactly 1, as you move from the leftmost part, to the centre part.
            The heights should keep decreasing by exactly 1, as you move from the centre part to the rightmost part. 
            Note that this means that HiNi should also be 1.
            Your job is to look at every strip and find if it's valid or not.

            Input:
            The first line contains a single integer, S, which is the number of strips you need to look at. The description of each of the S strips follows.
            The first line of the i-th strip's description will contain a single integer: Ni, which is the length and number of parts into which it has been divided.
            The next line contains Ni integers: Hi1, Hi2, .., HiNi. These represent the heights of the various parts in the i-th strip.

            Output: 
            For each strip, in a new line, output "yes" if is a valid strip, and "no", if it isn't.

            Constraints:
            1 ≤ S ≤ 100
            1 ≤ Ni ≤ 100
            1 ≤ Hij ≤ 100
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
1  2  3  2  1</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><pre><strong>7
2  3  4  5  4  3  2</strong></pre></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><pre><strong>5
1  2  3  4  3</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><pre><strong>5
1  3  5  3  1</strong></pre></td>
     
    </tr>
    
      
  </tbody>
</table>


<form class=" container my-4 text-center">
<h5 class="my-4">Here you have to Enter your output Respectively:- </h5>
  
<div class="form-group   "> 
    <label for="Qno">Enter Question Number</label>
    <input type="number" min="1" max="10" class="form-control" name="Qno" id;="Difficult" aria-describedby="emailHelp">
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
    <li class="page-item"><a class="page-link" href="Difficult9.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="Difficult1.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Difficult2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Difficult3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Difficult4.php">4</a></li>
    <li class="page-item"><a class="page-link" href="Difficult5.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Difficult6.php">6</a></li>
    <li class="page-item"><a class="page-link" href="Difficult7.php">7</a></li>
    <li class="page-item"><a class="page-link" href="Difficult8.php">8</a></li>
    <li class="page-item"><a class="page-link" href="Difficult9.php">9</a></li>
    <li class="page-item"><a class="page-link" href="Difficult10.php"><b>10</b></a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
</center>






<!-- footer start from here -->
<?php include('footer.php'); ?>
  </body>
</html>
