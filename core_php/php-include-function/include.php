<?php 
if(isset($_POST["sub"]))
{
    $n=$_POST["num"];
    if($n%2==0)
    {
    echo "<h2 align='center'>Number is even</h2>";
    }

    else 
    {

        echo "<h2 align='center'>Number is odd</h2>";
    }
}

?>