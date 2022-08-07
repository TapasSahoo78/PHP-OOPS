<!-- Recursion is a technique in which a functions calls itself -->

<!-- recursiveFunc();

function recursiveFunc(){
    recursiveFunc();
} -->

<?php
//1st Example
$factorial = calFactorial(4);
echo $factorial; //24

function calFactorial($num)
{
    if ($num == 0) {
        return 1;
    }
    echo "<pre>";
    print_r(calFactorial($num - 1)); //111211161112111
    echo "</pre>";
    return $num * calFactorial($num - 1);
}

//2nd Example
function display($number)
{
    if ($number <= 5) {
        echo "$number <br/>";
        display($number + 1);
    }
}

display(1);
?>