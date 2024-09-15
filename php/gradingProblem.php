<?php


function rounding($number) {
  if ($number < 38) {
    return $number;
  }
  $next = (intdiv($number, 5) + 1) * 5;
  return ($next - $number < 3) ? $next : $number;
  
}

function gradingStudents(array $grades) {
  $ret = [];
  for ($i = 0; $i < count($grades); $i++) {
    $result = rounding($grades[$i]);
  }
  return $ret;
}