<?php

include 'connect.php';
session_start();
if(!isset($_SESSION['username']))
{
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome Page</title>

    <h2>Welcome <?php echo $_SESSION['username']?></h2>
    <button><a href="logout.php">Logout</a></button>
</head>
<body>
    
</body>
</html>