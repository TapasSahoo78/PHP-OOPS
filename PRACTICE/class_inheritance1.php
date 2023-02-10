<!-- Class Inheritance is a way to extends a class.The new class(Child class) builds or overwrites logic from the parent class(Super class) -->

<!-- Overwritten method is a method that has been inherited from the parent class but it's logic is changed in the Child class. -->


<?php
class ParentClass
{
    public function __construct()
    {
        echo "My parent class";
    }
    public function getData($data)
    {
        return 0;
    }
}
class Child1 extends ParentClass
{
    //Overwriting method
    public function getData($data)
    {
        return $data * 5;
    }
}
class Child2 extends ParentClass
{
    //Overwriting method
    public function getData($data)
    {
        return $data * 10;
    }
}
class Child3 extends ParentClass
{
    //Overwriting method
    public function getData($data)
    {
        return $data * 15;
    }
}


$child1 = new Child1();
echo "<pre>";
print_r($child1->getData(2));
echo "</pre>";

$child2 = new Child2();
echo "<pre>";
print_r($child2->getData(2));
echo "</pre>";

$child3 = new Child3();
echo "<pre>";
print_r($child3->getData(2));
echo "</pre>";

?>