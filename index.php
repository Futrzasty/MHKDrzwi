<?php
/**
 * Created by PhpStorm.
 * User: gwozniak
 * Date: 2016-10-13
 * Time: 10:28
 */

include "functions.php";

function start_html($title = "Domyślny tytuł strony") {
    ?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <style type="text/css">
            html, body {
                height: 100%;
            }
            .main {
                height: 100%;
                width: 100%;
                display: table;
            }
            .wrapper {
                display: table-cell;
                height: 100%;
                vertical-align: middle;
                text-align: center;
                font-family: Tahoma, Arial, Helvetica, sans-serif;
                font-weight: normal;
                font-size: 24pt;
            }
        </style>
        <?php
        echo "<title>$title</title>", PHP_EOL;
        ?>
    </head>
    <body>
    <?php
}

function end_html() {
    echo "</body></html>";
}

$quest = $pytanie[$kod_www[$_GET["c"]]];

start_html($quest);
echo "<div class='main'>";
echo "<div class='wrapper'>";
echo $quest;
echo "</div>";
echo "</div>";
end_html();
//echo "To są otwarte drzwi :-)";