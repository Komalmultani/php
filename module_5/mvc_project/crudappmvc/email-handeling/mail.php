<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Create an instance; passing `true` enables exceptions
if(isset($_POST["send"]))
{
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$fnm=$_POST["fname"];
$lnm=$_POST["lname"];
$em=$_POST["email"];
$nm=$_POST["name"];
$mob=$_POST["phone"];
$msg=$_POST["message"];

$mail = new PHPMailer(true);
try 
{

  
        //Server settings
        $mail->SMTPDebug = false;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'bkpandey.pandey@gmail.com';                     //SMTP username
        $mail->Password   = 'fvwvpqoesqakzrrs';                               //SMTP password
        $mail->SMTPSecure ="TLS";            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom($_POST["email"], 'Send customer details');
        $mail->addAddress('bkpandey.pandey@gmail.com', 'Brijesh pandey');     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Customers detail email from contact Form';
        $mail->Body    = "<img src='https://desk.zoho.com/DocsDisplay?zgId=4241905&mode=inline&blockId=aqv2ed5eac9965df34702b3c63be595f20997' style='width:60%; height:200px'>"."<br>".
        "<b>"."FirstName :".$fnm."<br>"."LastName :".$lnm."<br>"."Email :".$em."<br>"."Name :".$nm."<br>"."Phone :". $mob."<br>"."Message :".$msg."<br>"."</b>";
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