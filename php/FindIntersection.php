<?php 

function FindIntersection($strArr) {

  $first    = explode(',', $strArr[0]);
  $second   = explode(',', $strArr[1]);
  $first    = array_map('intval', $first);
  $second   = array_map('intval', $second);
  $result   = array_intersect($first, $second);
  $ret      = implode(',', $result);
  if (empty($result)) {
    return 'false';
  }
  return $ret;

}
?>