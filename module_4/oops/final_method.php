<?php 
// if we take any method as final  we never overriding that final method in another method 
class A 
{
    final public function display($a,$b)
    {
        $c=$a+$b;
        echo "Additions of numbers is :".$c."<br>";
    }
}
class B extends A 
{
    public function display($a,$b)
    {
        $d=$a*$b;
        echo "Multiplications of numbers is :".$d;
    }
} 
$obj=new B;
$obj->display(10,20);

?>