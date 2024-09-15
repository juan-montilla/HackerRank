<?php



function diagonalDifference($arr) {
  $size = count($arr);
  $firstDiag = 0;
  $seconDiag = 0;
  for ($i=0;$i<$size;$i++) {
    $firstDiag += $arr[$i][$i];
    $seconDiag += $arr[$i][$size-$i-1];
  }
  return abs($firstDiag-$seconDiag);
}



echo diagonalDifference([[1,2,3],[4,5,6],[9,8,9]]);
