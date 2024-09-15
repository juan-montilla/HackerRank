<?php


function ff($candles) {
  $ret = [];
  for ($i = 0; $i < count($candles); $i++) {
    $ele = $candles[$i];
    if (!isset($ret[$ele])) {
      $ret[$ele] = 1;
    } else {
      $ret[$ele] += 1;
    }
  }
  rsort($ret);
  return $ret[0];
}
/*$a = [4,4,3,2];
var_dump(ff($a));*/
