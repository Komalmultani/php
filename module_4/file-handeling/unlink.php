<?php 
$file="ajax.txt";
unlink($file);
if($file)
{
    echo "File deleted successfully";
}
?>