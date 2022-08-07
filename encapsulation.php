<!-- Encapsulation is a protection mechanism for the data members and methods present inside the class. In the encapsulation technique, we are restricting the data members from access to outside world end-user. In PHP, encapsulation utilized to make the code more secure and robust. -->

<?php
// class ATM
// {
//     private $custid;
//     private $atmpin;
//     public function PinChange($custid, $atmpin)
//     {
//     }
//     public function CheckBalance($custid, $atmpin)
//     {
//     }
//     public function miniStatement($custid)
//     {
//     }
// }
// $obj = new ATM();
// $obj->CheckBalance(10005285637, 1 ** 3);

// https://static.javatpoint.com/phppages/images/php-oops-encapsulation.png
// Encapsulation is a concept where we encapsulate all the data and member functions together to form an object.
// Wrapping up data member and method together into a single unit is called Encapsulation.
// Encapsulation also allows a class to change its internal implementation without hurting the overall functioning of the system.
// Binding the data with the code that manipulates it.
// It keeps the data and the code safe from external interference.

class person
{
    public $name;
    public $age;
    function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }
    public function setAge($ag)
    {
        $this->ag = $ag;
    }

    public function display()
    {
        echo  "welcome " . $this->name . "<br/>"; //welcome Tapas
        return $this->age - $this->ag;
    }
}

$person = new person("Tapas", 25);

$person->setAge(1);

echo "You are " . $person->display() . " years old"; //You are 24 years old

?>