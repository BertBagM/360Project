<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>

        <?php
        session_start();

        include_once('NavBar.php');
        //include_once('SlideShow.php');
        ?>
        <fieldset> <legend><h3> Login Form </h3></legend>

            <form method="post" action="userloginFunc.php">
                <p><strong>Username:</strong><br/>
                    <input type="text" name="username"/></p>
                <p><strong>Password:</strong><br/>
                    <input type="password" name="password"/></p>
                <p><input type="submit" name="submit" value="login"/></p>

            </form><form method="post" action="signup.html">
                <p><input type="submit" name="submit" value="signup"/></p>
            </form>

        </fieldset>
    </body>
</html>
