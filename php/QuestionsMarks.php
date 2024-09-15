<?php
/** https://www.coderbyte.com/editor/Questions%20Marks
php 8 **/
function str_contains($haystack, $needle) {
  return strpos($haystack, $needle) !== false;
}

/*function questionsMarks($str) {
  $matches = [];
  $results = 1;
  preg_match_all('/(\d+)/', $str, $matches, PREG_OFFSET_CAPTURE);
  $matches = $matches[0];
  if (count($matches) % 2 !== 0) return false;
  for ($i=0;$i<count($matches);$i+=2) {
    $pos1 = $matches[$i][1]; $pos2 = $matches[$i+1][1];
    if (((intval($matches[$i][0]) + intval($matches[$i+1][0])) != 10) || (
          !str_contains(substr($str, $pos1, $pos2-$pos1), '???')))
      return false;
  }
  return true;
}*/
function questionsMarks($str) {
  $matches = [];
  $results = 1;
  preg_match_all('/(\d+)/', $str, $matches, PREG_OFFSET_CAPTURE);
  if (empty($matches[0])) return 'false';
  $array = array_map(function($i) { return $i[1];}, $matches[0]);
  $match = preg_match('/\S+\?+\S+\?\S+\?\S+/', $str) === 1;
  if (!$match) return false;
  $result = 1;
  for ($i=0;$i<count($array)-1;$i++) {
    $pos1 = $array[$i]; $pos2 = $array[$i+1];
    if (((intval($str[$array[$i]]) + intval($str[$array[$i+1]])) !== 10)) {
      $result *= -1;
    }
  return ($result === 1)? true:false;
  }
}
