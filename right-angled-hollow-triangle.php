<?php

$size = 5;
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size; $j++) {
        if ($i == $size || $j == 1 || $i == $j) {
            echo "*&nbsp;";
        } else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
