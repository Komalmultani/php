<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST["send"]))
{
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$fnm=$_POST["firstname"];
$lnm=$_POST["lastname"];
$em=$_POST["email"];
$nm=$_POST["name"];
$mob=$_POST["phone"];
$msg=$_POST["message"];
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try 
{

  
        //Server settings
        $mail->SMTPDebug = false;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'komalmultani08@gmail.com';                     //SMTP username
        $mail->Password   = 'ujpq grrv bfxy ctcb';                               //SMTP password
        $mail->SMTPSecure ="TLS";            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom($_POST["email"], 'Send customer details');
        $mail->addAddress($em);     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Customers detail email from contact Form";
        $mail->Body  = "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSag09E8TEA6gcY7FhQjMyS-HW237srqfrq1fSmIJf7kw&s'><br><b>FirstName :$fnm<br> LastName :$lnm<br>Email :$em<br>Name :$nm<br>Phone :$mob<br>Message :$msg <br></b>";
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo "<script>
        
        alert('Thanks for contact with us we will soon contact with you')
        window.location='welcome.php';
        </script>";
}
catch(Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}
?>

