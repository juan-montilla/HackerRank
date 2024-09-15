<?php


function timeConversion($s) {
  $tz = substr($s,8, 2);
  $time = substr($s,0,8);
  $time = explode(':', $s);
  $time = array_map(function($e) {
    return intval($e, 10);
  }, $time);
  if ($tz === 'PM' && $time[0] < 12) {
    $time[0] = $time[0] + 12;
    if ($time[0]>23) {
      $time[0] = 0;
    }
  }
  if ($tz === 'AM' && $time[0] === 12) {
    $time[0] = 0;
  }
  printf("%02d:%02d:%02d", $time[0], $time[1], $time[2]);
}

/*$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");*/

$result = timeConversion('12:45:54PM');

/*fwrite($fptr, $result . "\n");

fclose($fptr);*/