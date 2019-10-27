<?php
session_start();

$db_connection = pg_connect("host=ec2-174-129-227-80.compute-1.amazonaws.com
 port=5432 dbname=dbvs140f5cqkp1 user=zdlwovjrekrdar password=ea1a662a2d7df06996a35f5aee8b2ac1d852cbe10af9af3c5cc60b41ee0d21f5
");
$_SESSION['email'] = $_POST['email'];
$_SESSION['product'] = $_POST['product'];

$email = $_SESSION['email'];
$product = $_SESSION['product'];

$query = "SELECT* FROM site_users WHERE email='$email'";
$result = pg_query($db_connection,$query);
$user = pg_fetch_assoc($result);


if($user) {
    $sales_query = "SELECT* FROM sales WHERE Email='$email'";
    $result = pg_query($db_connection,$sales_query);
    $in = pg_fetch_assoc($result);
    //fill in location of bitwallet and do correct things based on state (product)
    
    if(strcmp( $product, "book" ) == 0){
        /*if($in){
            $query_1 = "UPDATE sales SET CookBook = 1 WHERE Email='$email'";
        }else{
            $query_1 = "INSERT INTO sales VALUES ('$email',1,0)";
        }
        $result1 = pg_query($db_connection,$query_1);*/
        header('Location: cookbook.html'); //change
    }else if(strcmp( $product, "subscription" ) == 0){
        /*if($in){
            $query_1 = "UPDATE sales SET Subscription = 1 WHERE Email='$email'";
        }else{
            $query_1 = "INSERT INTO sales VALUES ('$email',0,1)";
        }
        $result1 = pg_query($db_connection,$query_1);*/
        header('Location: subscription.html'); //change
    }else{
        //some sort of error for a non-existant product
        header('Location: index.html');
    }
    
    
}else{
    header('Location: user_not_found.html');
}



?>