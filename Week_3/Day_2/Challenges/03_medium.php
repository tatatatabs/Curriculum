<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Tax Calculator
             * Create a function that calculates the cost with tax of an item
             * The function must accept 2 parameters. $cost and $tax
             * The function must return the $meal_cost with tax
             * Print the results to the screen in the format:
             * Vince went to FL to buy some Mellow Mushroom, it costed him $106.50
             */

            $state_tax = array('NC' => 0.07, 'NY' => .094, 'FL' => 0.065);
            $people = array(
                'Eric' => array('state' => 'NC', 'meal' => 74.10, 'food' => 'Bad Daddys'),
                'Vince' => array('state' => 'FL', 'meal' => 100, 'food' => 'Mellow Mushroom'),
                'James' => array('state' => 'NY', 'meal' => 4500, 'food' => 'Mc Donalds')
            );

            function calculateTax($meal_cost,$tax) {
                $mealTax = $meal_cost * $tax; 
                $totalCost = $mealTax + $tax; 
                

                return $totalCost;
            
            }
            foreach($people as $person => $mealInfo) { 
                
                echo $person . ' went to ' . $mealInfo['state'] . ' to buy ' . $mealInfo['food'] . ',' . ' it costed him ' . calculateTax($mealInfo['meal'], $state_tax[$mealInfo['state']]) . '<br/>';
                
                
            } 



        ?>

    </p>

    </body>
</html>
