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

    <div class="container p-5 shadow w-75 mx-auto mt-5">
        <h2 class="text-center">Login Form</h2>
        <hr class="border border-1 border-danger w-25 mx-auto">
        <div class="row">
            <div class="col-md-4">
                <img src="https://media.tenor.com/p0G_bmA2vSYAAAAd/login.gif" class="img-fluid w-75">
            </div>
            <div class="col-md-7">
        <form method="post" action="login_refresh.php">
            <div class="form-group mt-2">
                <input type="email" name="email" placeholder="Email *" required class="form-control">
            </div>
            
            <div class="form-group mt-2">
                <input type="password" name="password" placeholder="Password *" required class="form-control">
            </div>

            
            <div class="form-group mt-2">
                <input type="submit" name="login" value="Login" class="btn btn-sm btn-primary">
                <a href="#">Forget Password</a>
            </div>
        </form>
        </div>
    </div>
    
</body>
</html>