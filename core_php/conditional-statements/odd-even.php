
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php 
if(isset($_POST["sub"]))
{
    $n=$_POST["num"];
    if($n%2==0)
    {
        echo "<h1>The numbers is Even</h1>";
    }
    else 
    {
        echo "<h1>The numbers is Odd</h1>";
        
    }
}



?>
    <form method="post">
        Enter your number :<input type="text" name="num" placeholder="Enter your name *" required>
        <br><br>
        <input type="submit" name="sub" value="Check">

    </form>
    
</body>
</html>