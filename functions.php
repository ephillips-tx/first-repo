<?php

/*
  FUNCTIONS.PHP FILE
*/

function getpayfrequency($arr){
  $arr = $array; 
  
  $final_pay = $arr[0][0];
  $final_freq = $arr[0][1];
  $counter = 0;
  
  while ( $counter < $arr.length ){
    if( $final_pay < $arr[$counter][0] ){
      $final_pay = $arr[$counter][0];
      $row = counter;
    }
    $counter++;
  }
  
  $final_freq = $arr[$row][1];
  return [$final_pay, $final_freq];
}
