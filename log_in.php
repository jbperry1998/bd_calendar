<?php
session_start();

$db_connection = pg_connect("host=ec2-174-129-227-80.compute-1.amazonaws.com
 port=5432 dbname=dbvs140f5cqkp1 user=zdlwovjrekrdar password=ea1a662a2d7df06996a35f5aee8b2ac1d852cbe10af9af3c5cc60b41ee0d21f5
");
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//password probably is incorrect column name
$query = "SELECT username FROM site_users WHERE password='$hashed_password' AND email='$email'"; 
$result = pg_query($db_connection,$query);
$user = pg_fetch_assoc($result);


if($user) {
    
    $_SESSION['username'] = "";
    $_SESSION['email'] = $email;
    $_SESSION['logged_in'] = "logged_in";
    
    //change to homepage for members
    header('Location: Member_Home_Page.php');
}else{
    header('Location: bad_login.html');
}



?>