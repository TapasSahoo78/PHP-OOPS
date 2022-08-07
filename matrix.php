<?php
$matrix = [
    [1, 2, 3, 4, 5], //row 1
    [6, 7, 8, 9, 10], //row 2
    [11, 12, 13, 14, 15] //row 3
];

$rows = count($matrix);
// echo $rows; //3

for ($row = 0; $row < $rows; $row++) {
    // echo "<pre>";
    // print_r($matrix[$row]);
    // echo "</pre>";
    $cols = count($matrix[$row]);
    // echo $col; //5

    for ($col = 0; $col < $cols; $col++) {
        echo $matrix[$row][$col] . "\t";
    }
    //Print each row on a new line
    echo "<br>";
}
