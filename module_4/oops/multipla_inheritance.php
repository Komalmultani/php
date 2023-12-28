<?php 
// multiple inheritance : php and java is not support multiple inheritance
//multiple inheritance meanse when multiple parent class properties access by its one child class it called multiple inheritance   

class A 
{
    public function display()
    {
        echo "Hi vinod"."<br>";
    }
}

class B 
{
    public function display1()
    {
        echo "Hi Dharmik"."<br>";
    }
}

class C 
{
    public function display2()
    {
        echo "Hi Krish"."<br>";
    }
}


class D extends A,B,C 
{
    public function display3()
    {
        echo "Hi krupali"."<br>";
    }
}

$obj=new D;
$obj-> display();
$obj-> display1();
$obj-> display2();
$obj-> display3();
?>