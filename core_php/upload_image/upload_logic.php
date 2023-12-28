<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</head>
<body>

    <?php 
     if(isset($_POST["upload"]))
     {
        //upload customers images
        $tmp_name=$_FILES["customerimg"]["tmp_name"];
        $type=$_FILES["customerimg"]["type"];
        $size=$_FILES["customerimg"]["size"]/1024;
        $path="uploads/customers/".$_FILES["customerimg"]["name"];
        move_uploaded_file($tmp_name,$path);


        //upload galleries images
        $tmp_name1=$_FILES["gallimg"]["tmp_name"];
        $type1=$_FILES["gallimg"]["type"];
        $size1=$_FILES["gallimg"]["size"]/1024;
        $path1="uploads/gallery/".$_FILES["gallimg"]["name"];
        move_uploaded_file($tmp_name1,$path1);

        
        //upload products images
        $tmp_name2=$_FILES["prodimg"]["tmp_name"];
        $type2=$_FILES["prodimg"]["type"];
        $size2=$_FILES["prodimg"]["size"]/1024;
        $path2="uploads/products/".$_FILES["prodimg"]["name"];
        move_uploaded_file($tmp_name2,$path2);

        echo "<div class='alert alert-success text-dark p-3 w-50 mx-auto'>
             <span><h3 align='center'>Your file uploaded successfully</h3>   
        </div>";
        header('refresh:5,showdata.php');

     } 


    ?>


</body>
</html>    