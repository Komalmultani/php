
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
<?php 
if(isset($_POST["login"]))
{
    $em=$_POST["email"];
    $pass=$_POST["password"];
    if($em=='gautam007@gmail.com' && $pass=='g$$321')
    {
      echo "<div class='alert alert-success w-50 mx-auto p-3'>
             <span class='text-dark'>Thanks for Logged in successfully</span>
             </div>";
             header('refresh:4,welcome.php');
    }
    else 
    {

        echo "<div class='alert alert-danger w-50 mx-auto p-3'>
        <span class='text-dark'>Your email and password are incorrect try again</span>
        </div>";
        header('refresh:4,login.php');
    }
}



?>

</body>