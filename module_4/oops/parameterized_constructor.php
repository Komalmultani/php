<?php

// parameterized constructor : pass parameter  default  __construct() or its also called magic method or parameterized constructor
class A 
{
    public function __construct($name,$age)
    {
        echo $nm="My name is :".$name."<br>"."My age is :".$age;
        
    }
}
$obj=new A("brijesh",32);

?>