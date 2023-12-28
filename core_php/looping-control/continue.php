<?php 
$i;
for($i=1;$i<=100;$i++)
{
    if($i==51 || $i==64)
    {
        continue;
    }
    echo $i."<br>";
}

?>