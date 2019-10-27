<?php
session_start();

$db_connection = pg_connect("host=ec2-174-129-227-80.compute-1.amazonaws.com
 port=5432 dbname=dbvs140f5cqkp1 user=zdlwovjrekrdar password=ea1a662a2d7df06996a35f5aee8b2ac1d852cbe10af9af3c5cc60b41ee0d21f5
");

$sales_query = "SELECT* FROM sales WHERE Email=" . $_SESSION['email'] . "";
$result = pg_query($db_connection, $sales_query);
$in = pg_fetch_assoc($result);
// fill in location of bitwallet and do correct things based on state (product)

if (strcmp($_SESSION['product'], "book") == 0) {
    if ($in) {
        $query_1 = "UPDATE sales SET CookBook = 1 WHERE Email=" . $_SESSION['email'] . "";
    } else {
        $query_1 = "INSERT INTO sales VALUES (" . $_SESSION['email'] . ",1,0)";
    }
    $result1 = pg_query($db_connection, $query_1);
    header('Location: thankyou_purchase.html'); // add email before this
} else if (strcmp($_SESSION['product'], "subscription") == 0) {
    if ($in) {
        $query_1 = "UPDATE sales SET Subscription = 1 WHERE Email=" . $_SESSION['email'] . "";
    } else {
        $query_1 = "INSERT INTO sales VALUES (" . $_SESSION['email'] . ",0,1)";
    }
    $result1 = pg_query($db_connection, $query_1);
    header('Location: thankyou_purchase.html'); // add email before this
} else {
    // some sort of error for a non-existant product
    header('Location: elements.html');
}

?>