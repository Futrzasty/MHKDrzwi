<?php
/**
 * Created by PhpStorm.
 * User: gwozniak
 * Date: 2016-10-13
 * Time: 10:55
 */
include "lib/phpqrcode/qrlib.php";
include "functions.php";

//QRcode::png('http://webapp-int.mhk.pl/drzwi/?c='.$_GET["c"], false, QR_ECLEVEL_L, 8);

foreach ($kod_www AS $kod => $oddzial) {
    $fileName = $oddzial.'.png';
    $pngAbsoluteFilePath = "/var/www/html/drzwi/cache/".$fileName;
    $urlRelativeFilePath = "/drzwi/cache/".$fileName;
    QRcode::png('http://webapp-int.mhk.pl/drzwi/?c='.$kod, $pngAbsoluteFilePath, QR_ECLEVEL_L, 16);
    echo '<img src="'.$urlRelativeFilePath.'" /><br/>';
    echo $oddzial." -> ".$kod."<br/>";
    echo $pytanie[$kod_www[$kod]]."<hr/>";
}