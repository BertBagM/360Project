<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" href="stylesheets/main.css">
    </head>
    <body>
       <?php
            session_start();

            include_once('NavBar.php');
            //include_once('SlideShow.php');
            echo('<br>');
            echo('<br>');
            
            ?>
        
        <form method="post" action="usersignupFunc.php">
            <fieldset> 
                <legend><h3 style="font-size: 32px; color: #2B1B17;font-weight:bold"> Sign up </h3></legend>
                <p style="font-size: 22px; color: #2B1B17;font-weight:bold"><strong>Pick a username:</strong><br/>
                    <input type="text" name="username"/></p>
               
                
                <p style="font-size: 22px; color: #2B1B17;font-weight:bold"><strong>Pick a password:</strong><br/>
                    <input type="password" name="password"/></p>
                
                
                <p style="font-size: 22px; color: #2B1B17;font-weight:bold"><input type="submit" name="submit" value="signup"/></p>
                
            </fieldset>
    </body>
</html>
