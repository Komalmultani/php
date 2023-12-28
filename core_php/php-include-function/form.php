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
    include("include.php");
    ?>
    <center>
        <form method="post">
        Enter Number :<input type="text" name="num" placeholder="Enter Numbers *" required>
        <br><br>
        <input type="submit" name="sub" value="Submit">
        <br><br>
    </form>

    </center>
</body>
</html>