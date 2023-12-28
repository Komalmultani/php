<?php 
/* foreach : convert array as value there we used foreach loop 
foreach(array as value)
{
    statements;
}

*/ 

// array : array is used to stored multiple information in single variables i.e called array.


//$name="brijesh";

$name=array("brijesh","komal","dipti","mansi","krish","umesh","kripal");
//print_r($name);
foreach($name as $values)
{
    echo $values."<br>";
}
?>