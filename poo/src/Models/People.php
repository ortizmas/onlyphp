<?php
declare(strict_types = 1);

namespace Ortizmas\Poo\Models;

abstract class People
{
    public string $name = "";
    public int $age;

    public function __construct(
        string $name = '',
        int $age = 0,
    ) {
        $this->name = $name;
        $this->age = $age;
    }

    public function showName(): void
    {
        echo $this->name . PHP_EOL;
    }

    abstract public function getDocument(): int;

}



