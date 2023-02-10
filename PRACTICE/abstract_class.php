<?php
   abstract class base {
      abstract function printdata();
      public function getdata() {
         echo "Tutorials Point";
      }
   }
   class child extends base{
      public function printdata(){
         echo "Good morning";
      }
   }
   $obj = new child();
   $obj->getdata();//Tutorials Point
