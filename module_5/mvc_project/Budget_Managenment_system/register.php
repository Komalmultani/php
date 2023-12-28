<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    


<!-- content start here -->

<div class="container p-3 mt-5">
        <div class="row">
            <div class="col-md-4 p-4">
                <h2>Create Account here</h2>

</div>
                
                <div class="col-md-7 ms-3 p-3">
                <h2 class="bg-info text-white p-2 w-50">Register Form</h2>
            
                <form method="post">
                <div class="input-group mt-3">
                    <input type="text" name="name" placeholder="Name *" required class="form-control" required>
                </div>
                
                <div class="input-group mt-3">
                    <input type="text" name="email" placeholder="Email *" required class="form-control" required>
                </div>

                
                <div class="input-group mt-3">
                    <input type="password" name="pass" placeholder="Password" required class="form-control">
                </div>


                
                <div class="input-group mt-3">
                    <input type="text" name="phone" placeholder="Phone *" required class="form-control">
                </div>

                
                <div class="input-group mt-3">
                    <textarea  name="address" placeholder="Address" required class="form-control"></textarea>
                </div>
                
                <div class="input-group mt-3">
                    <input type="submit" name="register" placeholder="Expense Expense" required class="btn btn-sm btn-dark bg-dark text-white" value="Create Account">

                    <input type="reset" name="reset"  class="btn btn-sm btn-dark bg-danger ms-3 text-white" value="Reset">
                </div>

                <div class="input-group mt-3">
             
                 <b>Already have an account ? </b> <a href="login.php">Login here</a>
                </div>


</form>
            </div>
         </div>
            
            </div>
        </div>
    </div>
</body>
</html>

