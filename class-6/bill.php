<?php

$input =$_GET['product'];
$product = 25;
$price = 100;
$discount = 10;

$totalProductPrice = $product * $price;
// return $totalProductPrice;


if($totalProductPrice >= 1000 ){
   $discounts = $totalProductPrice / 10;
   $totalCost = $totalProductPrice - $discounts;
   echo $totalCost;
//    return $totalCost;

}
else{
    echo $totalProductPrice;
}


