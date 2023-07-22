<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    if(isset($_POST['login']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
            
$sql="Select * from `data` where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
if($result)
{
    $num=mysqli_num_rows($result);
    // echo $num;
    if($num>0)
    {
        // echo "Login Successful";
        $_SESSION['username']=$username;
        header('location:welcome.php');
    }
}
    else{
            echo "Invalid Credentials";
        }
    }
}


        