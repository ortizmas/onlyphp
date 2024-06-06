<?php
/**
    * There is a large pile of socks that must be paired by color. Given an array of integers representing the color of each sock, 
    * determine how many pairs of socks with matching colors there are.

    *Example
    *There is one pair of color  and one of color . There are three odd socks left, one of each color. The number of pairs is .
    
    *Function Description
    *Complete the sockMerchant function in the editor below.
    *sockMerchant has the following parameter(s):

    *int n: the number of socks in the pile
    *int ar[n]: the colors of each sock
    *Returns

    *int: the number of pairs
    *Input Format

    *The first line contains an integer , the number of socks represented in .
    *The second line contains  space-separated integers, , the colors of the socks in the pile.

    *Constraints

    *where 
    *Sample Input

    *STDIN         Function
    *   -----                       --------
    *   9                           n = 9
    *  10 20 20 10 10 30 50 10 20  ar = [10, 20, 20, 10, 10, 30, 50, 10, 20]
*/

// Eber Ortiz
/*function sockMerchant($n, $arr) {
    $pairs = 0;
    $exist = [];
    for ($i=0; $i < $n; $i++) { 
        if (in_array($arr[$i], $exist)) {
            $pairs += 1;
            $key = array_search($arr[$i], $exist);
            if ($key !== false) {
                unset($exist[$key]);
            }
        } else {
            array_push($exist, $arr[$i]);
        }
    }

    echo $pairs;
}*/

// John can match three pairs of socks.
/*function sockMerchant($n, $arr) {
    $pairs = 0;
    $unique_color_arr = array_unique($arr);
    $counts = array_count_values($arr);
    
    foreach($unique_color_arr as $color )
    {
        $count_color = $counts[$color];
        if($count_color > 1)
            $pairs += floor($count_color / 2);
    }
    
    return $pairs;
} */

// Complete the sockMerchant function below.
function sockMerchant($n, $arr) {
    return array_sum(array_map(function ($n) {
        return intval($n / 2);
    }, array_count_values($arr)));
}

$n = 9;
// $arr = [10, 20, 20, 10, 10, 30, 50, 10, 20];
$arr = [1, 1, 3, 1, 2, 1, 3, 3, 3, 3];

echo sockMerchant($n, $arr);