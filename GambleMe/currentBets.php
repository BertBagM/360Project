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
    echo('<ul><h1>Current Bets</h1>');
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
        $home = $row["home"];
        $getHomeTeam = "SELECT image FROM hockeyTeams WHERE city ='$home';";
        $imageResult = $conn->query($getHomeTeam);
        $HomeImage = $imageResult->fetch_array()['image'];
        $getTeamHomeName = "SELECT team FROM hockeyTeams WHERE city ='$home';";
        $TeamHomeResult = $conn->query($getTeamHomeName);
        $HomeTeamName = $TeamHomeResult->fetch_array()['team'];

        echo'<img src="images/HockeyLogos/';
        echo"$HomeImage";
        echo'">';

        echo " VS. ";

        $visitor = $row["visitor"];
        $getVisitorTeam = "SELECT image FROM hockeyTeams WHERE city ='$visitor';";
        $imageResult = $conn->query($getVisitorTeam);
        $VisitorImage = $imageResult->fetch_array()['image'];
        $getTeamVisitorName = "SELECT team FROM hockeyTeams WHERE city ='$visitor';";
        $TeamVisitorResult = $conn->query($getTeamVisitorName);
        $VisitorTeamName = $TeamVisitorResult->fetch_array()['team'];

        echo'<img src="images/HockeyLogos/';
        echo"$VisitorImage";
        echo'"><br>';

        echo '<br>Betting on The ';
        
        $winner = $row["winner"];
        $getWinnerTeamNameSql = "SELECT team FROM hockeyTeams WHERE city = '$winner';";
        $WinningTeamResult = $conn->query($getWinnerTeamNameSql);
        $WinnerTeamName = $WinningTeamResult->fetch_array()['team'];
        
        
        echo $WinnerTeamName;
        echo ' for $';
        echo $row["amount"];
        
        
        

        $total = $total + $row["amount"];
        echo "<br>";
        echo "<br>";

        echo('</li>');
    }

    echo'Potential Winnings : $ ';
    echo "$total<br>";
    
    echo'<form action="updateBets.php" method="get"><br><button type="submit" action="usersignup.php" class="btn btn-success">Update Bets</button>
</form>';
    echo('</ul>');
    
}
?>