<?php

require 'vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\LabelFont;
use Endroid\QrCode\Writer\PngWriter;

// URL of your video in the cloud
$videoUrl = 'https://drive.google.com/file/d/1unMTrKUKFixVe61PP1fTbW9mMW_171aW/view';

// Create a new QR code with the video URL
$qrCode = new QrCode($videoUrl);
$qrCode->setSize(300);
$qrCode->setMargin(10);
$qrCode->setEncoding('UTF-8');
$qrCode->setErrorCorrectionLevel(new ErrorCorrectionLevel(ErrorCorrectionLevel::LOW));
$qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
$qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
$qrCode->setLogoPath(__DIR__.'/parkrun/parkrun_logo.png');
$qrCode->setLogoSize(64, 64);

// Create a new PNG writer
$writer = new PngWriter();

// Write the QR code to a file
$result = $writer->writeString($qrCode);
file_put_contents('qr_codes/parkrun.png', $result);
?>
