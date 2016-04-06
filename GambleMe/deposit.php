<!DOCTYPE html>
<html>
    <head>
        <title>Cashout</title>
    </head>
    <body>
        
        <?php
            session_start();

            include_once('NavBar.php');
            //include_once('SlideShow.php');
            ?>
        
        </br>
        </br>
        
        <form method="post" action="depositFunc.php">
            <fieldset> <legend><h3 style="font-size: 32px; color: #2B1B17;font-weight:bold">Deposit </h3></legend>
                <h1 style="font-size: 40px; color: gold;font-weight:bold; text-indent: 104px"> Welcome!</h1>
                <p style="font-size: 22px; color: #2B1B17;font-weight:bold;  text-indent: 5px"><strong>How much would you like to deposit?</strong><br/>
                    <input type="text" name="deposit"/></p>
                 
                <p style="font-size: 22px; color: #2B1B17;font-weight:bold; text-indent: 10px"><input type="submit" name="submit" value="Deposit"/></p>
                
            </fieldset>
    </body>
</html>
