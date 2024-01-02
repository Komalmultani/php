<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        //load your template  view using routing
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case  '/':
                    require_once("index.php");
                    
                    require_once("navbar.php");
                    require_once("content.php");
                    require_once("footer.php");
  
                break;

                case '/admin':
                    require_once("index.php");
                    
                    require_once('admin-login.php');
                    
                    break;

                case '/admin-signup':
                        require_once("index.php");
                        require_once("admin-signup.php");
                        break;

                case '/candidate':
                    require_once("index.php");
                    require_once('candidate-login.php');
                    break;
                
                case '/candidate-signup':
                        require_once("index.php");
                        require_once('candidate-signup.php');
                        break;

                     case '/compinies':
                            require_once("index.php");
                            require_once('company-login.php');
                            break;
                    
                            case '/compinies-signup':
                                require_once("index.php");
                                require_once('company-signup.php');
                                break;
                    
                            



                    default:
                require_once("index.php");
                require_once("404.php");


            }

        }
    }

}
$obj=new controller;

?>