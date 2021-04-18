<?php
session_start();
require_once "../php/database.php";

if(!isset($_SESSION["email"])) {
    header("location: index.html");
} else {
    $email = $_SESSION["email"];
    
    $fname = "SELECT * FROM user WHERE email = '$email'";
    $fname_result = $sql->query($fname);
    if($fname_result->num_rows > 0) {
        while($user = $fname_result->fetch_assoc()) {
            $user_fname = $user["fname"];
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/css/dashboard.css">
</head>
<body>
    <div class="main">
        <div class="dashboard">
            <div>
            <p>Hello, <?php echo $user_fname ?></p>
            <p>Welcome to my website</p>
            <button onclick="window.location='../php/logOut.php';">Log Out</button>
        </div>
        </div>
    </div>
</body>
</html>