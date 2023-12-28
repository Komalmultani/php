<?php 
/* what is object ? 
     an object is an instance of class
     or 
     an object is an examples of class.

     an object is created by new keyword of same name of class

*/

class Tom 
{
    public function test()
    {
        $name="My name is Tom";
        echo $name;
    }
}
$obj=new Tom;
$obj->test();  //new Tom is an object of class



?>