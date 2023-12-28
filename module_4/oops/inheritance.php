<?php 
class A 
{
   public function display()
   {
    echo "My name is Brijesh"."<br>";
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