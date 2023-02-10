<?php

abstract class Test
{
    public function __construct()
    {
        echo "constructor" . '<br/>';
    }

    abstract public function child();
}

class myFunc extends Test
{
    public function child(){
        echo "Child function";
    }
}

$con = new myFunc();
$con->child();
