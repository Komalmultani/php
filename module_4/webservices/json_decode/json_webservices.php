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
    
    <form method="post">
   
        select country : <select name="country">

          <option value="">-select country-</option>
          <?php 
           $url="http://country.io/names.json";
           $data=file_get_contents($url);
           $decode=json_decode($data,true);
           foreach($decode as $value)
           {
          ?>
          <option value="<?php echo $value;?>"><?php echo $value;?></option>
          <?php 
          
           }
           ?>
        </select>   


    </form>
</body>
</html>