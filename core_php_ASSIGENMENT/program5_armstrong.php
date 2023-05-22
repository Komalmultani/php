<!-- Write a program to find whether a number is Armstrong or not Write a
program to print the below format :
5 9
2610
3711
4812  -->
<?php
$num=372;
$total=0;
$a=$num;

while($a!=0)
{
    $rem=$a%10;
    $total=$total+$rem*$rem*$rem;
    $a=$a/10;
}
if($num==$total)
{
    echo "The number is armstrong number";
}
else
{
    echo "The number is not armstrong number";
}
?>