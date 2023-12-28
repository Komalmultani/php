<?php 
//error_reporting(0);
require_once("model/model.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class controller extends model 
{
    public function __construct()
    {
        parent::__construct();
        // activate card here
        if(isset($_POST["addcard"]))
        {
            date_default_timezone_set("Asia/calcutta");
            $nm=$_POST["name"];
            $stdid=$_POST["studentid"];
            $phone=$_POST["phone"];
            $stfid=$_POST["staffid"];
            $address=$_POST["address"];
            $added_date=date("d/m/Y h:i:s a");
            $data=array("name"=>$nm,"studentid"=>$stdid,"phone"=>$phone,"staffid"=>$stfid,"address"=>$address,"added_date"=>$added_date);
           
            $chk=$this->insalldata('tbl_addcard',$data);

            if($chk)
            {
                echo "<script>
                alert('You card successfully added for Activate')
                window.location='./';
                </script>";
            }

        }

        // fetch student activated card
        if(isset($_SESSION["studentid"]))
        {
            $id=$_SESSION["studentid"];
            $shwstudent=$this->selectstudentdata('tbl_student','studentid',$id);
        }
        // manage profile of students after logged in 
        if(isset($_SESSION["studentid"]))
        {
            $id=$_SESSION["studentid"];
            $mangeprof=$this->selectprofile('tbl_student','tbl_country','tbl_state','tbl_city','tbl_student.countryid=tbl_country.countryid','tbl_student.stateid=tbl_state.stateid','tbl_student.cityid=tbl_city.cityid','studentid',$id);


        }
        // // fetch student
        // $shwstudent=$this->selectalldata('tbl_student');
        //fetch staff
        $shwstaff=$this->selectalldata('tbl_staff');
        // show all card details who is activated card
        if(isset($_SESSION["studentid"]))
        {
        $id=$_SESSION["studentid"];    
        $shwcrd=$this->selectactivatedcrd('tbl_addcard','studentid',$id);
        }

        // card manage total count who is activaed card
        if(isset($_SESSION["studentid"]))
        {
        $id=$_SESSION["studentid"];    
        $totalcrd=$this-> selectcountdata('tbl_addcard','cardid','studentid',$id);
        }
          // add student  here
          if(isset($_POST["addstudent"]))
          {

            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
              date_default_timezone_set("Asia/calcutta");
              $nm=$_POST["name"];
              $email=$_POST["email"];
              $pass=$_POST["pass"];
              $phone=$_POST["phone"];
              $add=$_POST["address"];
              $cn=$_POST["country"];
              $st=$_POST["state"];
              $ct=$_POST["city"];
              $address=$_POST["address"];
              $added_date=date("d/m/Y h:i:s a");
              $data=array("studentname"=>$nm,"email"=>$email,"password"=>$pass,"phone"=>$phone,"address"=>$address,"countryid"=>$cn,"stateid"=>$st,"cityid"=>$ct,"added_date_time"=>$added_date);
              $chk=$this->insalldata('tbl_student',$data);


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
        $mail->setFrom("bkpandey.pandey@gmail.com", 'Welcome to student managements systems');
        $mail->addAddress($_POST["email"], 'hello');     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Thanks notes to create account with us';
        $mail->Body    = "<img src='https://desk.zoho.com/DocsDisplay?zgId=4241905&mode=inline&blockId=aqv2ed5eac9965df34702b3c63be595f20997' style='width:60%; height:200px'>"."<br>"."It’s only natural to show your human side behind the website and express your gratitude when people exhibit interest in your company.
        As a result, such emails can help boost brand loyalty across audiences automatically, without compromising personalization, whatsoever.";
       
    
        $mail->send();
        echo "<script>
        
        alert('Thanks for Create account check your email also')
        window.location='./login';
        </script>";
           }
          catch(Exception $e)
          {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }
}
        //  fetch country in add student form
        $cnlist=$this->selectalldata('tbl_country'); 
        //  fetch state in add student form
        $stlist=$this->selectalldata('tbl_state'); 
        //  fetch city in add student form
        $ctlist=$this->selectalldata('tbl_city'); 
        
        //   login here
        if(isset($_POST["add_login"]))
        {
            $email=$_POST["email"];
            $pass=$_POST["pass"];
            $chk=$this->login('tbl_student',$email,$pass);
            if($chk)
            {
                echo "<script>
                alert('You are Logged in  successfully')
                window.location='./';
                </script>";
            }
            else 
            {
                echo "<script>
                alert('Your email and password are Incorect try again')
                window.location='./login';
                </script>";
                
            }

        }

        // read single card data after login 
        if(isset($_GET['readid']))
        {
            $readid=$_GET['readid'];
            $id=$_SESSION['studentid'];

            $shwcarddata=$this->singlecardmange('tbl_addcard','tbl_student','tbl_staff','tbl_addcard.studentid=tbl_student.studentid','tbl_addcard.staffid=tbl_staff.staffid','studentid','cardid',$readid,$id);

        }

        
        // edit single card data after login 
        if(isset($_GET['readid']))
        {
            $readid=$_GET['readid'];
            $id=$_SESSION['studentid'];
            $shwcarddata=$this->singlecardmange('tbl_addcard','tbl_student','tbl_staff','tbl_addcard.studentid=tbl_student.studentid','tbl_addcard.staffid=tbl_staff.staffid','studentid','cardid',$readid,$id);
          

        }

        // update card details
        if(isset($_POST["updcard"]))
        {
            $readid=$_GET['readid'];
            $name=$_POST["name"];
            $stdid=$_SESSION["studentid"];
            $phone=$_POST["phone"];
            $staffid=$_POST["staffid"];
            $address=$_POST["address"];
            $date=$_POST["date"];
            $chk=$this->updcarddata('tbl_addcard',$name,$stdid,$phone,$staffid,$address,$date,'cardid',$readid);
           if($chk)
           {
            echo "<script>
            alert('Your Card details successfully updated')
            window.location='./';
            </script>";
           }
        }

        // delete card added by student 
        if(isset($_GET["delcardid"]))
        {
            $delid=$_GET["delcardid"];
            $id=array('cardid'=>$delid);
            $chk=$this->delldata('tbl_addcard',$id);

            if($chk)
            {
                echo "<script>
                alert('Your Card details successfully Deleted')
                window.location='./';
                </script>";
            }
        }

        // change password 
        if(isset($_POST["chngpassword"]))
        {
            $id=$_SESSION["studentid"];
            $opass=$_POST["opass"];
            $npass=$_POST["npass"];
            $cpass=$_POST["cpass"];
            $chk=$this->chngpassword('tbl_student',$opass,$npass,$cpass,'studentid',$id);
          
            if($chk)
            {
                unset($_SESSION["studentid"]);
                unset($_SESSION["name"]);
                unset($_SESSION["email"]);
                session_destroy();
                echo "<script>
                alert('Your Password  successfully Changed')
                window.location='./';
                </script>";
            }

            else
            {
                echo "<script>
                alert('Your Oldpassword, NewPassword and Confirmed password does not matched try again')
                window.location='changepasssword';
                </script>";
            }

        }
        // logout here

        if(isset($_GET["logout-here"]))
        {
            $chk=$this->logout();
            if($chk)
            {
                echo "<script>
                alert('You are  successfully logout')
                window.location='./';
                </script>";
            }
        }


        // load your template view using routing
        if(isset($_SERVER["PATH_INFO"]))
        {
             switch($_SERVER["PATH_INFO"])
             {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("content.php");
                    require_once("footer.php");
                    require_once("activatecard.php");
                    require_once("logout.php");
                    
                    break;
                case '/addstudent':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("addstudent.php");
                    require_once("footer.php");
                    require_once("activatecard.php");
                    require_once("logout.php");
                    
                    break;

                case '/login':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("login.php");
                    require_once("footer.php");
                    require_once("activatecard.php");
                    require_once("logout.php");

                case '/manageprofile':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("manageprofile.php");
                    require_once("footer.php");
                    require_once("activatecard.php");
                    require_once("logout.php");
                    
                    break;


                    
                case '/viewcard':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("readcard.php");
                    require_once("footer.php");
                    require_once("activatecard.php");
                    require_once("logout.php");
                    
                    break;

                    case '/changepasssword':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("changepassword.php");
                        require_once("footer.php");
                        require_once("activatecard.php");
                        require_once("logout.php");
                        
                        break;
    
                         
                case '/editcard':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("editcard.php");
                    require_once("footer.php");
                    require_once("activatecard.php");
                    require_once("logout.php");
                    
                    break;
                default:
                require_once("index.php");
                require_once("404.php");
                    break;
     
             }
        }
    }
}
$obj=new controller;
?>