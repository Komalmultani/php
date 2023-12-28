<?php 
// There are three types of date functions

  //a) date(); // get current date and time
  //b) mktime(); // get future date , past date and current date and time
  //of systems 
  //c) strtotime // get string to time or date formate
  
  
  //get date and time
  date_default_timezone_set("Asia/Calcutta");
  echo date("d/m/Y h:i:s a")."<br>";

 //mktime(0,0,0,m/d/y); get future date , current date past date and time 
 

 //today is 
//  $today=mktime(0,0,0,date("m"),date("d"),date("y"));
//  echo "Today is :".date("d/m/y",$today);

// //past days is 
// $today=mktime(0,0,0,date("m"),date("d")-7,date("y"));
// echo "Before 7 days the date is  is :".date("d/m/y",$today);


//future date is 
$today=mktime(0,0,0,date("m")+2,date("d")+7,date("y"));
echo "past date is after 7 days and 2 month the date is  is :".date("d/m/y",$today)."<br>";

// strtotime : conver any string to date formate
echo "after 15 days the date is :".date("d/m/Y",strtotime("+15 day"));

 ?>