<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
            <?php
                $monthArray = array(
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
                );

                // display correct Month Number and Month Name given the above array
                // i.e. 1 - January
                
                foreach($monthArray as $key => $value) { 
                    $monthnumber = $key + 1; 
                    echo "$monthnumber - $value"; 
                } 

            ?>
        </p>
	</body>
</html>