<?php

session_start();
$deposit = filter_input(INPUT_POST, 'deposit');

// MAKES CONNECTION
$servername = "localhost";
$username = "root";
$password = "abcde3";
$dbname = "360Project";


$dropBets 
$dropHockey
$dropLogin
$createBrettRossAdminDan


$conn = new mysqli($servername, $username, $password, $dbname);
// CHECKS CONNECTIOn
if ($conn->connect_error) {
    print('lolfail');
    die("Connection failed: " . $conn->connect_error);
}
// drop tables;
// QUERIES
$loginSql = "CREATE TABLE login( username varchar(30), password varchar(30), balance float (9,2));";

$conn->query($loginSql);
echo('made Login table');



  
                                 
                        
                        
                        
                        
                        
                        
                       
                        
                       
                        
                        
                        
                       
                       // FUCK THE ISLANDERS New York I
// Loads hockey Teams     
$conn->query("DROP TABLE hockey;");
echo('<br>dropped Hockey Table');
$createHockeyTable = "CREATE TABLE hockey (city varchar(30), team varchar(30));";
$conn->query($createHockeyTable);
echo('<br>created Hockey Table');

$hockeyCities = array("Anaheim", "Arizona", "Boston","Buffalo","Calgary","Carolina", "Chicago" , "Colorado" , "Columbus", "Dallas", "Detroit", "Edmonton", "Florida","Los Angeles" ,"Minnesota" , "Montreal" , "Nashville", "New Jersey" , "New York", "Ottawa", "Philadelphia", "Pittsburgh" ,"San Jose", "St. Louis", "Tampa Bay", "Toronto", "Vancouver","Washington", "Winnipeg");
$hockeyTeams = array("Ducks", "Coyotes", "Bruins", "Sabres" , "Flames", "Hurricanes", "Blackhawks", "Avalanche", "Blue Jackets", "Stars", "Red Wings", "Oilers", "Panthers", "Kings", "Wild", "Canadiens", "Predators", "Devils", "Rangers", "Senators", "Flyers", "Penguins", "Sharks", "Blues", "Lightning", "Maple Leafs", "Canucks", "Capitals", "Jets");

$cityCount = count($hockeyCities);
$hockeyCount = count($hockeyTeams);

// hockey City Team
for ($x = 0; $x < $cityCount; $x++) {    
    $conn->query("INSERT INTO hockey (city, team) VALUES('$hockeyCities[$x]', '$hockeyTeams[$x]');");
echo("INSERT INTO hockey (city, team) VALUES('$hockeyCities[$x]', '$hockeyTeams[$x]');");
    
} 

?>