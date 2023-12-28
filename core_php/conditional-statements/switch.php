<?php 
/* 
switch is just like if elseif where we check multiple cases if case is false default is executed

*/

$grade="A";
switch($grade)
{
    case 'A':
        echo "you are topper students";
        break;
    case 'B':
        echo "you are average students";
        break;    
        
    case 'C':
        echo "you are failed  students";
        break;

    default:
    echo "your grade is not found anywhere contact with admin";
    break;

}

?>