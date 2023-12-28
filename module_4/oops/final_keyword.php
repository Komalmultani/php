<?php 
// if we take any class as final  we never inherited final class with  another class 
final class A 
{
    public function display()
    {
        echo "Hi i am using final class examples";
    }
}
class B extends A 
{
    public function display1()
    {
        echo "Hi i am using final class inheritance";
    }
} 
$obj=new B;
$obj->display();
$obj->display1();
?>