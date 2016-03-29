<?php

session_start();
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

if($_SESSION["user"] == NULL){
    
}else{
    
    $name = $_SESSION["user"];

// prints
$sql = "SELECT * FROM Bets WHERE username = '$name';";


$betList = $conn->query($sql);


echo('<ul><li><h1>Current Bets</h1></li>');
while ($row = $betList->fetch_assoc()) {
    echo('<li>');

   

            $team1= $row["winner"];
            $team2= $row["loser"];
     echo'<img src="images/HockeyLogos/$team1.gif" style="width:304px;height:228px;">';

    echo '<p>image /use winner row to find filepath</p>';
    echo $row["winner"];

    echo " VS. ";
    echo $row["loser"];

    echo "<br><p>ON</P>";
    echo $row["gameDate"];
    echo "<br><p>FOR </P>";
    echo $row["amount"];

    echo "<br>";
    echo "<br>";

    echo('</li>');
}

echo('</ul>');
}

?>