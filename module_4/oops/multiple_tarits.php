<?php 
trait A  
{
    public function test()
    {
        echo "Hi Brijesh"."<br>";
    }
}
trait B  
{
    public function test1()
    {
        echo "Hi Bhavna behen"."<br>";
    }
}

trait C  
{
    public function test2()
    {
        echo "Hi Mona"."<br>";
    }
}
class D 
{
    use A,B,C;
}

$obj=new D;
$obj->test();
$obj->test1();
$obj->test2();


?>