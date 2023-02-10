<!-- In PHP, Final keyword is applicable to only class and class methods. We cannot declare as Final in PHP.
So if we declare class method as a Final then that method cannot be override by the child class.
Same as method if we declare class as a Final then that class cannot be extended any more. -->

<?php

class base
{
    final public function dis1()
    {
        echo "Base class..";
    }
}
class derived extends base
{
    public function dis1()
    {
        echo "derived class";
    }
}
$obj = new derived();
$obj->dis1(); //Fatal error: Cannot override final method base::dis1().
?>