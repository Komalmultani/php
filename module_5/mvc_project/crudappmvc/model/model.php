<?php 
class model 
{
    public $conn="";
    public function __construct()
    {
        session_start();
        try 
        {
            $this->conn=new mysqli("localhost","root","","stdapp");
            // echo "success";

        }
        catch(Exception $e)
        {
            die(mysqli_error($this->conn));

        }
    }

    // create a new member function for add data
    public function insalldata($table,$data)
    {
        $column=array_keys($data);
        $column1=implode(",",$column);  
        $value=array_values($data);
        $value1=implode("','",$value);  
        
        $insert="insert into $table($column1) value('$value1')";
        $exe=mysqli_query($this->conn,$insert);
        return $exe;
    }

    // create a member function for selectalldata
    public function selectalldata($table)
    {

        $select="select * from $table";
        $exe=mysqli_query($this->conn,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    // create a member function for select student who is logged in
    public function selectstudentdata($table,$column,$id)
    {

        $select="select * from $table where $column='$id'";
        $exe=mysqli_query($this->conn,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

      // create a member function for manage profile who is logged in
      public function selectprofile($table,$table1,$table2,$table3,$where,$where1,$where2,$column,$id)
      {
         $select="select * from $table join $table1 on $where join  $table2 on $where1 join $table3 on $where2 where $column='$id'";

          $exe=mysqli_query($this->conn,$select);
          while($fetch=mysqli_fetch_array($exe))
          {
              $arr[]=$fetch;
          }
          return $arr;
      }

       // create a member function for manage profile who is logged in
       public function singlecardmange($table,$table1,$table2,$where,$where1,$column,$column1,$readid,$id)
       {
         $select="select * from $table join $table1 on $where join  $table2 on $where1 where $table.$column='$id' and $column1='$readid'";
 
           $exe=mysqli_query($this->conn,$select);
           while($fetch=mysqli_fetch_array($exe))
           {
               $arr[]=$fetch;
           }
           return $arr;
       }
 
    //create a member function for update card data
    public function updcarddata($table,$name,$stdid,$phone,$staffid,$address,$date,$column,$readid)

    {
        $upd="update $table set name='$name',studentid='$stdid',phone='$phone',staffid='$staffid',address='$address',added_date='$date' where $column='$readid'";
        $exe=mysqli_query($this->conn,$upd);
        return $exe;
    }

    // create a delete data 
    public function delldata($table,$id)
    {
        $column=array_keys($id);
        $column1=implode(",",$column);  
        $value=array_values($id);
        $value1=implode("','",$value);  
        $del="delete from $table where $column1='$value1'";
        $exe=mysqli_query($this->conn,$del);
        return $exe;
    }

    // create a member function for change password 
    public function chngpassword($table,$opass,$npass,$cpass,$column,$id)
    {
        $select="select password from $table where $column='$id'";
        $exe=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($exe);
        $pass=$fetch["password"];

        if($pass==$opass && $npass==$cpass)
        {
            $upd="update $table set password='$npass' where $column='$id'";
            $exe=mysqli_query($this->conn,$upd);
            return $exe;
            
        }
        else 
        {
            return false;
        }
    }

       // create a member function for select that card who is activated
       public function selectactivatedcrd($table,$column,$id)
       {
   
           $select="select * from $table where $column='$id'"; 
           $exe=mysqli_query($this->conn,$select);
           while($fetch=mysqli_fetch_array($exe))
           {
               $arr[]=$fetch;
           }
           return $arr;
       }


       
       // create a member function for manage or count card   who is activated
       public function selectcountdata($table,$column,$column1,$id)
       {
   
           $select="select count($column) as total from $table where $column1='$id'"; 
           $exe=mysqli_query($this->conn,$select);
           while($fetch=mysqli_fetch_array($exe))
           {
               $arr[]=$fetch;
           }
           return $arr;
       }

    // create a member function for login 
    public function login($table,$email,$pass)
    {
        $select="select * from $table where email='$email' and password='$pass'";
        $exe=mysqli_query($this->conn,$select);
        $fetch=mysqli_fetch_array($exe);
        $num_rows=mysqli_num_rows($exe);
        if($num_rows==1)
        {
            $_SESSION["studentid"]=$fetch["studentid"];
            $_SESSION["name"]=$fetch["studentname"];
            $_SESSION["email"]=$fetch["email"];
            return true;
        }
        else 
        {
            return false;
        }
    }
    // create logout here

    public function logout()
    {
        unset($_SESSION["studentid"]);
        unset($_SESSION["name"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }

}
?>