<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

            /*
             * Given the following sentence. Make every other letter uppercase
             */

            $sentence = "this exercise reminds me of my brother's facebook posts";

            // code goes here
            $str = "this exercise reminds me of my brother's facebook posts";

            $str_implode = str_split($str);

            $caps = true;
            foreach($str_implode as $key=>$letter){
                if($caps){
                $out = strtoupper($letter);
                if($out <> " ") //not a space character
                $caps = false;
             }
                else{
                $out = strtolower($letter);
                $caps = true;
             }
                $str_implode[$key] = $out;
            }

                $str = implode('',$str_implode);

                echo $str;


        ?>

    </p>

    </body>
</html>