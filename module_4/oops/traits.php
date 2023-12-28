<?php 
// traits :traits is a new features of oops launched in php8
// traits is best uses of inheritances 
// traits is easy solutions of inheritance
trait A  
{
    public function test()
    {
        echo "Hi komal";
    }
}
class B 
{
    use A;
}

$obj=new B;
$obj->test();



?>