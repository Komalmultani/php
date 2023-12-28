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
    $nm=$_POST["nm"];
    echo "<h2>My name is :$nm</h2>";
}

?>
<center>

<form method="post">
Enter you name :<input type="text" name="nm" placeholder="Enter name " required>
<br><br>
<input type="submit" name="sub" value="Submit">

</center>
</form>
</body>
</html>