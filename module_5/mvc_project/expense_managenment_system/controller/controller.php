<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent :: __construct();
        // create account
        if(isset($_POST["adduser"]))
        {
            $tmp_name=$_FILES["img"]["tmp_name"];
            $type=$_FILES["img"]["type"];
            $size=$_FILES["img"]["size"]/1024;
            $path="uploads/users/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);
            $em=$_POST["email"];
            $pass=$_POST["password"];
            $name=$_POST["name"];
            $phone=$_POST["phone"];
            $add=$_POST["address"];
            $data=array("photo"=>$path,"email"=>$em,"password"=>$pass,"name"=>$name,"phone"=>$phone,"address"=>$add);
            $chk=$this->insalldata('tbl_user',$data);
            if($chk)
            {

                echo "<script>
                alert('Thanks for create Users data')
                window.location='./login';
                </script>";

            }

            else 
            {
                echo "<script>
                alert('Oh somthing went wrong try again')
                window.location='./register';
                </script>";

            }
        } 
        // login as users
        if(isset($_POST["add_login"]))
        {
           
            $em=$_POST["email"];
            $pass=$_POST["pass"];
            $chk=$this->loginuser('tbl_user',$em,$pass);
            if($chk)
            {

                echo "<script>
                alert('You are logged In Successfully')
                window.location='./';
                </script>";

            }

            else 
            {
                echo "<script>
                alert('Your email and Password are Incorrect')
                window.location='./login';
                </script>";

            }
        } 
        // add expense
        // logout here
        if(isset($_GET["lg"]))
        {

            $chk=$this->logout();
            if($chk)
            {

                echo "<script>
                alert('You are Logout successfully')
                window.location='./';
                </script>";

            }


        }

        // load your template view create routing
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("content.php");
                    break;
                case '/login':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("login.php");
                    break;
                case '/register':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("register.php");
                    break;

                    break;
                case '/add-expense':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addexpense.php");
                    break;
            default: 
                require_once("index.php");
                require_once("header.php");
                require_once("sidebar.php");
                require_once("404.php");   
                break; 
            }
        }
    }

}
$obj=new controller;
?>