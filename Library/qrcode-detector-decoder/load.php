<?php
$realpath = realpath(dirname(__FILE__));

//Define path to cache directory
defined("LIBRARY_PATH")
|| define("LIBRARY_PATH", $realpath);

require_once(LIBRARY_PATH . "/Binarizer.php");
require_once(LIBRARY_PATH . "/BinaryBitmap.php");
require_once(LIBRARY_PATH . "/ReaderException.php");
require_once(LIBRARY_PATH . "/ChecksumException.php");
require_once(LIBRARY_PATH . "/FormatException.php");
require_once(LIBRARY_PATH . "/LuminanceSource.php");
require_once(LIBRARY_PATH . "/GDLuminanceSource.php");
require_once(LIBRARY_PATH . "/IMagickLuminanceSource.php");
require_once(LIBRARY_PATH . "/NotFoundException.php");
require_once(LIBRARY_PATH . "/PlanarYUVLuminanceSource.php");
require_once(LIBRARY_PATH . "/QrReader.php");
require_once(LIBRARY_PATH . "/Reader.php");
require_once(LIBRARY_PATH . "/Result.php");
require_once(LIBRARY_PATH . "/ResultPoint.php");
require_once(LIBRARY_PATH . "/RGBLuminanceSource.php");

require_once(LIBRARY_PATH . "/Common/customFunctions.php");
require_once(LIBRARY_PATH . "/Common/AbstractEnum.php");
require_once(LIBRARY_PATH . "/Common/BitArray.php");
require_once(LIBRARY_PATH . "/Common/BitMatrix.php");
require_once(LIBRARY_PATH . "/Common/BitSource.php");
require_once(LIBRARY_PATH . "/Common/CharacterSetECI.php");
require_once(LIBRARY_PATH . "/Common/DecoderResult.php");
require_once(LIBRARY_PATH . "/Common/GridSampler.php");
require_once(LIBRARY_PATH . "/Common/DefaultGridSampler.php");
require_once(LIBRARY_PATH . "/Common/DetectorResult.php");
require_once(LIBRARY_PATH . "/Common/GlobalHistogramBinarizer.php");
require_once(LIBRARY_PATH . "/Common/HybridBinarizer.php");
require_once(LIBRARY_PATH . "/Common/PerspectiveTransform.php");

require_once(LIBRARY_PATH . "/Common/Detector/MathUtils.php");

require_once(LIBRARY_PATH . "/Common/Reedsolomon/GenericGFPoly.php");
require_once(LIBRARY_PATH . "/Common/Reedsolomon/GenericGF.php");
require_once(LIBRARY_PATH . "/Common/Reedsolomon/ReedSolomonDecoder.php");


require_once(LIBRARY_PATH . "/Qrcode/QRCodeReader.php");

require_once(LIBRARY_PATH . "/Qrcode/Decoder/BitMatrixParser.php");
require_once(LIBRARY_PATH . "/Qrcode/Decoder/DataBlock.php");
require_once(LIBRARY_PATH . "/Qrcode/Decoder/DataMask.php");
require_once(LIBRARY_PATH . "/Qrcode/Decoder/DecodedBitStreamParser.php");
require_once(LIBRARY_PATH . "/Qrcode/Decoder/Decoder.php");
require_once(LIBRARY_PATH . "/Qrcode/Decoder/ErrorCorrectionLevel.php");
require_once(LIBRARY_PATH . "/Qrcode/Decoder/FormatInformation.php");
require_once(LIBRARY_PATH . "/Qrcode/Decoder/Mode.php");
require_once(LIBRARY_PATH . "/Qrcode/Decoder/QRCodeDecoderMetaData.php");
require_once(LIBRARY_PATH . "/Qrcode/Decoder/Version.php");


require_once(LIBRARY_PATH . "/Qrcode/Detector/Detector.php");
require_once(LIBRARY_PATH . "/Qrcode/Detector/FinderPatternFinder.php");
require_once(LIBRARY_PATH . "/Qrcode/Detector/FinderPatternInfo.php");
require_once(LIBRARY_PATH . "/Qrcode/Detector/FinderPattern.php");
require_once(LIBRARY_PATH . "/Qrcode/Detector/AlignmentPattern.php");
require_once(LIBRARY_PATH . "/Qrcode/Detector/AlignmentPatternFinder.php");
