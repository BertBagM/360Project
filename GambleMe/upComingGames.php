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
$date = "04/07/2016";

//the date is a place holder
$sql = "SELECT * FROM upcomingGames WHERE winner = 'unplayed' AND date >$date;";

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



    // beggining of the update form
    echo 'Winner:';
    echo '
      <form method="post" action="updateGamesFunc.php">
      
  <input type="hidden" name="home" value="'; echo"$Home";echo'">
  
  <input type="hidden" name="visitor" value="'; echo"$Visitor";echo'">

<select name="winner">
<option value="unfinished">unfinished</option>     ';


    echo'
<option value="';
    echo"$Home";
    echo'">';
    echo"$Home</option>";

    echo'
<option value="';
    echo"$Visitor";
    echo'">';
    echo"$Visitor</option>";


    echo'</select>
                <p><input type="submit" name="submit" value="update"/></p>
                
    ';



    echo('</li>');
}

$gamesLeftSqlQuery = "SELECT count(*) FROM upcomingGames WHERE winner ='unplayed';";
$gamesLeftResult = $conn->query($gamesLeftSqlQuery);
$GamesLeft = $gamesLeftResult->fetch_array()['count(*)'];
echo'Games Left in Season ';
echo "$GamesLeft`";
echo('</ul>');
?>