<?php
require __DIR__.'/vendor/autoload.php';
// require_once __DIR__ . "/src/PhysicalPerson.php";

use Ortizmas\Poo\PhysicalPerson;

$physicalPerson = new PhysicalPerson();
$physicalPerson->setName("Eber Ortiz");
$physicalPerson->setEmail("ortizmas14@gmail.com");
$physicalPerson->setOld(40);

dump($physicalPerson);