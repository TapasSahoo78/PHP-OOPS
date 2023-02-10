<?php

class Test
{
    public $name;

    function set_name($nme)
    {
        $this->name = $nme;
    }

    function get_name()
    {
        return $this->name;
    }
}

$a = new Test();
$a->set_name('Tapas');
$a->set_name('Tapas2');
$a->set_name('Tapas3');
$a->set_name('Tapas4');

echo $a->get_name();
