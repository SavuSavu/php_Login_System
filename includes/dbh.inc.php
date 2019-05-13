<?php


// !!!Change the Location_Of_The_DB with the ip od the DB if is not on the same server as the website
// !!!If the DB is on the same server change Location_Of_The_DB with "localhost@

// !!!Username with your username of the DB

// !!!Password with the DB password 

// !!!NameOfDB with the name of the DB
$connection=mysqli_connect("Location_Of_The_DB", "Username", "Password", "NameOfDB");


// if the connection fails output the error to the page 

if(mysqli_connect_errno())
{
    echo "Error: could not connect to database: " .mysqli_connect_error();


}



?>