<?php 
// when we called same function pass with same argument argument i.e called method overridding
// in php overriding generated no any error and method overide one to another 
class A 
{
    public function add($a,$b)
    {
        $c=$a+$b;
        echo "Additions of numbers is :".$c."<br>";
    }
}
class B extends A 
{
    public function add($a,$b)
    {
        $d=$a*$b;
        echo "Multiplications of numbers is :".$d."<br>";
    }

}

$obj=new B;
$obj->add(10,20);



?>