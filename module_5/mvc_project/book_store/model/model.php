<?php 
class model 
{
    public $conn="";
    public function __construct()
    {
        
        try 
        {
            $this->conn=new mysqli("localhost","root","","bookstore_db");
            echo "success";

        }
        catch(Exception $e)
        {
            die(mysqli_error($this->conn));

        }
    }
    // create a member function for insert all data
    public function insertalldata($table,$data)
    {
        $column=array_keys($data);
        $column1=implode(",",$column);
        $value=array_values($data);
        $value1=implode("','",$value);
        $insert="insert into $table($column1) values('$value1')";
        $exe=mysqli_query($this->conn,$insert);
        return $exe;   
    }

    //create a member function for fetch  all data and disply index page

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

    
}


?>