<?php
require __DIR__.'/vendor/autoload.php';
// require_once __DIR__ . "/src/PhysicalPerson.php";

use Ortizmas\Poo\Models\PhysicalPerson;
use Ortizmas\Poo\Models\People;
use Ortizmas\Poo\Models\JuridicPerson;

// Atributos, methodos, private, public, this e self
// $physicalPerson = new PhysicalPerson("Eber Ortiz", "ortizmas14@gmail.com", 40);
// $physicalPerson->setName("Eber Ortiz");
// $physicalPerson->setEmail("ortizmas14@gmail.com");
// $physicalPerson->setOld(40);

// $physicalPerson2 = new PhysicalPerson("Eber Ortiz", "ortizmas14@gmail.com", 60);
// $physicalPerson2->setName("Eber Ortiz Mas");
// $physicalPerson2->setEmail("ortizmas@gmail.com");
// $physicalPerson2->setOld(45);

// dump([$physicalPerson->setCpf(11111), PhysicalPerson::getInformation("Eber")]);

// Extense
// $people = new People("Eber Mas", 40);
// $juridicPerson = new JuridicPerson("Juan", 80);

// if ($juridicPerson instanceof People) {
//     dump("True");
// }

// dump([$people, $juridicPerson]);

// Abstract Calss
/*$peopleJ = new JuridicPerson("Eber Mas", 40, 8127284367);
$peopleJ->cnpj = 9283746743284;

function getName(People $class): void
{
    $class->showName();
    echo $class->getDocument();
}

getName($peopleJ);*/



