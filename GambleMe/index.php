<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html><head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Brett McLaren - Personal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="vendor/stylesheets/bootstrap.min.css">
        <link rel="stylesheet" href="stylesheets/main.css">
        <style>iframe { vertical-align:bottom; } </style>

    </head>


    <body>



        <div id="content">
            <?php
            session_start();


            if (isset($_SESSION["user"])) {
                
            } else {
                $_SESSION["user"] = NULL;
            }



            include_once('NavBar.php');

            // all 3 cases, admin = true, false, empty i,e normal user
            if (isset($_SESSION["admin"])) {
                if ($_SESSION["admin"] == TRUE) {
                    include_once('upComingGames.php');
                } else {
                    include_once('currentBets.php');
                }
            } else {
                include_once('currentBets.php');
            }
            ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <iframe style="margin-top:-200px" align="right" width="75%" height="100%" marginwidth="50" frameborder="0" src="https://www.nhl.com/schedule" />
        </div>
    </body>
</html>
