<?php 
$mainurl="http://localhost/crudappmvc/";
$baseurl="http://localhost/crudappmvc/assets/";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Page Title</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo $baseurl;?>css/style.css">
<!-- script files -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        new DataTable('#examples');
    })

</script>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md nav bg-primary p-1">
    <a href="#" class="navbar-brand text-white ms-5">Student management systems</a>
    
    <!-- add toggler -->
    <button type="button" class="navbar-toggler btn btn-lg fs-2 text-white" data-bs-toggle="collapse" data-bs-target="#togg">
        <i class="bi bi-grid-3x3-gap"></i>
    </button>
    <div class="collapse navbar-collapse" id="togg">
    <ul class="navbar-link">
        <li><a href="<?php echo $mainurl;?>">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
        <?php 
        if(!isset($_SESSION["studentid"]))
        {
        ?>
        <li class="dropdown"><a data-bs-toggle="dropdown" class="dropdown-toggle"  href="#"><span class="bi bi-person-add"> Account</span></a>
        
            <ul class="dropdown-menu bg-primary">
                <li><a href="#">SignIn</a></li>
                <li><a href="<?php $mainurl; ?>addstudent">SignUp</a></li>
            </ul>
        </li>
        <?php 
        }
        else 
        {
        ?> 
        <li class="dropdown"><a data-bs-toggle="dropdown" class="dropdown-toggle"  href="#"><span class="bi bi-person-add">Welcome :<?php echo $_SESSION["name"];?></span></a>
        
        <ul class="dropdown-menu bg-primary">
            <li><a href="<?php echo $mainurl;?>manageprofile">Manage profile</a></li>
            <li><a href="<?php echo $mainurl;?>changepasssword">Chanage password</a></li>
            <li><a href="<?php echo $mainurl;?>manageorders">Manage Orders</a></li>
            <li><a href="<?php echo $mainurl;?>">Manage Card <span class="badge badge-sm bg-danger text-white"><?php echo  $totalcrd[0]["total"];?></a></li>
            <li><a href="<?php echo $mainurl;?>?logout-here" class="btn btn-sm btn-danger text-white ms-3">Logout</a></li>
        </ul>
    </li>

    <?php 
        }
    ?>

    </ul>

    </div>
</nav>




</body>
</html>