<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();

$home = filter_input(INPUT_POST, 'home');
$visitor = filter_input(INPUT_POST, 'visitor');
$winner = filter_input(INPUT_POST, 'winner');

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


$updateGamesql = "UPDATE upcomingGames SET winner = $winner  where home = $home AND visitor = $visitor;";

// QUERIES

echo "$updateGamesql";


//$conn->query($updateGamesql);
//header('Location: index.php');
?>