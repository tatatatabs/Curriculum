<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Write a program that loops through numbers array and outputs
             * each number.
             *
             * But for multiples of three print “Fizz” instead of the number
             * and for the multiples of five print “Buzz”. For numbers which
             * are multiples of both three and five print “FizzBuzz”
             *
             */

             $inputs = array(
               array('numbers' => range(0, 100))
             );

            foreach($inputs as $arrayNum) {
                foreach($arrayNum as $numbersArray) {
                    foreach($numbersArray as $number) { 
                        if($number%3 == 0 && $number%5 == 0)  { 
                            echo "FizzBuzz!<br/>";
                        } 
                        elseif($number%5 == 0) { 
                            echo "Buzz!<br/>";
                        } 
                        elseif($number%3 == 0) { 
                            echo "Fizz!<br/>";
                        } 
                
                    
                    
                    
            
                
                
                    }
                }
            } 
        ?>

    </p>

    </body>
</html>
