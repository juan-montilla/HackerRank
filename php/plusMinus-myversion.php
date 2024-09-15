<?php

function plusMinus($arr) {
    $size = count($arr);
    $count = [0,0,0];
    for ($i = 0; $i < $size;$i++) {
      if ($arr[$i] !== 0) {
        $arr[$i] = $arr[$i] / abs($arr[$i]);
        if ($arr[$i] < 0) {
          $count[1]++;
        } else {
          $count[0]++;
        }
      } else {
        $count[2]++;
      }
    }
    $result = array_map(function($element) use($size) {
      return $element / $size;
    }, $count);
    $result = array_values($result);
    //rsort($result);
    for ($i = 0; $i<count($result);$i++) {
      printf("%.6f\n", $result[$i]);
    }
}

  /*plusMinus([1,1,0,-1,-1]);
  plusMinus([-4,3,-9,0,4,1]);
  plusMinus([0, 0, -1, 1, 1]);
  plusMinus([1,-2,-7,9,1,-8,-5]);*/

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);


?>