<?php

function printLine($n) {
  $str = '';
  for ($i=1; $i<=$n; $i++) {
    $first = str_pad('',$i,'#');
    $second = str_pad('',$n-$i,' ');
    $str .= $second.$first."\n";
  }
  return $str;
}

echo printLine(4);
