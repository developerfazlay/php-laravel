<?php

// Question No - 01
echo "<h3>Question No - 01</h3>";

$check_prime_numbers = [12,34,2,6,78];
foreach($check_prime_numbers as $single_prime_number){
   
   $prime_status = true;

   for($i=2; $i < $single_prime_number; $i++){ 
     
      if($single_prime_number % $i == 0){ 
         // echo $i.", ";
         $prime_status = false;
         }
         
      }

    if($prime_status == true){
      echo $single_prime_number ." IS A PRIME NUMBER";
      echo "<br>";
    }
    else{
      echo "<del>" .$single_prime_number ." is not a prime number"."</del>";
      echo "<br>";
    }
    
   

}    







// Question No - 02
echo "<h3>Question No - 02</h3>";

// This is a multidimensional associative array

$samsung_smartphones = [

   'list_01' => [
      'model' => 'Samsung Galaxy M02',
      'ram'   => '2GB',
      'rom'   => '32GB',
      'price' => '8599'
   ],

   'list_02' => [
      'model' => 'Samsung Galaxy A03',
      'ram'   => '3GB',
      'rom'   => '32GB',
      'price' => '11999'
   ],

   'list_03' => [
      'model' => 'Samsung Galaxy A03 - 4/64',
      'ram'   => '4GB',
      'rom'   => '64GB',
      'price' => '13999'
   ],
   
   'list_04' => [
      'model' => 'Samsung Galaxy A32',
      'ram'   => '8GB',
      'rom'   => '128GB',
      'price' => '27999'
   ],
   
   'list_05' => [
      'model' => 'Samsung Galaxy A53 5G',
      'ram'   => '8GB',
      'rom'   => '128GB',
      'price' => '43999'
   ],




];

echo "<pre>";
print_r($samsung_smartphones);










// Question No - 03
echo "<h3>Question No - 03</h3>";

$all_numbers = array(0,10,80,67,60,89,91,56,45,30,95,83,99);

$max_number = 0;

foreach($all_numbers as $single_number){
   if($single_number > $max_number){
       $max_number = $single_number;
     
   }
   
}
echo "The maximum number is : ".$max_number;








// Question No - 04
echo "<h3>Question No - 04</h3>";

 $numbers = array(0,10,80,67,60,89,91,56,45,30,95,83,99);

    foreach($numbers as $key => $number){
       if($key % 2 == 0){
        echo $key . " => ". $number;
        echo "<br>";
       }  
      
  }


?>