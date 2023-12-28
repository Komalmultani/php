<?php 
class A 
{
    public function __construct()
    {
        echo "My name is komal"."<br>";
    }
}

class B extends A 
{
    public function display()
    {
        echo "i am inherited another class";
    }

}


// class B extends A 
// {
//     public function __construct()
//     {
//         echo "i am inherited another class";
//     }

// }

// $obj=new B;

$obj=new B;
$obj->display();

?>