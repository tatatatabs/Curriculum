<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * Copy exercise 4 into this file and modify our filter to use a
         * closure instead of a globally defined function.
         * @see http://php.net/manual/en/functions.anonymous.php
         */
        
        $names = [
            'JASON hunter',
            ' eRic Schwartz',
            'mark zuckerburg '
        ];

        // Add a couple extra names to the $names array
        array_push($names, 'Bob ArK '); 
        array_push($names, ' Derek WaLL');

        // Without writing a loop, use an array function to filter our list
        // of names down to only those who pass the score test.
        $passedNames = array_filter($names, function(&$name) { 
            $name = ucwords(strtolower(trim($name)));
            // Multiply the position of the letter 'a' (case insensitive) in the name by the
            // length of the last name divided by the number of words in the string
            $posA = stripos($name, 'a'); 
            $parts = explode(' ', $name); 
            $last = array_pop($parts);
            $lenLast = strlen($last);
            $numWords = str_word_count($name);
            $score = $posA * $lenLast / $numWords; 
            
            return $score > 5; 
        } );


        // Without writing a loop, print out the winners separated by a comma and a space
        print implode(', ', $passedNames); 


        ?>

    </p>

    </body>
</html>