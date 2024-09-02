<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['uname'];
        $gmail = $_POST['email'];
        $password = $_POST['password'];
        
        if(!empty($gmail) && !empty($password) && !is_numeric($gmail)){

            $query = "insert into user (username, email, password) values ('$username', '$gmail', '$password')";
            
            mysqli_query($con, $query);
            
            echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
            }
            else
            {
            echo "<script type='text/javascript'> alert('Please Enter some VALID Information')</script>";   
            }
    }
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="body">
    <div class="signup">
        <h1>Sign Up</h1>
        <form action="" method="POST">
            <input type="text" name="uname" class="input" required placeholder="username"><br>
            <input type="email" name="email" class="input" placeholder="Email"><br>
            <input type="password" name="password" class="input" required placeholder="password"><br>
            <input type="submit" value="Submit" class="button"><br>
        </form>
        <p>Already have an account? <a href="login.php">Log In</a></p>
    </div>
</body>
</html>
