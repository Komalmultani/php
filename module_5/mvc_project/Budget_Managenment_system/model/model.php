<?php 
class model 
{
    public $conn="";
    public function __construct()
    {
        
        try 
        {
            $this->conn=new mysqli("localhost","root","","expense_db");
            echo "success";

        }
        catch(Exception $e)
        {
            die(mysqli_error($this->conn));

        }
    }

    
}


?>