<?php
/**
 * 1122. Relative Sort Array
 * 
 * Given two arrays arr1 and arr2, the elements of arr2 are distinct, and all elements in arr2 are also in arr1.
 * Sort the elements of arr1 such that the relative ordering of items in arr1 are the same as in arr2. 
 * Elements that do not appear in arr2 should be placed at the end of arr1 in ascending order.
 * 
 * Example 1:

 * Input: arr1 = [2,3,1,3,2,4,6,7,9,2,19], arr2 = [2,1,4,3,9,6]
 * Output: [2,2,2,1,4,3,3,9,6,7,19]
 * 
 * Example 2:
 * Input: arr1 = [28,6,22,8,44,17], arr2 = [22,28,8,6]
 * Output: [22,28,8,6,17,44]
 * 
 * Constraints:
 * 1 <= arr1.length, arr2.length <= 1000
 * 0 <= arr1[i], arr2[i] <= 1000
 * All the elements of arr2 are distinct.
 * Each arr2[i] is in arr1.
 */

 $arr1 = [2,3,1,3,2,4,6,7,9,2,19];
 $arr2 = [2,1,4,3,9,6];
 // Output: [2,2,2,1,4,3,3,9,6,7,19]

 $arr1 = [28,6,22,8,44,17];
 $arr2 = [22,28,8,6];
//  Output: [22,28,8,6,17,44]

/*$arrSort = [];
$arrFinal = [];
foreach ($arr2 as $key => $value) {
    $temp = array_search($value, $arr1);
    foreach ($arr1 as $key => $value2) {
        if ($value2 == $arr1[$temp]) {
            $arrSort[] = $value2;
        }
    }
}

foreach ($arr1 as $key => $value) {
    if (!in_array($value, $arrSort)) {
        $arrFinal[] = $value;
    }
}

sort($arrFinal);
foreach ($arrFinal as $key => $value) {
    array_push($arrSort, $value);
}*/

// var_dump($arrSort);

// Other method whit for
function relative_sort_array($arr1, $arr2) {
    $result = [];
    for ($i=0; $i < count($arr2); $i++) { 
        for ($j=0; $j < count($arr1); $j++) { 
            if ($arr1[$j] === $arr2[$i]) {
                array_push($result, $arr1[$j]);
                $arr1[$j] = -1;
            }
        }
    }

    sort($arr1);
    for ($i=0; $i < count($arr1); $i++) { 
        if ($arr1[$i] !== -1) {
            array_push($result, $arr1[$i]);
        }
    }
    return $result;
}

// var_dump(relative_sort_array($arr1, $arr2));

/**
 * @param Integer[] $arr1
 * @param Integer[] $arr2
 * @return Integer[]
 */
function relativeSortArray($arr1, $arr2) {
    $newArray = [];
    foreach($arr2 as $key => $item){
        foreach($arr1 as $key1 => $item1){
            if($item == $item1){
                $newArray[] = $item1;
                unset($arr1[$key1]);
                unset($arr[$key]);
            }
        }
    }

    sort($arr1);
    return array_merge($newArray,$arr1);
}

var_dump(relativeSortArray($arr1, $arr2));

