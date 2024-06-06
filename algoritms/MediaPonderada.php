<?php
    // https://www.comp.uems.br/~mercedes/disciplinas/2013/AEDI/Estrutura%20Sequencial%20Resolvida.pdf
    // 1. Faça um algoritmo que leia quatro números informados pelo usuário e que depois imprima a média ponderada, sabendo­se que os pesos    
    // são respectivamente: 1, 2, 3 e 4:

    $lastnames = ['Skywalker', 'Organa', 'Kenobi', "Last"];
    $firstnames = ['Luke', 'Leia', 'Obiwan', "Test"];


    $peso = [5, 16, 3, 1];
    $nums = [1100, 2000, 5500, 12500];
    $count = count($nums);
    $sum = 0;
    $sum_peso = 0;

    for ($i=0; $i < $count; $i++) { 
        $sum += ($peso[$i] * $nums[$i]);
        $sum_peso += $peso[$i];
    }

    echo $sum . "\n";
    echo $sum_peso . "\n";
    $media = $sum / $sum_peso;

    echo "Media Ponderada é " . $media;