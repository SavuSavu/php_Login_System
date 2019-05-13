<!-- If the user is on this page destroy the session variables and send the user to the index.php page -->
<?php
session_start();
session_unset();
session_destroy();

header("Location: ../index.php");

?>