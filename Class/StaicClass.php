<?php

class HelloClass
{
    public static $gretting = "Hello Static Class \n";

    public static function sayHello()
    {
        echo self::$gretting;
    }
}

// Attempt to access static property and method directly
echo HelloClass::$gretting;
HelloClass::sayHello();

$helloClass = new HelloClass;
// echo $helloClass->gretting; // Strict Warning
echo $helloClass::$gretting; // Strict Warning
$helloClass->sayHello();