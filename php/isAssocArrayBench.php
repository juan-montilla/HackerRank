<?php
if(!isset($argv[1])){
    echo "Usage: ".$argv[0]." (number of iterations)\n";
    exit(1);
}

/**
 * Arrays to check
 */
$tests = array(
    array(array(
        'foo' => 'bar',
    )),
    array(array(
        'bar',
        'foo' => 'bar',
        'baz',
    )),
    array(null),
    array(true),
    array(false),
    array(0),
    array(1),
    array(0.0),
    array(1.0),
    array('string'),
    array(array(0, 1, 2)),
    array(new stdClass),
    array_fill(0,1000,uniqid()),                // big numeric array

    array_fill_keys(range(2,1000,3),uniqid()),  // big misaligned numeric array (=associative)

    array_fill_keys(                            // big associative array
        str_split(
            str_repeat(uniqid('',true),100),
            3
        ),
        true
    )
);

$iterations = (int)$argv[1];

/**
 * Common methods to check associative array
 */
$methods = array(
    'method1 (array_values check)' =>
        function($array){
            return (array_values($array) !== $array);
        },

    'method2 (array_keys comparison)' =>
        function($array){
            $array = array_keys($array); return ($array !== array_keys($array));
        },

    'method3 (array_filter of keys)' =>
        function($array){
            return count(array_filter(array_keys($array), 'is_string')) > 0;
        }
);

/**
 * Perform benchmark on each method
 */
foreach($methods as $name=>$func){
    echo "Testing $name - $iterations iterations\n";
    $time = microtime(true);

    for($x=0;$x<$iterations;$x++){
        foreach($tests as $array){
            $func($array);
        }
    }

    /**
     * Show results
     */
    $totalTime = (microtime(true) - $time);
    $avgTime = $totalTime / ($iterations * count($tests));

    echo "  Total time: ".number_format($totalTime,5,'.',' ')." s\n";
    echo "  Average   : ".number_format($avgTime*1000,5,'.',' ')." ms / test \n";
    echo "\n";
}

