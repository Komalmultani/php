<?php 
// when we called same function pass with different argument i.e called method overloadding
// in php overloading generated error fatal 
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
    public function add($a,$b,$c)
    {
        $d=$a*$b*$c;
        echo "Additions of numbers is :".$d."<br>";
    }

}

$obj=new B;
$obj->add(10,20,30);



?>