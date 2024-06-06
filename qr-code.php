<?php
    require_once (dirname(__FILE__).'/Config/display-errors.php');
    require dirname(__FILE__).'/Class/QrCode.php';

    $qrCode = new QrCode();
    // echo $qrCode->generate();

    echo $qrCode->gerar_file();