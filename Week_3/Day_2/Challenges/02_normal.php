<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Write a PHP script to calculate and display average temperature, 
             five lowest and highest temperatures.
            
            Expected Output :
            Average Temperature is : 70.6 
            List of five lowest temperatures : 60, 62, 63, 63, 64, 
            List of five highest temperatures : 76, 78, 79, 81, 85,
            */

            $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
             
            // 1. Find the average of the array.
                $sum = array_sum($temperatures); 
                $count = count($temperatures);
                $arrayAverage = $sum / $count;
                echo $arrayAverage; 
                
                sort($temperatures);
                echo '<pre>';
                print_r($temperatures);
                echo '</pre>';
                
            
            // 2. Find the five lowest temps. 
                echo '<pre>';
                $output = array_slice($temperatures, 0,5); 
                print_r($output); 
                echo '</pre>';
                
            
            // 3. Find the five highest temps.
                echo '<pre>';
                $output = array_slice($temperatures, -5);
                print_r($output);
                echo '</pre>';
                
        ?>

    </p>

    </body>
</html>