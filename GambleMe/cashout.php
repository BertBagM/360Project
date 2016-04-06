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
            
        
        
        <form method="post" action="cashoutFunc.php">
            <fieldset> <legend><h3 style="font-size: 32px; color: #2B1B17;font-weight:bold">Cashout</h3></legend>
                <h1 style="font-size: 40px; color: gold;font-weight:bold; text-indent: 42px"> Congratulations!</h1>
                <p style="font-size: 22px; color: #2B1B17;font-weight:bold;  text-indent: 5px"><strong>How much would you like to withdraw?</strong><br/>
                    <input type="text" name="cashout" style="text-indent: 10px"/></p>
                 
                <p style="font-size: 22px; color: #2B1B17;font-weight:bold; text-indent: 10px"><input type="submit" name="submit" value="Cashout"/></p>
                
            </fieldset>
    </body>
</html>
