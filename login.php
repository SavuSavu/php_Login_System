<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-SAV.FM</title>

    <!-- Create error messages -->
    <?php
        if (isset($_GET['error']))
        {
            if($_GET['error'] == "username_password_empty")
            {
                echo "<script>";

                echo "alert(' Username or/and password field/s can not be empty');";
        
                echo "</script>";
            }
            if($_GET['error'] == "wrong_username")
            {
                echo "<script>";

                echo "alert(' Please check your username again ');";
        
                echo "</script>";

            }
            if($_GET['error'] == "error1")
            {
                echo "<script>";

                echo "alert(' Please try again ');";
        
                echo "</script>";

            }



        }


    ?>



</head>
<body>
    <div class="showcase">

        <header>
            <nav>
                <ul>
                <li class= "logo" ><a href="index.php">SAV.FM</a></li>
                <li><a href="">  </a></li>
                <li><a href="signup.php">Register</a></li>
                
                </ul>
            
            
            
            </nav>

        </header>  


        <!-- login form -->

        <div class="loginRegisterForm">
            <h1>Welcome Back!</h1>
            <form NAME="form1"  action="includes/login.inc.php" method="post" onsubmit="return myCheck()">
                   
                <input type="text" name="uid" placeholder="Username" required><br>
                  
                <input type="password" name="pwd" placeholder="Password" required><br><br>

                <button class="logSign" type="Submit" name="login-submit" >Login!</button>
            </form>
        </div>



    </div> 



    
</body>
</html>