<!-- Reference passing allows variable to be modified by the function it's passed to. -->

<?php
// $num = 0;
// incrementValue($num);
// //echo $num;//0

// function incrementValue($num)
// {
//     $num++;
//     //echo $num;//1
// }
// num is incremented by 1 in the incrementValue function.Since it's passed by value it remain 0 outside of the incrementValue function.


// To pass by reference ,the symbol & needs to be added before argument's name  
// function incrementValue(&$num)
// {
//     $num++;
// }
// $num = 0;
// incrementValue($num);

// echo $num;//1


// Array Arguments 
$arr = [5, 6];
modifyArray($arr);
echo $arr[0] . '' . $arr[1]; // 5,6

function modifyArray($arrayArg)
{
    $arrayArg[0] = 2;
    $arrayArg[1] = 4;
}

?>