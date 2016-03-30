

<?php

session_start();
$name = filter_input(INPUT_POST, 'username');
$pass = filter_input(INPUT_POST, 'password');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
$sql = "INSERT INTO accounts (username, password, balance, accountType) VALUES('$name',' $pass', 0.00, 'user');";
$conn->query($sql);
header('Location: userlogin.php');
?>