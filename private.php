 <!-- Private properties and functions can ben accessed or modified only in the class body. -->

 <?php
    class Person
    {
        private $id = 1;

        public function printData()
        {
            echo "Id :" . $this->id;
        }
    }
    $personobj = new Person();
    //$personobj->id = 12; //Uncaught Error: Cannot access private property Person::$id
    $personobj->printData(); // Id : 1
    ?>