<?php 
if(isset($_POST["dwn"]))
{
    $path="images/man.jpg";
    header("Content-Type: application/image");
    header("Content-Disposition: attachment; filename=\"".basename($path)."\"");
    readfile($path);
}

?>