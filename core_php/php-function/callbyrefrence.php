<?php 
function nm(&$fname) //&$fname is a refrence passed and call a functions
{
  echo "My firstname is :Brijesh"."<br>";
}

$lname="My lastname is : Pandey"."<br>";
nm($fname);
echo $lname;

?>