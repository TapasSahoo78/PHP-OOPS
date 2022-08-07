<!-- Array stores multiple values -->

<?php
// $arrayName = ['Tapas','Amit'];
$arrayName = array('Tapas', 'Amit');
// if ($arrayName[3] == null) {
//     //print_r($arrayName[3]);
//     echo "not set";//Warning: Undefined array key 3 in C:\xampp\htdocs\PHP OOPS\array.php on line 5 not set
// }
array_push($arrayName, 'hcbs');
echo count($arrayName);
?>