<?php

/* Constants cannot be changed once it is declared.
Class constants can be useful if you need to define some constant data within a class.
A class constant is declared inside a class with the const keyword. */

class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
