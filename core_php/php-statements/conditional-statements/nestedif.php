<?php 
// nested if : condition wition another condition is called nested if conditions

// if(condition)
// {
//     if(conditions)
//     {
//         statements;
//     }
// }

// else 
// {
//     statements;
// }

$a=20;
$b=10;
if($a>$b)
{
    if($a!=0 && $b!=0)
    {
    echo "a is greter than b and both are positive numbers";
}
}

else 
{
    echo "a is less than b";
}


?>