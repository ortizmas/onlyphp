<?php

function fibonacci($n)
{
    // Fibonacci
    $a = 0;
    $b = 1;
    $c = 1;
    for ($i = 1; $i < $n ; $i++) { 
        $c = $a + $b;
        $a = $b;
        $b = $c;
        echo $b . "\n";
    }
    return $c;
    
}

echo fibonacci(15) ."\n";