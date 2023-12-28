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
     function fulladdress()
     {
        echo "Company Name :Tops technology pvt ltd"."<br>"."Company Address : 150 feet ring road aditya<br> complex 1st floor  near indiara circle <br> above sbi bank rajkot-36005";
     }  
    ?>
    <h1>My office address is :</h1>
    <address>
        <p><?php fulladdress() ?></p>
    </address>
    
</body>
</html>