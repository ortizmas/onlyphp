<?php
    // https://hotexamples.com/examples/-/PDF/SetXY/php-pdf-setxy-method-examples.html
    // https://hotexamples.com/examples/-/FPDF/SetXY/php-fpdf-setxy-method-examples.html
    // http://www.fpdf.org

    require_once('Library/fpdf/fpdf.php');

    $pdf = new FPDF();
    $pdf->AddPage('L');
    $pdf->SetFont('Arial','B',16);
    $width = 297;
    $height = 210;
    $top = 148;
    $top_two = 0;
    $left = 10;
    $column = 1;
    $effective_width = $width - 2 * $left;
    $pdf->Image('public/certificates/certificato-3.png', 0, 0, 297, 210, 'PNG');
    $pdf->Cell($effective_width, $top, 'Hello World!', 0, 0, 'C');
    $pdf->SetXY(88, 169);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell($effective_width, $top_two, 'Eber Mas Mas Mas!', 0, 0, 'C');

    $pdf->Output();

?>
