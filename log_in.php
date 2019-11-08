<?php
session_start();

$db_connection = pg_connect("host=ec2-174-129-227-80.compute-1.amazonaws.com
 port=5432 dbname=dbvs140f5cqkp1 user=zdlwovjrekrdar password=ea1a662a2d7df06996a35f5aee8b2ac1d852cbe10af9af3c5cc60b41ee0d21f5
");
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//password='$hashed_password' AND
$query = "SELECT * FROM site_users WHERE email='$email'"; 
$result = pg_query($db_connection,$query);
if (!$result) {
    header('Location: bad_login.html');
}

while ($row = pg_fetch_row($result)) {
    $hp = $row[8];
    if(strcmp( $hp, $hashed_password ) == 0){
        $_SESSION['username'] = "";
        $_SESSION['email'] = $email;
        $_SESSION['logged_in'] = "logged_in";
        
        //change to homepage for members
        header('Location: Member_Home_Page.php');
    }else{
        echo $hp;
        echo "\n";
        echo $hashed_password;
        //header('Location: bad_login.html');
    }
}

// if(!$user) {
    
//     header('Location: bad_login.html');
    
// }else{
    
//     $_SESSION['username'] = "";
//     $_SESSION['email'] = $email;
//     $_SESSION['logged_in'] = "logged_in";
    
//     //change to homepage for members
//     header('Location: Member_Home_Page.php');
// }



?>