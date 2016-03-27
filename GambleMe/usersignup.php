<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
    </head>
    <body>
       <?php
            session_start();

            include_once('NavBar.php');
            //include_once('SlideShow.php');
            ?>
        
        <form method="post" action="usersignup.php">
            <fieldset> <legend><h3> Sign up </h3></legend>
                <p><strong>Pick a username:</strong><br/>
                    <input type="text" name="username"/></p>
               
                
                <p><strong>Pick a password:</strong><br/>
                    <input type="password" name="password"/></p>
                
                
                <p><input type="submit" name="submit" value="signup"/></p>
                
            </fieldset>
    </body>
</html>
