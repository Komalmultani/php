<?php 
$name="brijesh kumar pandey";
$name1='my name is mona chotaliya';

// strlen(): find lenght of any string 
// echo strlen($name);

// strpos(): find positions  of any string from left side 
// echo strpos("Tops technology","technology");

// $str="hello world"; // find the first world in upper case
// echo ucwords($str);


// $str="hello world"; // find the first letter in upper case
// echo ucfirst($str);

// $str="BRIJESH KUMAR PANDEY"; // convert all word in lower case
// echo strtolower($str);

// $str="brijesh kumar pandey"; // convert all word in upper case
// echo strtoupper($str);


// $str="brijesh kumar pandey"; //trim
// echo trim($str,"pandey");


// $str="brijesh kumar pandey"; //trim
// echo trim($str,"brijesh");


// $str="brijesh kumar pandey"; //ltrim
// echo ltrim($str,"brijesh");


// $str="brijesh kumar pandey"; //ltrim
// echo rtrim($str,"pandey");

//string to time formate convert
// echo date("d/m/Y",strtotime("+5day"));

// echo strftime("%d/%m/%y"); //string to time or date
// echo strftime("%d/%m/%Y"); //string to time or date

// $str="password$$123456";
// echo base64_encode($str)."<br>"; //convert any string or encode anystring in non redable formate

// $str="cGFzc3dvcmQkJDEyMzQ1Ng==";
// echo base64_decode($str); //convert any string or decode anystring in  redable formate

// $str="brijesh$$321"; //md5 encode but after will not decode 
// echo md5($str);

// echo "<h2 align='center' style='color:green'> Otp is :".rand(11111,99999)."<br>";

// echo strstr("hello world","world"); //string to strimg match from left

// echo strstr("hello world","e"); //string to string match from left

// echo strstr("hello world","w"); //string to string match from left but  follow case senstivity


// echo stristr("hello world","H"); //string to string match from left but not   follow case senstivity

// implode :implode is used to convert any array into string

// $arr=array("brijesh","komal","gautam","rutvi","priti");
// //print_r($arr);
// echo implode(",",$arr);


//explode : this function is used to convert any string into array

// $str="hello my name is brijesh";
// print_r(explode(" ",$str));

// strrev : reverse any string 
// $str="komal";
// echo strrev($str);

//str_split: split any string into array count of word split

// $str="hello i am brijesh";
// print_r(str_split($str,3));

$str="hi i am brijesh";
echo str_shuffle($str);


?>