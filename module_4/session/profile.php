<?php 
require_once("navigation.php");
if(!isset($_SESSION["email"]))
{
    echo "<script>
    window.location='login.php';
    </script>";
}
?>

<div class="container">
<div class="row">
    <div class="col-md-4 shadow p-4 mt-5">
        <h3>Welcome:<?php echo $_SESSION["email"];?></h3>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sunt optio ratione deleniti, culpa quidem, rem laborum quaerat officiis itaque odit quos ab sed dicta labore inventore dolore adipisci at!</p>
    </div>
    <div class="col-md-8 mt-5 p-4">
    
    <button class="btn btn-info btn-block w-75 p-2"> Update Profile here >></button>

    </div>

</div>
