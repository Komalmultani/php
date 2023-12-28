<?php 
/* Multidimentional array : defined array within another array there we used multidimentional array

*/ 

$arr=array("technical"=>array("fiter","electrical","mechanical"),"non-technical"=>array("labour","painter","carpentor"));
print_r($arr);

print_r($arr["non-technical"][0]);
print_r($arr["technical"][2]);

?>