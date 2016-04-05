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


// prints
    $sql = "SELECT * FROM upcomingGames;";    

    $GamesList = $conn->query($sql);

    echo('<br>');
    echo('<ul><h1>Games to Update</h1>');
    while ($row = $GamesList->fetch_assoc()) {
        echo('<li>');
        $Home = $row["home"];
        $getHomeLink = "SELECT image FROM hockeyTeams WHERE city ='$Home';";
        
        $HomeImageResult = $conn->query($getHomeLink);
        $HomeImage = $HomeImageResult->fetch_array()['image'];
        
        $getHomeTeamName = "SELECT team FROM hockeyTeams WHERE city ='$Home';";
        $HomeTeamResult = $conn->query($getHomeTeamName);
        $HomeTeamName = $HomeTeamResult->fetch_array()['team'];

        echo'<img src="images/HockeyLogos/';
        echo"$HomeImage";
        echo'">';

        echo " VS. ";

    $Visitor = $row["visitor"];
    $getVisitorLink = "SELECT image FROM hockeyTeams WHERE city ='$Visitor';";

    $VisitorImageResult = $conn->query($getVisitorLink);
    $VisitorImage = $VisitorImageResult->fetch_array()['image'];

    $getVisitorTeamName = "SELECT team FROM hockeyTeams WHERE city ='$Visitor';";
    $VisitorTeamResult = $conn->query($getVisitorTeamName);
    $VisitorTeamName = $VisitorTeamResult->fetch_array()['team'];

    echo'<img src="images/HockeyLogos/';
    echo"$VisitorImage";
    echo'">';

        echo "<br>";
        echo "<br>";

        echo('</li>');
    }

    echo'Games Left in Season ';
    echo "28";
    echo('</ul>');

?>