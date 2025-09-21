<?php
/*
===============================
Inverted Right-Angle Triangle Loop Trace
===============================

This table shows each step of the loops and what is printed.

| i | j | Output       |
|---|---|--------------|
| 5 | 1 | *            |
| 5 | 2 | *            |
| 5 | 3 | *            |
| 5 | 4 | *            |
| 5 | 5 | *            |
| 5 | - | <br> (end of row 5) |
| 4 | 1 | *            |
| 4 | 2 | *            |
| 4 | 3 | *            |
| 4 | 4 | *            |
| 4 | - | <br> (end of row 4) |
| 3 | 1 | *            |
| 3 | 2 | *            |
| 3 | 3 | *            |
| 3 | - | <br> (end of row 3) |
| 2 | 1 | *            |
| 2 | 2 | *            |
| 2 | - | <br> (end of row 2) |
| 1 | 1 | *            |
| 1 | - | <br> (end of row 1) |
*/


$rows = 5;
for ($i = $rows; $i >= 1; $i--) {
    // print columns
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
