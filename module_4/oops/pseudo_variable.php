<?php 
/* 
pseudo variable : pseudo variables is denoted by $this symbol and its used to called a variables inside member function globally;
*/

// $name="brijesh";
// function test()
// {
//     echo $name;
// }
// test();
class komal 
{
    public $name="hi my name is komal";
    public function display()
    {

        // echo $name;

        echo $this->name;

    }
}

$obj=new komal;
$obj->display();


?>