<?php 
$file=fopen("ajax.txt","r+");
echo fread($file,65);

?>