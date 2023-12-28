<?php 
// single inheritance : A parent class properties used by one child class i.e called single inheritance.

class A 
{
   public function display()
   {
    echo "My name is komal"."<br>";
   }
}
class B extends A 
{

   public function display1()
   {
    echo "My name is Vaishnavi"."<br>";
   }
}

$obj=new B;
$obj->display();
$obj-> display1();

?>