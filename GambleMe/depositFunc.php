<?php

session_start();
$deposit = filter_input(INPUT_POST, 'deposit');


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

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = $_SESSION["user"];

$balancesql = "SELECT balance FROM login WHERE username = '$name';";

$balanceResult = $conn->query($balancesql);
$initialBalance = $balanceResult->fetch_array()['balance'];

$newBalance = $initialBalance + $deposit;


$newbalancesql = "UPDATE login SET balance = $newBalance where username = '$name';";

$conn->query($newbalancesql);

header('Location: index.php');
?>