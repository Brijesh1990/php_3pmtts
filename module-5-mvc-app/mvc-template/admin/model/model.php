<?php 
class AdminModel 
{
    public $con="";
    public function __construct()
    {

        try{
            $this->con=new mysqli("localhost","root","","flydb");
            //  echo "connected successfully with database";
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->con,$e));
        }

    }
    // create a member function for insert all data 
    public function inseralldata($table,$data)
    {
        $key=array_keys($data);
        $key1=implode(",", $key);

        $value=array_values($data);
        $value1=implode("','", $value);

        // insert query
        $query="INSERT INTO $table($key1) VALUES('$value1')";
        $result=mysqli_query($this->con,$query);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    // create a member function for showalldata($table)
    public function showalldata($table)
    {

        $select="select * from $table";
        $query=mysqli_query($this->con,$select);
        while($fetch=mysqli_fetch_array($query))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
}



?>