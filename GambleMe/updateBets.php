<?php

session_start();


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

$sql = "SELECT * FROM currentBets WHERE username = '$name';";


$betList = $conn->query($sql);

// iteraties through each current bet to see if there is something to be done
while ($row = $betList->fetch_assoc()) {
    $home = $row["home"];
    $visitor = $row["visitor"];
    $winner = $row["winner"];
    $amount = $row["amount"];


    // get game output

    $findWinnerSql = "SELECT winner from upcomingGames where home = '$home' and visitor = '$visitor';";
    $winnerResult = $conn->query($findWinnerSql);
    echo $findWinnerSql . '<br>';
    $Winner = $winnerResult->fetch_array()['winner'];
    $unplayed = "unplayed";
    echo $Winner . '<br>';
    if ($Winner == $unplayed) {
        echo'not played, ignore<br>';
    } else {

        $removeBetSql = "DELETE FROM currentBets WHERE home = '$home' and visitor ='$visitor';";
        $conn->query($removeBetSql);
        // delete that bet
        if ($Winner == $winner) {

            $balancesql = "SELECT balance FROM accounts WHERE username = '$name';";

            $balanceResult = $conn->query($balancesql);
            $initialBalance = $balanceResult->fetch_array()['balance'];

            $newBalance = $initialBalance + $amount + $amount;


            $newbalancesql = "UPDATE accounts SET balance = $newBalance where username = '$name';";

            $conn->query($newbalancesql);

            echo 'YOU WIN!<br>';
        } else {



            $balancesql = "SELECT balance FROM accounts WHERE username = 'admin';";

            $balanceResult = $conn->query($balancesql);
            $initialBalance = $balanceResult->fetch_array()['balance'];

            $newBalance = $initialBalance + $amount;


            $newbalancesql = "UPDATE accounts SET balance = $newBalance where username = 'admin';";

            $conn->query($newbalancesql);

            echo 'You Lose! <br>';
        }
    }
}


header('Location: index.php');
