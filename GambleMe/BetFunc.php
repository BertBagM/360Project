<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();


$name = $_SESSION["user"];
$amount = filter_input(INPUT_POST, 'amount');
$winner = filter_input(INPUT_POST, 'winner');
$loser = filter_input(INPUT_POST, 'loser');
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
$sql = "INSERT INTO currentBets (username, winner,loser, amount,date) VALUES('$name','$winner','$loser',$amount, '$date');";
$conn->query($sql);


header('Location: index.php');
?>