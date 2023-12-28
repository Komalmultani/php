<?php 
// abstract class : when we create any class as abstract we can not create object of abstract class
// abstract class should be accessed via inheritance
abstract class A
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
        echo "My name is Vaishnavi";

    }
}
$obj=new B;
$obj->display();
$obj->display1();


?>