<?php
// Methode 1

$rows = 5;
$cols = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        if ($i == 1 || $i == $rows || $j == 1 || $j == $cols) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp";
        }
    }
    echo "<br>";
}

// Method 2

$size = 5;
echo "Method 2 <br>";
for ($i = 1; $i <= $size; $i++) {
    // print column
    for ($j = 1; $j <= $size; $j++) {
        // print start only in first and last row
        if ($i == 1 || $i == $size) {
            echo "*";
        } else {
            // print star only in first and last position in row (column)
            if ($j == 1 || $j == $size) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
    }
    echo "<br>";
}
