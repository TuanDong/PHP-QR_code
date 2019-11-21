<?php

use Zxing\QrReader;

require "vendor/autoload.php";
$qrcode = new QrReader($image);// or url image
$text = $qrcode->text();
echo "<span>".$text."</span>";
?>