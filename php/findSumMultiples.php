<?php


/*
If we list all the natural numbers below 10 that are multiples 3 of 5 or , 
we get 3,5,6 and 9 . The sum of these multiples is 23

.

Find the sum of all the multiples of 3 or 5 below N .
*/

function findMultiplesToN($base, $n) {
  $res = 0; $i = 0;
  $return = [];
  while ($res < $n) {
    $res = pow($base, $i);
    $return[] = $res;
  }
} 
function findSumMultiples($i, $n) {
  $actual = 0; $exp = 1;
  $ret = [];

  while ($actual < $n) {
    
  }
}