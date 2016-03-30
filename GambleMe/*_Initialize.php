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

//QUERIES
$dropUpcoming = "DROP TABLE IF EXISTS upcomingGames;";

$dropHockeyTeams ="DROP TABLE IF EXISTS hockeyTeams;";

$dropCurrentBets ="DROP TABLE IF EXISTS currentBets;";

$dropAccounts ="DROP TABLE IF EXISTS accounts;";    


$conn = new mysqli($servername, $username, $password, $dbname);
// CHECKS CONNECTIOn
if ($conn->connect_error) {
    print('lolfail');
    die("Connection failed: " . $conn->connect_error);
}
// DROPS TABLES
$conn->query($dropUpcoming);
echo('Dropped Upcoming Games <br>');
$conn->query($dropHockeyTeams);
echo('Dropped Hockey Teams <br>');
$conn->query($dropCurrentBets );
echo('Dropped Current Bets<br>');
$conn->query($dropAccounts );
echo('Dropped Accounts<br><br>');



$createAccounts = "CREATE TABLE IF NOT EXISTS accounts(accountId int NOT NULL AUTO_INCREMENT, username varchar(30) UNIQUE, password varchar(30), balance float(9,0), accountType varchar(30) , PRIMARY KEY(accountID));";

$createCurrentBets = "CREATE TABLE IF NOT EXISTS currentBets(username varchar(30), winner varchar(30), loser varchar(30), amount float(9,2),date varchar(30));";

$createHockeyTeams= "CREATE TABLE IF NOT EXISTS hockeyTeams(city varchar(30), team varchar(30), image varChar(30));";

$createUpcomingGames ="CREATE TABLE IF NOT EXISTS upcomingGames(home varchar(30), visitors varchar(30), date varchar(30), winner varchar(30));";

$conn->query($createAccounts);
echo('Created Accounts Table.. <br> ');

$conn->query($createCurrentBets);
echo('Created Current Bets Table.. <br> ');

$conn->query($createHockeyTeams);
echo('Created Hockeyteam Table..<br> ');
                                 
$conn->query($createUpcomingGames);
echo('Created UpcomingGamesTable.. <br><br>');                  
                        

$hockeyCities = array("Anaheim", "Arizona", "Boston","Buffalo","Calgary","Carolina", "Chicago" , "Colorado" , "Columbus", "Dallas", "Detroit", "Edmonton", "Florida","Los Angeles" ,"Minnesota" , "Montreal" , "Nashville", "New Jersey" , "New York", "Ottawa", "Philadelphia", "Pittsburgh" ,"San Jose", "St. Louis", "Tampa Bay", "Toronto", "Vancouver","Washington", "Winnipeg");
$hockeyTeams = array("Ducks", "Coyotes", "Bruins", "Sabres" , "Flames", "Hurricanes", "Blackhawks", "Avalanche", "Blue Jackets", "Stars", "Red Wings", "Oilers", "Panthers", "Kings", "Wild", "Canadiens", "Predators", "Devils", "Rangers", "Senators", "Flyers", "Penguins", "Sharks", "Blues", "Lightning", "Maple Leafs", "Canucks", "Capitals", "Jets");

$cityCount = count($hockeyCities);

// hockey City Team
for ($x = 0; $x < $cityCount; $x++) {    
    $conn->query("INSERT INTO hockeyTeams (city, team,image) VALUES('$hockeyCities[$x]', '$hockeyTeams[$x]', '$hockeyTeams[$x].gif' );");
  
} 

echo 'Loaded HockeyTeam Table.. <br>';



$accountNames = array("Bert", "Ross", "cs360User");
$accountPasswords = array("abcde3", "abcde3", "letmein");

$accountCount = count($accountNames);


for ($x = 0; $x < $accountCount; $x++) {    
    $conn->query("INSERT INTO accounts(username, password,balance, accountType) VALUES('$accountNames[$x]', '$accountPasswords[$x]', 1000.00, 'user' );");
  
} 

echo 'Loaded Brett/Ross/cs360user accounts .. <br>';

$loadAdminAccount = "INSERT INTO accounts(username, password,balance, accountType) VALUES('admin', 'admin', 1000.00, 'admin' );";

$conn->query($loadAdminAccount);

echo 'Loaded Admin Account .. <br>';

$upcomingHome = array("Boston","New Jersey","Philadelphia","Washington","Carolina","Ottawa","Nashville","Chicago","Dallas","Calgary","Los Angeles","San Jose","Buffalo","Boston","New York","Philadelphia","Colorado","Minnesota","Montreal","Floria","New Jersey","Columbus","St. Louis","Dallas","Vancouver","Los Angeles","San Jose","Washington");
$upcomingAway = array("Detroit","Tampa Bay","Toronto","Pittsburgh","Montreal","Florida","Arizona","St. Louis","Colorado","Vancouver","Anaheim","Winnipeg","Columbus","Ottawa","Detroit","Pittsburgh","Anaheim","Calgary","Tampa Bay","Carolina","Toronto","Chicago","Washington","Nashville","Edmonton","Winnipeg","Arizona","Anaheim");
$upcomingDate = array("04/07/2016","04/07/2016","04/07/2016","04/07/2016","04/07/2016","04/07/2016","04/07/2016","04/07/2016","04/07/2016","04/07/2016","04/07/2016","04/07/2016","04/08/2016","04/09/2016","04/09/2016","04/09/2016","04/09/2016","04/09/2016","04/09/2016","04/09/2016","04/09/2016","04/09/2016","04/09/2016","04/09/2016","04/09/2016","04/09/2016","04/09/2016","04/10/2016");





        
$upcomingGameCount = count($upcomingHome);


for ($x = 0; $x < $upcomingGameCount; $x++) {    
    $conn->query("INSERT INTO upcomingGames(home,visitors,date) VALUES ('$upcomingHome[$x]', '$upcomingAway[$x]','$upcomingDate[$x]');");
  
} 

echo 'Loaded Upcoming Games .. <br>';



$currentBet1 = "INSERT INTO currentBets (username, winner, loser,date, amount) VALUES('Bert', 'Vancouver', 'Calgary', '04/07/2016', 100.00);";

$currentBet2 = "INSERT INTO currentBets (username, winner, loser,date ,amount) VALUES('Ross', 'Vancouver', 'Calgary','04/07/2016', 100.00);";

$currentBet3 = "INSERT INTO currentBets (username, winner, loser,date ,amount) VALUES('cs360user', 'Vancouver', 'Calgary', '04/07/2016',100.00);";

$conn->query($currentBet1);
$conn->query($currentBet2);
$conn->query($currentBet3);

echo 'Loaded Example Bets .. <br>';
?>