<?php 
// multilevel inheritance : A parent class properties used by its child class and child class properties used by its another child class i.e  multilevel inheritance.
// A=>B=>C=>D=>E

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

class C extends B 
{

   public function display2()
   {
    echo "My name is Mona"."<br>";
   }
}

class D extends C 
{

   public function display3()
   {
    echo "My name is Krupali"."<br>";
   }
}


$obj=new D;
$obj->display();
$obj-> display1();
$obj-> display2();
$obj-> display3();

?>