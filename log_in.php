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
$usernames = pg_fetch_row($result);
$entries = pg_fetch_assoc($result);


if($entries) {
    
    $username = $usernames[0];
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['logged_in'] = 1;
    
    header('Location: thankyou.html');
}else{
    header('Location: elements.html');
}



?>