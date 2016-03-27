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




        <?php
        session_start();

        include_once('NavBar.php');
        //include_once('SlideShow.php');
        ?>
        <P> <-- current bets table </p>


        <fieldset> <legend><h3>Place Bet</h3></legend>

            <form method="post" action="BetFunc.php">
                <p><strong>Sport</strong><br/>
                    <select name="sport">
                        <option value="hockey">Hockey</option>
                        <option value="football">FootBall</option>
                        <option value="basketball">BasketBall</option>
                    
                    </select></p>
                <p><strong>Winning Team (need dropDown):</strong><br/>
                    <select name="winner">
                        <option value="hockey">Hockey</option>
                        <option value="football">FootBall</option>
                        <option value="basketball">BasketBall</option>
                    
                    </select></p></p>
                <p><strong>Losing Team:</strong><br/>
                    <input type="text" name="loser"/></p>
                <p><strong>Amount:</strong><br/>
                    <input type="amount" name="amount"/></p>

                <p><input type="submit" name="submit" value="Place Bet!"/></p>

            </form>

        </fieldset>





        <?php
        session_start();
        ?>
    </body>
</html>
