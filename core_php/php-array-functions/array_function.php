<?php 
/* array functions
array_count_values();
array_sum();
array_merge();
array_combine();
array_keys();
array_values();
in_array();
asort();
arsort();
ksort();
krsort();
array_pop();
array_push();
array_chunk();
array_reverse();


*/


// array_count_values() :count the array values 
// $arr=array("php","python","php","java","reactjs","java","php");
// print_r(array_count_values($arr));

// array_sum(): sum of any array

// $num=array(5454,32121,2121,2121,2121,21,212,1212);
// print_r(array_sum($num));

// array_combine() : array combine is used to combine only two array but first is key and second will its values

// $arr1=array(0,1,2,3);
// $arr2=array("mayank","surbhi","komal","gautam");
// print_r(array_combine($arr1,$arr2));

//array_merge(): array_merge isused to merge more than two  array and not need first array as key and values 

// $arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");
// $arr2=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"bhavik");
// $arr3=array("a"=>"bhuvneshwar","b"=>"shweta","c"=>"kumar","d"=>"lorence","e"=>"brijesh");

// print_r(array_merge($arr1,$arr2,$arr3));

// // array_keys()

// $arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");
// print_r(array_keys($arr1));


// array_values()
// $arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");
// print_r(array_values($arr1));


// in_keys() : in_array are used to search any array data 
// $arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");

// if(in_array("komal",$arr1))
// {
//     echo "This user is available";
// }
// else 
// {
//     echo "This user is not avialable";
// }


// // asort(): sorting from array in ascending order with its values of array
// $arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");
// asort($arr1);
// foreach($arr1 as $value)
// {
//     echo "My name is after asort is :".$value."<br>";
// }


// arsort(): sorting from array in descending order with its values of array
// $arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");
// arsort($arr1);
// foreach($arr1 as $value)
// {
//     echo "My name is after asort is :".$value."<br>";
// }

// // ksort(): sorting from array in ascending order with its keys of array
// $arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");
// ksort($arr1);
// foreach($arr1 as $value)
// {
//     echo "My name is after asort is :".$value."<br>";
// }

// krsort(): sorting from array in descending order with its keys of array

// $arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");
// krsort($arr1);
// foreach($arr1 as $value)
// {
//     echo "My name is after asort is :".$value."<br>";
// }


// array_pop(): array pop is used to pop or delete last element of array

// $arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");
// print_r(array_pop($arr1));
// print_r($arr1);




//array_push(): array push is used to iinsert new element in array at last index 

// $arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");
// print_r(array_push($arr1,"gautam"));
// print_r($arr1);

// //array_chunk
// $arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");
// print_r(array_chunk($arr1,3));

//array_reverse()

$arr1=array("a"=>"mayank","b"=>"komal","c"=>"kumar","d"=>"rutvi");
print_r(array_reverse($arr1));






?>