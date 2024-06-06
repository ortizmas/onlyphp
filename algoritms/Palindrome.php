<?php

$result = 99 * 91;

$num = $result;
$reverse_num = 0;
$temp = $num;

while ($temp != 0) {
    $digit = $temp % 10;
    $reverse_num = $reverse_num * 10 + $digit;
    $temp = (int)($temp / 10);
    // echo $temp . "\n\n";
}

echo $num . "\n";
echo $reverse_num . "\n";
echo $temp . "\n";

if ($num === $reverse_num) {
    echo "O numero {$num} é um Palindrome \n";
} else {
    echo "O numero {$num} não é um Palindrome \n";
}



