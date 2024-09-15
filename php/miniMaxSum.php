<?php

function miniMaxSum($arr) {
    sort($arr, SORT_NUMERIC);
    echo array_sum(array_slice($arr,0,4)). " " . array_sum(array_slice($arr,1,4))."\n";

}

miniMaxSum([1,2,3,4,5]);
?>