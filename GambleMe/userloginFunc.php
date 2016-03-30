


<?php

session_start();
$name = filter_input(INPUT_POST, 'username');
$pass = filter_input(INPUT_POST, 'password');


// MAKES CONNECTION
$servername = "localhost";
$username = "root";
$password = "abcde3";
$dbname = "360Project";

$conn = new mysqli($servername, $username, $password, $dbname);
// CHECKS CONNECTIOn
if ($conn->connect_error) {
    print('lolfail');
    die("Connection failed: " . $conn->connect_error);
}


// QUERIES

$sql = "SELECT * FROM accounts WHERE username = '$name' AND password = '$pass';";
$result = $conn->query($sql);


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($result->num_rows == 1) {

    $balancesql = "SELECT balance FROM accounts WHERE username = '$name';";

    if($name == "admin"){
        $_SESSION["admin"] = TRUE;
    }else{
         $_SESSION["admin"] = FALSE;
    }
    $_SESSION["user"] = $name;

    $balanceResult = $conn->query($balancesql);
    $_SESSION["balance"] = $balanceResult->fetch_array()['balance'];

    header('Location: index.php');
} else {


    echo'Wrong username or password combination';
    header('Location: userlogin.php');
}
?>