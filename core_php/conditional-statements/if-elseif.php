<?php 
/* 
if elseif : if executed when condition is true elsif executed while check multiple true conditions elseif is flase else is excuted
if(conditions)
{
    statements;
}
elseif(conditions)
{
    stetements;
}
elseif(conditions)
{
    syeyements;
}
else 
{
    stetements;
}

*/

$a=70;
$b=70;
if($a>$b)
{
    echo "a is greter than b";

}
elseif($b>$a)
{
    echo "b is greter than a";
}
else
{
    echo "a and b both are same";
}


?>