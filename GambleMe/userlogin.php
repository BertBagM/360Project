<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="stylesheets/main.css">
    </head>

    <body>

        <?php
        session_start();

        include_once('NavBar.php');
        //include_once('SlideShow.php');
        echo('<br>');
        ?>
        <fieldset> 

            <form method="post" action="userloginFunc.php">

                <legend><h3 style="font-size: 32px; color: #2B1B17;font-weight:bold"> Login</h3></legend>
                <p style="font-size: 22px; color: #2B1B17;font-weight:bold"><strong>Username:</strong><br/>
                    <input type="text" name="username"/></p>
                <p style="font-size: 22px; color: #2B1B17;font-weight:bold"><strong>Password:</strong><br/>
                    <input type="password" name="password"/></p>
                <p style="font-size: 22px; color: #2B1B17;font-weight:bold"><input type="submit" name="submit" value="login"/></p>

            </form><form method="post" action="usersignup.php">
                <p style="font-size: 22px; color: #2B1B17;font-weight:bold"><input type="submit" name="submit" value="signup"/></p>
            </form>

        </fieldset>
    </body>
</html>
