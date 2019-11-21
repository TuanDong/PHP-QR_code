<?php
require "vendor/autoload.php";

use Endroid\QrCode\QrCode;

$qrCode = new QrCode($_GET['text']);
$qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
$qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();