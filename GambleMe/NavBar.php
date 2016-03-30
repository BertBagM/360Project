<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Brett McLaren - Personal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="vendor/stylesheets/bootstrap.min.css">
        <link rel="stylesheet" href="stylesheets/main.css">

    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header navbar-left">
                    <a class="navbar-brand" href="index.php"<span>Home</span>
                    </a>
                </div>

                <?php
                session_start();
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);



                if ($_SESSION["user"] == NULL) {
                    echo('<div class="navbar-header navbar-right">
                    <a class="navbar-brand" href="userlogin.php">  <span>LogIn</span>
                    </a>
                </div>
                <div class="navbar-header navbar-right">
                    <a class="navbar-brand" href="usersignup.php">  <span>Sign up</span>
                    </a>
                </div>');
                } else {

                    $name = $_SESSION["user"];

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

                    if ($_SESSION["admin"] == TRUE) {
                        
                    } else {
                        echo('<div class="navbar-header navbar-left">
                    <a class="navbar-brand" href="BetPage.php">  <span>Place Bet</span>
                    </a>
                </div>
               ');
                    }



                    $balancesql = "SELECT balance FROM accounts WHERE username = '$name';";

                    $balanceResult = $conn->query($balancesql);
                    $balance = $balanceResult->fetch_array()['balance'];

                    echo('<div class="navbar-header navbar-right">
                    <a class="navbar-brand" href="usersignout.php">  <span>Sign Out</span>
                    </a>
                </div>
                <div class="navbar-header navbar-right">
                    <a class="navbar-brand">  <span>Balance $: ');
                    echo("$balance");
                    echo('</span>
                    </a>
                </div>

                <div class="navbar-header navbar-right">
                    <a class="navbar-brand" <span>');
                    echo("$name");
                    echo('</span>
                    </a>
                </div>'
                    );

                    echo('<div class="navbar-header navbar-right">
                    <a class="navbar-brand" href="deposit.php">  <span>Deposit</span>
                    </a>
                </div>
                            <div class="navbar-header navbar-right">
                    <a class="navbar-brand" href="cashout.php">  <span>Cashout</span>
                    </a>
                </div>'
                    );
                }
                ?>





            </div>
        </nav>

        <br>


    </body>
</html>
