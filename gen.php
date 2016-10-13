<?php
/**
 * Created by PhpStorm.
 * User: gwozniak
 * Date: 2016-10-13
 * Time: 10:55
 */
include "lib/phpqrcode/qrlib.php";
QRcode::png('http://webapp-int.mhk.pl/drzwi/?c='.$_GET["c"], false, QR_ECLEVEL_L, 8);