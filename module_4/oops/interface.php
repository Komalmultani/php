<?php 
// interface :interface is used to access multiple parent class properties by its one child class using interface 
// interface declare with interface class name
// interface used another class properties by implements keywords
// interface is an solutions of multiple inheritance
interface A 
{
    public function display1(); // function are declared
}

interface B 
{
    public function display2(); // function are declared
}
interface C
{
    public function display3(); // function are declared
}
interface D 
{
    public function display4(); // function are declared
}

class E implements A,B,C,D
{
    public function display1()
    {
        echo "Vinod"."<br>";
    }
    
    public function display2()
    {
        echo "Mitesh"."<br>";
    }
    
    public function display3()
    {
        echo "Shweta"."<br>";
    }
    
    public function display4()
    {
        echo "Prakruti"."<br>";
    }

}

$obj=new E;
$obj-> display1();
$obj-> display2();
$obj-> display3();
$obj-> display4();

?>