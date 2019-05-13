<?php
session_start();

// If the user did not press the submit button on the signup.php page send him back there
if (!isset($_POST['signup-submit'])) 
{
    header("Location: ../signup.php?error");
    exit();
}



require 'dbh.inc.php';    

// Get the data from the signup.php page and use "escape_string" to be safe in case of sql injection
$username =mysqli_real_escape_string($connection, $_POST['uid']);
$email =mysqli_real_escape_string($connection, $_POST['mail']);
$password =mysqli_real_escape_string($connection, $_POST['pwd']);
$passwordRepeat =mysqli_real_escape_string($connection, $_POST['pwd-repeat']);

// If one or more of the fields are empty send back to Signup page whith the error 
if (empty($username) || empty($email) || empty($password) ||empty($passwordRepeat))
{
    header("Location: ../signup.php?error=emptyfield");
    exit();

}

// The username is allwo to have just those characters  
if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) 
{
    header("Location: ../signup.php?error=invaliduid&email= " .$email);
    exit();
}

// If password and passwordRepeat dose not match send the user back to signup page 
if($password !== $passwordRepeat)
{
    header("Location: ../signup.php?error=passwordcheck&email= " .$email."&uid=".$username);
    exit();
}

// Sql query to see if there is any user with that username 

// !!! Change uidUsers column and users tabel with your own   
$sql = "SELECT uidUsers FROM users WHERE uidUsers='$username'";
$result= mysqli_query($connection, $sql);
$resultCheck = mysqli_num_rows($result);

// Check if username is taken 
if($resultCheck > 0)
{
    header("Location: ../signup.php?error=usertaken");
    exit();
}

// Hash the password
$hashedPwd= password_hash($password, PASSWORD_DEFAULT);

// Sql query to insert the data to table

// !!!Change uidUsers, emailUsers and pwdUsers acording to your DB
$sql = "INSERT INTO users(uidUsers, emailUsers, pwdUsers) VALUES('$username', '$email', '$hashedPwd')";

// Run the sql statement 
$newresult = mysqli_query($connection, $sql);

// If everything is alright send the user to the index.php page
if($newresult)
{

    header("Location: ../index.php?account=success");
    exit();
}
else
{
    header("Location: ../signup.php?error=sqlerror2");
    exit();

}




