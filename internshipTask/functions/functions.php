<?php 
require_once("config.php");
session_start();

class Functions
{

    public function __construct()
    {

		$connect=new Config();

		$this->db=$connect->connection();
				date_default_timezone_set("Asia/Kolkata");

    }

    public function insert_user($name,$username,$password)
    {

        $res1 = $this->db->query("SELECT * FROM users WHERE username = '$email' or password='$password'");
        if($res1->num_rows > 0)
        {
            return "student already exists";
        }
        else{
        $res2 = $this->db->query("INSERT INTO users(name,username,password) VALUES('$name','$username','$password')");
        echo "<script type='text/javascript'>alert('Student has been successfully added');</script>";
        echo "<script type='text/javascript'>window.location.href = 'http://localhost/internshipTask/index.php';</script>";
        mail($email,'new user welcome!','Congrats! you have joined');
        echo "after sending.......";
        return TRUE;
        }
    }

    public function login_user($email, $password)
    {

        $res = $this->db->query("SELECT * FROM users where username = '$email' and  password = '$password' ");
       
        if($res->num_rows > 0)
        {
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/internshipTask/successful.php';</script>";
        }
        else{
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/internshipTask/insert_user.php';</script>";
        }
        return TRUE;
        
    }

    

}
$functions = new Functions();