<?php 
$roomprice=4500; //intialize variable
echo "Hotel Room price is :".$roomprice."<br>";
//print current date 
$checking=mktime(0,0,0,date("m"),date("d"),date("y"));
echo "Your check in date :".date("d/m/Y",$checking)."<br>";
// print future date day of tommarow
$checkout=mktime(0,0,0,date("m"),date("d")+2,date("y"));
echo "Your checkout in date :".date("d/m/Y",$checkout)."<br>";
$diff=($checkout-$checking)/86400;
echo "Total number of statying in hotel in days :".$diff;
$subtotal=$roomprice*$diff;
echo "<h4 style='color:black; background-color:green; width:40%; padding:5px'>Total paying charge is Rs:$subtotal</h4>";

?>