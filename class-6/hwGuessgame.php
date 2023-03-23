<?php

// even odd
    $number = 19;


    if($number % 2 == 0 ){
        echo "yes Its Even";
    }
    else($number % 2 !== 0){
        echo "No Its odd";
    }

// prime 


    function primeNumber($number){
        for($i = 2; $i <= $number/2; $i++){
            if($number % $i == 0){
                return 0;
            }
            else{
                return 1;
            }
           
        }
    }
    $number = 5;
     $result = primeNumber($number);
     if($result == 1){
        echo 'yes, its prime';

     }
     else{
        echo 'No its not prime';
     }

?>

<?php


?>