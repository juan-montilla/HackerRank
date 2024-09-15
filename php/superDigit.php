<?php

function superDigit($n, $k) {
  $sum = 0;
 for($i=0; $i < strlen($n); $i++) {
  $sum += intval($n[$i]);
 }
 if ($k > 0) {
  $sum = $sum * $k;  
 }
 $sumAsString = (string) $sum;
 if (strlen($sumAsString) < 2) {
  return $sum;
 }
 return superDigit((string) $sum, 0);
}