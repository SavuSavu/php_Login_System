<?php 
require 'includes/dbh.inc.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-Up-SAV.FM</title>


        <!-- Create error messages -->

    <?php
        if (isset($_GET['error']))
        {   
            if($_GET['error'] == "emptyfield")
            {
                echo "<script>";

                echo "alert(' Fields can not be empty');";
        
                echo "</script>";
            }
            if($_GET['error'] == "invaliduid")
            {
                echo "<script>";

                echo "alert('Invalid username ');";
        
                echo "</script>";

            }
            if($_GET['error'] == "passwordcheck")
            {
                echo "<script>";

                echo "alert('Password dose not match');";
        
                echo "</script>";

            }
            if($_GET['error'] == "usertaken")
            {
                echo "<script>";

                echo "alert('This username is taken \n Try someting else');";
        
                echo "</script>";

            }
            if($_GET['error'] == "usertaken")
            {
                echo "<script>";

                echo "alert('This username is taken \n Try someting else');";
        
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
                <li><a href="login.php">Login</a></li>
                
                </ul>
            
                
            
            </nav>

        </header>  

        <!--  Registration form  -->

        <div class="loginRegisterForm">
            <br>
            
            <h1>SIGN UP USING YOUR EMAIL ADDRESS</h1>
            <br>
            <br>
            <form NAME="form1"  action="includes/signup.inc.php" method="post" onsubmit="return myCheck()">
                   
                <input type="text" name="uid" placeholder="Username" required minlength=4><br>
                  
                <input type="email" name="mail" placeholder="E-mail" required><br>

                <input type="password" name="pwd" placeholder="Password" required minlength=8><br>
                
                <input type="password" name="pwd-repeat" placeholder="Repeat Password" required minlength=8><br><br>

                
                <button class="logSign" type="Submit" name="signup-submit" >SignUp</button>
            </form>

        </div>
        



    </div> 


    
</body>
</html>