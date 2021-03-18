<?php
$dbname="leesty";
$dbuser="root";
$dbpass="";
$dblink="localhost";
$conn=mysqli_connect($dblink,$dbuser,$dbpass,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>