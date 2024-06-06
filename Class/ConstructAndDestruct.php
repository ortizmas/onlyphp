<?php
class MyClass
{
    public function __construct()
    {
        echo 'The class "' . __CLASS__ . '" was initiated!' . "\n";
    }

    public function __destruct()
    {
        echo 'The class "' . __CLASS__ . '" was destroyed.' . "\n";
    }
}

$obj = new MyClass;

// Destroy the object
// unset($obj); // Destroe o objeto antes de executar o codigo seguinte.

// Output a message at the end of the file
echo "The end of the file is reached. \n";

