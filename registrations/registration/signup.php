<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    if(isset($_POST['signup']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

    // $sql="insert into `data` (username,password)values('$username','$password')";
    // $result=mysqli_query($con,$sql);
    // if($result)
    // {
    //     echo "Data inserted Successfully";
    // }
    // else{
    //     die(mysqli_error($con));
    // }
    
$sql="Select * from `data` where username='$username'";
$result=mysqli_query($con,$sql);
if($result)
{
    $num=mysqli_num_rows($result);
    // echo $num;
    if($num>0)
    {
        echo "User Already Exists";
    }
    else{
        if($password==$cpassword)
        {
            $sql="insert into `data` (username,password)values('$username','$password')";
            $result=mysqli_query($con,$sql);
             if($result)
             {
                 echo "SignUp Successful";
             }
        }
           
            else{
                echo "Password Didn't Match";
            }
            

    }
}


    }
}



?>