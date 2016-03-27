

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

print('success');
// QUERIES
$sql = "INSERT INTO login (username, password, balance) VALUES('$name',' $pass', 0.00);";


$conn->query($sql);
header('Location: userlogin.html');
?>