<?php 
class p 
{
    public $nm,$ag;
    public function display($name,$age)
    {

        echo "my name is :".$this->nm=$name."<br>";
        echo "My age is :".$this->ag=$age."<br>";
    }
}
$obj=new p;
$obj->display("komal",24);

?>