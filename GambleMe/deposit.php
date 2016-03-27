<!DOCTYPE html>
<html>
    <head>
        <title>Deposit</title>
    </head>
    <body>
        
        <?php
            session_start();

            include_once('NavBar.php');
            //include_once('SlideShow.php');
            ?>
        
        
        
        <form method="post" action="depositFunc.php">
            <fieldset> <legend><h3>Deposit </h3></legend>
                <p><strong>How much would you like to deposit?</strong><br/>
                    <input type="text" name="deposit"/></p>
                 
                <p><input type="submit" name="submit" value="deposit"/></p>
                
            </fieldset>
    </body>
</html>
