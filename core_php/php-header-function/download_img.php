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

    <div class="container p-5 mt-5">

        <h3 class="w-50 p-2 mx-auto bg-info text-white">Download images</h3>
        <div class="card w-50 mx-auto p-5">
           <div class="card-header bg-primary text-white">php download images</div>
           <div class="card-body">

            <form method="post" action="download-img.php">

            <img src="images/man.jpg" class="img-fluid">
           <button type="submit" name="dwn" class="btn btn-block w-50 mx-auto mt-3 btn-danger">Download Here</button> 


            </form>


            
            <form method="post" action="download-pdf.php">

               <button type="submit" name="dwn" class="btn btn-block w-7 mx-auto mt-3 btn-danger">Download your brochures >></button> 
    
    
                </form>

           </div>
   </div>

</body>
</html>