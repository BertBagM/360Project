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
        
        
        
        <form method="post" action="cashoutFunc.php">
            <fieldset> <legend><h3>Deposit </h3></legend>
                <p><strong>How much would you like to withdraw?</strong><br/>
                    <input type="text" name="cashout"/></p>
                 
                <p><input type="submit" name="submit" value="cashout"/></p>
                
            </fieldset>
    </body>
</html>
