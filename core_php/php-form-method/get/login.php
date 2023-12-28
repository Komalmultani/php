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
    if(isset($_GET["sub"]))
    {
        $em=$_GET["email"];
        $pwd=$_GET["password"];

        if($em=='bkpandey.pandey@gmail.com' && $pwd=='brij$$1234')
        {
            echo "<h1 align='center' style='color:green'>You are Logged in successfully</h1>";
            header("refresh:6,welcome.php");
        }
        else 
        {
            
            echo "<h1 align='center' style='color:red'>Your email and password are wrong try again</h1>";
            header("refresh:3,login.php");
        }

    }

    ?>
    <center>
        <form method="get">
            Enter email :<input type="text" name="email" placeholder="Email" required>
            <br><br>
            Enter Password :<input type="password" name="password" placeholder="Password" required>
            <br><br>
            <input type="submit" name="sub" value="Login">
        </form>
    </center>
</body>
</html>