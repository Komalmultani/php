<?php 
require_once("navigation.php");
if(isset($_POST["log"]))
{
    $em=$_POST["email"];
    $pass=$_POST["password"];
    if($em=='brij@gmail.com' && $pass=='brij123')
    {
        $_SESSION["email"]=$_POST["email"];
        
        echo "<div class='alert alert-success mx-auto w-50 p-4 mt-5'>
             <span class='text-dark'>Thanks for Logged in successfully</span></div>";
             header("refresh:4,profile.php");
    }

    else 
    {
        
        echo "<div class='alert alert-danger mx-auto w-50 p-4 mt-5'>
             <span class='text-dark'>Your email and password are incorect try again</span></div>";
             header("refresh:4,login.php");

    }
}
?>
<div class="container">
<div class="row">
    <div class="col-md-4 shadow p-4 mt-5">
        <h3>Login Form</h3>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sunt optio ratione deleniti, culpa quidem, rem laborum quaerat officiis itaque odit quos ab sed dicta labore inventore dolore adipisci at!</p>
    </div>
    <div class="col-md-8 mt-5 p-4">
        <form method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="log" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

</div>
