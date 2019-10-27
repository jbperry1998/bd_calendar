<?php
//session_start();

$db_connection = pg_connect("host=ec2-174-129-227-80.compute-1.amazonaws.com
 port=5432 dbname=dbvs140f5cqkp1 user=zdlwovjrekrdar password=ea1a662a2d7df06996a35f5aee8b2ac1d852cbe10af9af3c5cc60b41ee0d21f5
");
$email = $_POST['email'];
$product = $_POST['product'];

$query = "SELECT* FROM site_users WHERE email='$email'";
$result = pg_query($db_connection,$query);
$user = pg_fetch_assoc($result);


if(!$user) {
    //fill in location of bitwallet and do correct things based on state (product)
    header('Location: thankyou.html');
}else{
    header('Location: user_exists.html');
}



?>