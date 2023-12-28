<?php 

require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent::__construct();

        // store a data from  us form
        if(isset($_POST["create"]))
        {

            $bookid=$_POST["bookid"];
            $bookname=$_POST["bookname"];
            $bookpublicer=$_POST["bookpublicer"];
            $price=$_POST["price"];
            
        
            $data=array("bookid"=>$bookid,"bookname"=>$bookname,"bookpublicer"=>$bookpublicer,"price"=>$price);
            $chk=$this->insertalldata('books',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks your order is comfired')
                window.location='index.php';
                </script>";
            }
        }

        // fetch data
        $data = $this->selectalldata('books');
          
          
             // view template create routing
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                    case '/':
                        require_once("index.php");
                        require_once("content.php");
                         
                
                       break;
  
                         default:
                      
                      require_once("404.php");
                    
                      break;
       
                 }
           }
      }
  }
  $obj=new controller;
  ?>