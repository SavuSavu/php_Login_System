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
    <title>Home-SAV.FM</title>
    <!-- alerts -->
    <?php
        if (isset($_GET['account']))
        {
            if($_GET['account'] == "success")
            {
                echo "<script>";

                echo "alert(' You created an acount succesfuly');";
        
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

                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                    

                </ul>
            </nav>
        </header>

        <div class="section-main container">
            <!--<img src="/Images/showcase.jpg" alt="">-->
            <h1>Welcome</h1>  
            <h2>Your music takes center stage.</h2>      
            <p class="hide-on-small">With our app your music experience will reach a new best. Discover a new and easier way to find and store all of your favorite songs. Create and personalize your playlists and let the fun begin. Your music is one click away. 
                   <a class="jump" href="signup.php">Join us today!</a> </p> 
        </div> 

        
    </div>


    
    <div class="deliminator">
        <h1>Start your 30 day trial now.</h1>
        <h2>Cancel anytime.</h2>
        <div class="btn1"><a href="signup.php"><button >  Start Free Trial</button></a></div>
        
    </div>
        <div class="pricing">

            
        </div>
         <footer>
            <p>SAV.FM, Copyright &copy; 2018</p>

        </footer>
    

        <div id="foo"></div>

     


</body>
</html>