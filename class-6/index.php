<?php

// 2 = 1*2
// 3 = 1*2*3
// 4 = 1*2*4
// 2 = 1*2*5

$number = 3;
$result = 1;

// for( $i = 1; $i <= $number ; $i++ ){
 
//     echo $i * $i ." <br>";
// }

// for( $i = 1; $i <= $number ; $i++ ){
 
//     $result = $result *  $i;
// }
// echo $result;



//     $num = 20;


//  for( $i = 1; $i <= $num ; $i++ ){
//     // echo "$num * $i = " .$num * $i ."<br>";
//     for($j = 1; $j <= 10; $j++){
//         echo "$i * $j = " .$i * $j . "<br>";
//     }
    
//     }


// $i = 1 ;
// while($i<=10 ){
//     echo "$i Hellow World <br>";

//     $i++;
// }



// $i = 1;
// do{
//     echo "$i Hellow <br>";


//     $i++;
// }


// while($i <=10);




// $fruits = [

//     'banana',
//     'apple',
//     'lemon',
//     'orange',
//     'pinapple',
//     'dragon fruit',
//     'guava'
// ];



// $GLOBALS['name'] = 'Daniel';

// function printName(){
//     $GLOBALS['age'] = 26;
//     echo $GLOBALS['name'];
// }
// printName();
// echo $GLOBALS['age'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <!-- <ul>
        <li>
            <?php
            echo $fruits[0];
            ?>
        </li>
        <li>
            <?php
            echo $fruits[1];
            ?>
        </li>
        <li>
            <?php
            echo $fruits[2];
            ?>
        </li>
        <li>
            <?php
            echo $fruits[3];
            ?>
        </li>
        <li>
            <?php
            echo $fruits[4];
            ?>
        </li>

    </ul> -->

    <!-- <ul>
        <?php
        foreach($fruits as $index=>$fruit){
            echo "<li>".++$index ."$fruit</li>";
        }
        ?> 
    </ul> -->


    <!-- <form action="./fromsubmit.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->

    <!-- <form  action="./fromsubmit.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Number</label>
    <input name="number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->

    <form  action="./bill.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Times Table</label>
    <input name="timestable" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</body>
</html>

