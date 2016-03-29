<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();


$name = $_SESSION["user"];
$amount = filter_input(INPUT_POST, 'amount');
$winner = filter_input(INPUT_POST, 'winner');
$loser = filter_input(INPUT_POST, 'loser');

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
$sql = "INSERT INTO currentBets (username, winner,loser, amount) VALUES('$name','$winner','$loser',$amount);";
$conn->query($sql);


header('Location: index.php');
?>