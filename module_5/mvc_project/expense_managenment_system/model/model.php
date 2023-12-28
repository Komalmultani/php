<?php
class model 
{
   public $connection="";
   public function __construct()
   {
    session_start();
    try
    {
    $this->connection=new mysqli("localhost","root","","ourexpensedb");
    }
    catch(Exception $e)
    {
        die(mysqli_error($this->connection));
    }    
} 
 // create an member function for insert all data
 public function insalldata($table,$data)
 {

    $column=array_keys($data);
    $columns=implode(",",$column);
    $value=array_values($data);
    $values=implode("','",$value);  
    $insert="insert into $table($columns) values ('$values')";
    $exe=mysqli_query($this->connection,$insert);
    return $exe; 
 }

  // create an member function for login as users
  public function loginuser($table,$em,$pass)
  {
 
     $select="select * from $table where email='$em' and password='$pass'";
     $exe=mysqli_query($this->connection,$select);
     $fetch=mysqli_fetch_array($exe);
     $num_rows=mysqli_num_rows($exe);
     if($num_rows==1)
     {
     $_SESSION["userid"]=$fetch["userid"];
     $_SESSION["email"]=$fetch["email"];
     $_SESSION["name"]=$fetch["name"];   
     return true; 
     }
     else 
     {
        return false;
     }
  }
// create a member function for logout
     public function logout()
     {
        unset($_SESSION["userid"]);
        unset($_SESSION["email"]);
        unset($_SESSION["name"]);
        session_destroy();
        return true;
     }

} 
?>