<?php
$realpath = realpath(dirname(__FILE__));

//Define path to cache directory
defined("LIBRARY_PATH")
|| define("LIBRARY_PATH", $realpath);

require_once(LIBRARY_PATH . "/lib/Datamatrix.php");
require_once(LIBRARY_PATH . "/lib/PDF417.php");
require_once(LIBRARY_PATH . "/lib/QRcode.php");

require_once(LIBRARY_PATH . "/lib/Barcode1D.php");
require_once(LIBRARY_PATH . "/lib/Barcode2D.php");

require_once(LIBRARY_PATH . "/lib/DatamatrixFactory.php");
require_once(LIBRARY_PATH . "/lib/BarcodeFactory.php");
require_once(LIBRARY_PATH . "/lib/QRcodeFactory.php");
require_once(LIBRARY_PATH . "/lib/PDF417Factory.php");

require_once(LIBRARY_PATH . "/QRcode.php");
require_once(LIBRARY_PATH . "/Barcode.php");
require_once(LIBRARY_PATH . "/Datamatrix.php");
require_once(LIBRARY_PATH . "/PDF417.php");

// use jucksearm\barcode\lib\Datamatrix;
// use jucksearm\barcode\lib\PDF417;
// use jucksearm\barcode\lib\QRcode;