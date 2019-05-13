<?php
session_start(); 

// If the user did not press the Login button on the login.php page send him back there

if(!isset($_POST['login-submit']))  
{
    header("Location: ../login.php " .$email);
    exit();
}
require 'dbh.inc.php'; 

// Get the data from the login.php page and use "escape_string" to be safe in case of sql injection
$uidUser = mysqli_real_escape_string($connection, $_POST['uid']);
$password = mysqli_real_escape_string($connection, $_POST['pwd']);

// Check if username and password are empty
if (empty($uidUser) || empty($password))
{

    header("Location: ../login.php?error=username_password_empty");
    exit();
}

// Sql query to see if there is any user with that username 

// !!! Change uidUsers column and users tabel with your own   

$sql = "SELECT * FROM users WHERE uidUsers='$uidUser'";
$result= mysqli_query($connection, $sql);
$resultCheck = mysqli_num_rows($result);

// Check is there is any user with that username
if ($resultCheck < 1)   // username dose not exit 
{
    header("Location: ../login.php?error=wrong_username");
    exit();
}

// Assign the row from db to the $row veriable 
if ($row = mysqli_fetch_assoc($result))
{
    // Check the passwword with the database 
    $pwdCheck = password_verify($password, $row['pwdUsers']);   
    // Cf the password dose not match take the user to the login page 
    if (!$pwdCheck)
    {
        header("Location: ../login.php?error=error1");
        exit();
    }
    else 
    {   // Start sesion with the user id and username
        session_start();    
        $_SESSION['idUSER'] = $row['idUsers'];
        $_SESSION['uidUSER'] = $row['uidUsers'];
     
        // Send the user to the home.php page with the message success
        header("Location: ../home.php?login=success");
        exit();


    }
}

// If there is any error send the user back to the login.php page with message error2 (unknown error) 

header("Location: ../login.php?error=error2");
exit();
