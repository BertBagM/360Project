<?php

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

if ($_SESSION["user"] == NULL) {

    echo('<br>');
    echo('<ul><h1>Upcoming Games</h1>');
    echo('<li>');

    echo('<h1>Sign in or create a an account to start winning now!</h1>');

    echo('</li>');

    echo'Potential Winnings : unlimited';
    echo('</ul>');
} else {

    $name = $_SESSION["user"];

// prints
    $sql = "SELECT * FROM currentBets WHERE username = '$name';";


    $betList = $conn->query($sql);
    $total = 0;

    echo('<br>');
    echo('<ul><h1>Current Bets</h1>');
    while ($row = $betList->fetch_assoc()) {
        echo('<li>');
        $winner = $row["winner"];
        $getTeamW = "SELECT image FROM hockeyTeams WHERE city ='$winner';";
        $imageResult = $conn->query($getTeamW);
        $WinnerImage = $imageResult->fetch_array()['image'];
        $getTeamWName = "SELECT team FROM hockeyTeams WHERE city ='$winner';";
        $TeamWResult = $conn->query($getTeamWName);
        $WinnerTeamName = $TeamWResult->fetch_array()['team'];

        echo'<img src="images/HockeyLogos/';
        echo"$WinnerImage";
        echo'">';

        echo " VS. ";


        $loser = $row["loser"];

        $getTeamL = "SELECT image FROM hockeyTeams WHERE city ='$loser';";
        $imageLResult = $conn->query($getTeamL);

        $LoserImage = $imageLResult->fetch_array()['image'];

        echo'<img src="images/HockeyLogos/';
        echo"$LoserImage";
        echo'"><br>';


        echo $row["winner"];

        echo " VS ";
        echo $row["loser"];

        echo '<br>Betting on The ';
        echo $WinnerTeamName;
        echo ' for $';
        echo $row["amount"];

        $total = $total + $row["amount"];
        echo "<br>";
        echo "<br>";

        echo('</li>');
    }

    echo'Potential Winnings : $ ';
    echo "$total";
    echo('</ul>');
}
?>