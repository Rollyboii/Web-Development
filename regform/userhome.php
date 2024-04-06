<?php
     include "conn.php";
     session_start();

    $e=$_SESSION['email'];
    
    $getname=mysqli_query($conn, "SELECT * FROM users WHERE email='$e' ");
    while($row=mysqli_fetch_object($getname)){

     $name= $row -> name;

    }


    

    

    
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>
</head>
<body>
    
<a href="userhome.php"> HOME </a>
<a href="userhome.php"> GALLERY </a>
<a href="userhome.php"> GROUP PROJECT </a>
<a href="userhome.php"> CREATE POST </a>
<a href="userhome.php"> UPDATE PROFILE </a>
<a href="index.php"> LOGOUT </a>





</body>
</html>