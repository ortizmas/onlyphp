<?php

function reverse_array($arr) {
    $ponteiroMenor = 0;
    $ponteiroMaior = count($arr) - 1;

    while($ponteiroMenor < $ponteiroMaior) {
        $temp = $arr[$ponteiroMenor];
        $arr[$ponteiroMenor] = $arr[$ponteiroMaior];
        $arr[$ponteiroMaior] = $temp;

        $ponteiroMenor++;
        $ponteiroMaior--;
    }

    return $arr;
}

$arr = [1, 2, 3, 4, 5];
// var_dump(array_reverse($arr));
var_dump(reverse_array($arr));

