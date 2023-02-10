<?php
function removeDuplicateValues($array)
{
    $newArray = array();
    // while (list($key, $value) = each($array)) {
    //     $newArray[$value] = 1;
    // }
    foreach ($array as $arg) {
        $newArray[$arg] = 1;
    }

    return array_keys($newArray);
}

$arr = array('tapas', 'sahoo', 'tapas', 'sahoo', 'tapas', 'sahoo', 'tapas', 'sahoo','amit','das');
echo "<pre>";
print_r(removeDuplicateValues($arr));
