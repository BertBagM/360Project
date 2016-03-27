<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>



        <?php
        session_start();
        $name = filter_input(INPUT_POST, 'username');
        $pass = filter_input(INPUT_POST, 'password');


// MAKES CONNECTION
        $servername = "localhost";
        $username = "root";
        $password = "abcde3";
        $dbname = "360Project";

        $conn = new mysqli($servername, $username, $password, $dbname);
// CHECKS CONNECTIOn
        if ($conn->connect_error) {
            print('lolfail');
            die("Connection failed: " . $conn->connect_error);
        }

        print('success');
// QUERIES
        $sql = "INSERT INTO login (username, password, balance) VALUES('$name',' $pass', 0.00);";


        $conn->query($sql);
        header('Location: userlogin.html');
        ?>
    </body>
</html>
