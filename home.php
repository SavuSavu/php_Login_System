<?php 
require 'includes/dbh.inc.php'; 
session_start();

// Check if there was created a seasion variable If not send the user back to index.php page
if(!isset($_SESSION ['uidUSER']))
{
    header("Location: index.php");
}
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

    <?php // create an alert greeting the user 
        echo "<script>";

        echo "alert(' Hello ".$_SESSION ['uidUSER'].", Welcome back!');";

        echo "</script>";
    ?>



</head>