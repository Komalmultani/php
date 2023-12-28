<?php 
if(isset($_POST["dwn"]))
{
    $path="images/broch.pdf";
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=\"".basename($path)."\"");
    readfile($path);
}

?>