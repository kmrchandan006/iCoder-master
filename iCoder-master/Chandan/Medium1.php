<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Chef and Card Game</title>
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
                    <strong>1).Chef and Card Game</strong>
                   </h3>
                Chef is playing a card game with his friend Morty Smith. The rules of the game are as follows:
                    
                1.There are two piles of cards, pile A and pile BB, each with N cards in it. Pile A belongs to Chef and pile B belongs to Morty.   
                2.Each card has one positive integer on it
                3.The ‘power’ of a card is defined as the sum of digits of the integer on that card.
                4.The game consists of N rounds.    
                5.In each round, both players simultaneously draw one card each from the top of their piles, 
                6.the player who draws the card with higher power wins this round and gets a point. 
                If the powers of both players' cards are equal then they get 1 point each.
                7.The winner of the game is the player who has more points at the end of N rounds. 
                If both players have equal number of points then the game ends in a draw.

                The game is now over and Chef has told Morty to find the winner.this task is too complex for him. Help Morty find the winner.
            
                Input:
                 The first line of each test case will contain N, the number of rounds played.
                 The ith of the next N lines of each test case will contain Ai and Bi, 
                 The number on the card drawn by Chef and Morty respectively in round i.


                Output:
                 For each test case, output two space separated integers on a new line:

                  0 if Chef wins,
                  1 if Morty wins,
                  2 if it is a draw,
                  followed by the number of points the winner had.(If it is a draw then output either player’s points).

                Constraints: 
                 1≤T≤1000
                 1≤N≤100
                 1≤Ai,Bi≤10^9

                Explanation:
                 2
                 5 10
                 3 4
                
                Round 1:
                Chef’s card has power 55,
                Morty’s card has power 1+0=11.
                Therefore, Chef wins the round.

                Round 2:
                Chef’s card has power 3,
                Morty’s card has power 4.
                Therefore, Morty wins the round.

                Therefore, the game ends in a draw and both players have 1 point each.   
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
      <td><pre><strong>3
10  4
8  12
7   6
</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><pre><strong>2
14 9
25 32</strong></pre></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><pre><strong>3
12 10
6 13
8 35</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><pre><strong>2
7 5
6 23</strong></pre></td>
     
    </tr>
    
      
  </tbody>
</table>


<form class=" container my-4 text-center">
<h5 class="my-4">Here you have to Enter your output Respectively:- </h5>
  
<div class="form-group   "> 
    <label for="Qno">Enter Question Number</label>
    <input type="number" min="1" max="10" class="form-control" name="Qno" id="Medium" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group  ">
    <label for="output1">Enter Output of 1st testcase:</label>
    <input type="text" class="form-control" name="Option1" id="Medium" aria-describedby="emailHelp">
  </div>
  
  
  
  <div class="form-group"> 
    <label for="output2">Enter Output of 2nd testcase:</label>
    <input type="text" class="form-control" name="Option2" id="Medium" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group col-xs-3">
    <label for="output3">Enter Output of 3rd testcase:</label>
    <input type="text" class="form-control" name="Option3" id="Medium" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group col-xs-3">
    <label for="output4">Enter Output of 4th testcase:</label>
    <input type="text" class="form-control" name="Option4" id="Medium" aria-describedby="emailHelp">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
<center>
  <div class="container">
  <h2>iCoder Question Bank</h2>                  
  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="Medium1.php"><b>1</b></a></li>
    <li class="page-item"><a class="page-link" href="Medium2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Medium3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Medium4.php">4</a></li>
    <li class="page-item"><a class="page-link" href="Medium5.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Medium6.php">6</a></li>
    <li class="page-item"><a class="page-link" href="Medium7.php">7</a></li>
    <li class="page-item"><a class="page-link" href="Medium8.php">8</a></li>
    <li class="page-item"><a class="page-link" href="Medium9.php">9</a></li>
    <li class="page-item"><a class="page-link" href="Medium10.php">10</a></li>
    <li class="page-item"><a class="page-link" href="Medium2.php">Next</a></li>
  </ul>
</nav>
</div>
</center>





<!-- footer start from here -->
<?php include('footer.php'); ?>
  </body>
</html>

