<?php 

require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent::__construct();
        
          
          
            {
                 switch($_SERVER["PATH_INFO"])
                 {
                    case '/':
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("content.php");
                        // require_once("login.php");
                        require_once("footer.php");
                
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