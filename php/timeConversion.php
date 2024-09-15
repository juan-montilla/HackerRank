<?php


function timeConversion($s) {
    $isPm = (substr($s, -2) == 'PM')? true:false;
    $time = substr($s, 0, strlen($s)-2);
    $arrTime = explode(':', $time);
    if ($isPm && $arrTime[0] < 12) {
        $arrTime[0] += 12;
    }
    if ($arrTime[0] > 23 || ($arrTime[0] == 12 && (!$isPm))) {
        $arrTime[0] = 0;
    }
    $ret = array_map(function($ele) {
        return str_pad((string) $ele, 2, '0');
    }, $arrTime);
    return implode(':', $ret);
}
//echo timeConversion('12:45:54PM');

