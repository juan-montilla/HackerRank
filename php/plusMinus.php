<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $ret = [0,0,0];
    $size = count($arr);

    for ($i=0;$i<$size;$i++) {
        if ($arr[$i]>0) {
            $ret[0] += 1;
        } else if ($arr[$i]<0) {
            $ret[1] += 1;
        } else {
            $ret[2] += 1;
        }
    }
    array_walk($ret, function($ele, $index, $size) {
        printf("%4.F",($ele/$size));
        echo "\n";
    }, $size);
}

$arr = [1,1,0,-1,-1];

plusMinus($arr);
