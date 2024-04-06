<?php
    include "conn.php";
    session_start();

    //this code is for registration
     if(isset($_POST['reg_button'])){
     
        $name=$_POST['nm'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $pn=$_POST['pn'];

        $insertusers=mysqli_query($conn, "INSERT INTO users 
        VALUES('0','$name','$email','$pass','$pn')");

        if($insertusers==true){ 
             ?>
            <script>
                alert("Your Registration was Succesful!");
                window.location.href="index.php";
                </script>
            <?php
 
        }else{
            ?>
            <script>
                alert("Error Registration\ntry Again!");
                window.location.href="reg.php";
                </script>
            <?php
        
        }
      

     }  // this is the closing of registration


     //this code is for login !

     if(isset($_POST['login'])){

        $email=$_POST['login_email'];

        $pass=$_POST['login_pass'];

        $check=mysqli_query($conn, "SELECT * FROM  users 
        WHERE email='$email' AND password='$pass' ");

        $num=mysqli_num_rows($check);

        if($num >=1 ){
                
            $_SESSION['email']=$email;
            ?>
            <script>
                alert("Account Accepted! Welcome Users!");
                window.location.href="userhome.php";
                </script>
            <?php
         
        }else{
            ?>
            <script>
                alert("email or password not found!");
                window.location.href="index.php";
                </script>
            <?php
        }
     }
     





?>