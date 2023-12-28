<?php 
// static: when we create any method as static so not need to create an object of class of static method

// without initializing of class object we called static method using :: scope resulations operator

class A 
{
    public static function display()
    {
        echo "My name is komal";

    }
}
A::display();
?>