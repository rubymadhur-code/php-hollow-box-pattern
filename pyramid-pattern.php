<?php
$rows = 5; //number oof rows
for ($i = 1; $i <= $rows; $i++) {
    // print spaces
    for ($j = 1; $j <= ($rows - $i); $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    // print stars
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*&nbsp;";
    }
    echo "<br>";
}
