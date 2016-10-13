<?php
/**
 * Created by PhpStorm.
 * User: gwozniak
 * Date: 2016-10-13
 * Time: 10:28
 */

function start_html($title = "Domyślny tytuł strony", $jquery = FALSE) {
    ?>
    <!DOCTYPE html>
    <html lang="pl" moznomarginboxes mozdisallowselectionprint>
    <head>
        <meta charset="UTF-8">
        <link href="index.css" rel="stylesheet" type="text/css" media="screen, print"/>
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

switch ($_GET["c"]) {
    case "p1":
        $pytanie = "Pytanie 1";
        break;
    case "p2":
        $pytanie = "Pytanie 2";
        break;
}

start_html($pytanie);
echo $pytanie;
end_html();
//echo "To są otwarte drzwi :-)";