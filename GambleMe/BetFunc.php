<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();


$name = $_SESSION["user"];
$amount = filter_input(INPUT_POST, 'amount');
$winner = filter_input(INPUT_POST, 'winner');
$home = filter_input(INPUT_POST, 'Home');
$visitor = filter_input(INPUT_POST, 'Visitor');
$date = filter_input(INPUT_POST, 'date');

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
// creates a bet
$sql = "INSERT INTO currentBets (username, winner,home, visitor, amount,date) VALUES('$name','$winner','$home','$visitor',$amount, '$date');";
$conn->query($sql);

// subtracts from current balance
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$balancesql = "SELECT balance FROM accounts WHERE username = '$name';";

$balanceResult = $conn->query($balancesql);
$initialBalance = $balanceResult->fetch_array()['balance'];

$newBalance = $initialBalance - $amount;


$newbalancesql = "UPDATE accounts SET balance = $newBalance where username = '$name';";
$conn->query($newbalancesql);
header('Location: index.php');
?>