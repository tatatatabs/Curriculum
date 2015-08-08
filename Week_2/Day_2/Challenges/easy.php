<?php
    /**
     * Write a function called "add" that adds all the numbers in an array and
     * returns the result.
     */
    
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <?php
        function add($sum) { 
            $sum = array_sum(array);
            // I don't understand why this doesn't work. 
            // Do I need to name the array? 
            // It says returns the result, does that mean just print it or use the return thing 
            // so nothing actually prints? If so, why does it say echo?
            // ?????????????????
        } 
            echo add(array(1,2,3,4,5));
        ?>
    </p>
    <p>
        <?php
            echo add([6,7,8,9,10]);
        ?>
    </p>
  </body>
</html>