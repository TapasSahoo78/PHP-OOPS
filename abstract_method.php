<!-- Abstract class is a class that can't be instantiated(object can't be created) and may contain abstract method. -->

<?php
abstract class Test
{
    public function getData($data)
    {
        return 0;
    }
}

class Child extends Test
{
    public function getData($data)
    {
        return $data * 20;
    }
}

$child = new Child();
echo "<pre>";
print_r($child->getData(10));
echo "</pre>";
?>