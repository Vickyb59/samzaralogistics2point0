<?php
$servername = "localhost";
// Enter your MySQL username below(default=root)
$username = "root";
// Enter your MySQL password below
$password = "";
$dbname = "samzaral_db";

// Create connection
$conne = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conne->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conne->connect_error);
}
?>