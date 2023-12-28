<?php 
// access modifier : is used to ho can we visidble our data inside of class using access modifier 
// access modifier is private , public and protected

// a) private :if we take any method of class as private it meanse its access only inside of class

// b) public :if we take any method of class as public it meanse its access anywhere inside of class and outside of class
//   default method is always public

// c) protected :if we take any method of class as protected  it meanse its only access by its one child class

class A 
{
    public $public="Hi i am public";
    private $private="Hi i am private";
    protected $protected="Hi i am protected";
    public function display()
    {
       echo $this->public."<br>";
       echo $this->private."<br>";
       echo $this->protected."<br>";

    }
}

$obj=new A; 
echo $obj->public; //this is work
echo $obj->private; //not work
echo $obj->protected; // not work
$obj->display();
?>