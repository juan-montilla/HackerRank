<?php

//https://www.geeksforgeeks.org/dynamic-programming/
// compressing array

function getMinLength($a, $k) {
    array_shift($a);
    for ($i=0;$i<count($a);$i++) {
        echo "Pass # $i\n";
        for ($j=0;$j<count($a)-1;$j++) {
          Echo "\tj = $j, size = ".count($a)."\n";
          $next = $j+1;
          if (($a[$j]*$a[$next]) <= $k) {
            $a[$j] = $a[$j]*$a[$next];
            unset($a[$next]);
            $a = array_values($a);
          }
        }
    }
    return count($a);
}

echo getMinLength([8,7,1,2,3,8,6,5,4], 80);

