<!--
    Using everything you have learned and some googling

    Randomly pick a number between 1 and 7 and display it.
    Once that number is 7, stop :)

 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        <p>
            <?php

          	    // code goes here ...
          	    $numcount = 0; 
          	    do {
          	      $luckynumber = rand(1, 7); 
          	      if ($luckynumber = 7) { 
          	        echo "YOU GOT A SEVEN HOORAy!!!11!! 1 "; 
          	      } 
          	      else { 
          	        // do nothing 
          	      } 
          	    } 
          	     while ($luckynumber); 
          	    
          	 
          	    
            ?>
        </p>
	</body>
</html>