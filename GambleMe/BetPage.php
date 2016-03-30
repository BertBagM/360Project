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

        <br>
        
        <div id="content">
            <br>
            <br>
            <ul >
            <legend><h3>Place Bet</h3></legend>

            <form method="post" action="BetFunc.php">
                <p><strong>Sport</strong><br/>
                    <select name="sport">
                        <option value="hockey">Hockey</option>
                        <option value="football">FootBall</option>
                        <option value="basketball">BasketBall</option>

                    </select></p>
                <p><strong>Winning Team:</strong><br/>
                    <select name="winner">
                        <option value="Anaheim">Anaheim</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Boston">Boston</option>
                        <option value="Buffalo">Buffalo</option>
                        <option value="Calgary">Calgary</option>
                        <option value="Carolina">Carolina</option>
                        <option value="Chicago">Chicago</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Columbus">Columbus</option>
                        <option value="Dallas">Dallas</option>
                        <option value="Detroit">Detroit</option>
                        <option value="Edmonton">Edmonton</option>
                        <option value="Florida">Florida</option>
                        <option value="Los Angeles">Los Angeles</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Montreal">Montreal</option>
                        <option value="Nashville">Nashville</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New York">New York</option>
                        <option value="Ottawa">Ottawa</option>
                        <option value="Philadelphia">Philadelphia</option>  
                        <option value="Pittsburgh">Pittsburgh </option>
                        <option value="San Jose">San Jose</option>
                        <option value="St. Louis">St. Louis</option>
                        <option value="Tampa Bay">Tampa Bay</option>
                        <option value="Toronto">Toronto</option>
                        <option value="Vancouver">Vancouver</option>
                        <option value="Washington">Washington</option>
                        <option value="Winnipeg">Winnipeg</option>         
                    </select></p>
                <p><strong>Losing Team:</strong><br/>
                    <select name="loser">
                        <option value="Anaheim">Anaheim</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Boston">Boston</option>
                        <option value="Buffalo">Buffalo</option>
                        <option value="Calgary">Calgary</option>
                        <option value="Carolina">Carolina</option>
                        <option value="Chicago">Chicago</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Columbus">Columbus</option>
                        <option value="Dallas">Dallas</option>
                        <option value="Detroit">Detroit</option>
                        <option value="Edmonton">Edmonton</option>
                        <option value="Florida">Florida</option>
                        <option value="Los Angeles">Los Angeles</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Montreal">Montreal</option>
                        <option value="Nashville">Nashville</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New York">New York</option>
                        <option value="Ottawa">Ottawa</option>
                        <option value="Philadelphia">Philadelphia</option>                        
                        <option value="Pittsburgh">Pittsburgh </option>
                        <option value="San Jose">San Jose</option>
                        <option value="St. Louis">St. Louis</option>
                        <option value="Tampa Bay">Tampa Bay</option>
                        <option value="Toronto">Toronto</option>
                        <option value="Vancouver">Vancouver</option>
                        <option value="Washington">Washington</option>
                        <option value="Winnipeg">Winnipeg</option>         
                    </select></p>
                <p><strong>Amount:</strong><br/>
                    <input type="amount" name="amount"/></p>

                <p><strong>Date: MM/DD/YYYY</strong><br/>
                    <input type="datet" name="date"/></p>
                
                <p><input type="submit" name="submit" value="Place Bet!"/></p>

            </form>
        </ul>
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
