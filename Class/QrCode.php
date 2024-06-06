<?php

class QrCode
{
   
    public function __construct()
    {
        //
    }

    /** Gera um QR Code
     * @param string @texto Texto ao qual será inserido no QRCode
     * @param integer @tamanho 
     * @return string Retorna o base64 da imagem
     */
    public function generate($texto = 'TEST', $tamanho = 300, $margin = 1)
    {
        require_once ("Library/php-barcode-master/load.php");
        
        $img = jucksearm\barcode\QRcode::png($texto, null, null, null, $tamanho, $margin);
        $img = 'data:image/png;base64,' . base64_encode($img);

        return $img;
    }

    /** Gera um QR Code
     * @param string @texto Texto ao qual será inserido no QRCode
     * @param integer @tamanho 
     * @return string Retorna o png puro do qrcode
     */
    public function gerar_file($texto = 'test', $tamanho = 300, $margin = 0) {
        require_once ("Library/php-barcode-master/load.php");
        $img = jucksearm\barcode\QRcode::png($texto, null, null, null, $tamanho, $margin);

        return $img;
    }

    /** Decodifica o QR Code 
     * @param string $path
     * @return string|null Texto decodificado do QRCode
     */
    public function decodificar($path) {
        require_once ("Library/qrcode-detector-decoder/load.php");
        $qrcode = new Zxing\QrReader($path);

        return $qrcode->text();
    }
}
