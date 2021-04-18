<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$sql = new mysqli($hostname, $username, $password, $dbname);
if(mysqli_connect_error()) {
    die("connection failed: ".mysqli_connect_error());
} 

?>