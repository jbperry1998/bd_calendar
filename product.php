<?php
session_start();

$db_connection = pg_connect("host=ec2-174-129-227-80.compute-1.amazonaws.com
 port=5432 dbname=dbvs140f5cqkp1 user=zdlwovjrekrdar password=ea1a662a2d7df06996a35f5aee8b2ac1d852cbe10af9af3c5cc60b41ee0d21f5
");
//$_SESSION['email'] = $_POST['email'];
//$_SESSION['product'] = $_POST['product'];

//$email = $_SESSION['email'];
//$product = $_SESSION['product'];

$login_status = $_Session['logged_in'];

//$query = "SELECT* FROM site_users WHERE email='$email'";
//$result = pg_query($db_connection,$query);
//$user = pg_fetch_assoc($result);


if($login_status = 1) {
    
    $_SESSION['product'] = $_POST['product'];
    $product = $_SESSION['product'];
    $sales_query = "SELECT* FROM sales WHERE Email='$email'";
    $result = pg_query($db_connection,$sales_query);
    $in = pg_fetch_assoc($result);
    
    if(strcmp( $product, "book" ) == 0){
        header('Location: cookbook.html');
    }else if(strcmp( $product, "subscription" ) == 0){
        header('Location: subscription.html');
    }else{
        //some sort of error for a non-existant product
        header('Location: index.html');
    }
    
    
}else{
    header('Location: user_not_found.html');
}



?>