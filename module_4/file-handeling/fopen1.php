<?php 
$file=fopen("ajax.txt","r") or die('file does not exist');
//echo $file;
if($file)
{
    echo "file opened successfully";
}
else 
{
    echo "does not have file";
}
?>