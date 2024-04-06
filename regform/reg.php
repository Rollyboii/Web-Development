<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>


     <h1> Registration Form </h1>

     <form action= "process.php" method= "POST">
        
             <labal>Name: </label> </br>
             <input type="text" name="nm" required></p>

             <labal>Email: </label> </br>
             <input type="email" name="email" required></p>

             <labal>Password: </label> </br>
             <input type="password" name="pass" required></p>

             <labal>Phone Number: </label> </br>
             <input type="text" name="pn" required></p>
             
             <input type="submit" name="reg_button" value="Register">
     </form>

     <p><a href="index.php"> CLick here to Login!</a></p>


<body>
    
</body>
</html>