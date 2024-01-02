
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</head>
<body>
    

<!-- add student -->

<div class="container p-5">
        <div class="row">
            
            <div class="col-md-7">
        <h3>Login <button type="button" class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button></h3>
        <hr class="border border-1 border-dark">
        <form method="post">
       

            <div class="input-group mt-3">
            <input type="text" name="email" placeholder="email *" required class="form-control">
            </div>

            <div class="input-group mt-3">
            <input type="password" name="pass" placeholder="Password *" required class="form-control">
            </div>
            
           

            
            <div class="input-group mt-3">
                <input type="submit" name="add_login" value="Login" class="btn btn-md btn-primary text-white">
              

            </div>

               
            <div class="input-group mt-3">
            <b>Dont  have an Account ? <a href="<?php echo $mainurl;?>candidate-signup">Create account </a>
            </div>
        </form>



    </div>

 </div>
</div>
</div>    
</div>
</body>
</html>