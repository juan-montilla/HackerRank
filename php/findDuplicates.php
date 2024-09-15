<?php


/*
  * 2. Create a function called findDuplicates() that takes

  * the array of integers as input and returns the duplicates

  * of that array as output. For example, findDuplicates([3, 3, 2, 1, 1, 3])

  * would return [1,3].

  * Create an object oriented solution.

  */

class Problem {
  public function findDuplicates(array $arr): array {
    $count = array_count_values($arr);
    $result = [];

    foreach ($count as $key => $index) {
      if ($index > 1) {
        $result[] = $key;
      }
    }

    sort($result);
    return $result;
  }
}