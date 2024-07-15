<?php 

session_start();

$host="localhost";

$user="root";

$password="";

$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);


if($data===false)
{
	die("connection error");
}

    if(isset($_POST['signup']))

    {
        $data_username=$_POST['username'];
        $data_phone=$_POST['phone'];
        $data_email=$_POST['email'];
        $data_usertype=$_POST['usertype'];
        $data_password=$_POST['password'];

        $sql="INSERT INTO user(username,phone,email,usertype,password) VALUES ('$data_username', '$data_phone', '$data_email', '$data_usertype', '$data_password')";

        $result=mysqli_query($data,$sql);

        if ($result)
        {
        $_SESSION['message']="Successfully registered, [proceed to login]";

        header("Location:../login.php");
        }

        else{
            echo "Application Failed";
        }
    }

?>