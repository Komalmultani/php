<?php

// default constructor : default constructor is defined as __construct() or its also called magic method

class A 
{
    public function __construct()
    {
        $name="hi brijesh";
        echo $name;
    }
}
$obj=new A;

?>