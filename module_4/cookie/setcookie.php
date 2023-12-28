<?php 
//setcookie(name, value, expire, path, domain, secure, httponly);
$cookiename="name";
$value="gautam";
setcookie($cookiename,$value);
if(isset($_COOKIE[$cookiename]))
{
    $_COOKIE[$cookiename];
    echo "set successfully";
}
else 
{
    echo "Not set";
}
?>