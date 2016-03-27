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


// QUERIES

        $sql = "SELECT * FROM login WHERE username = '$name' AND password = '$pass';";
        $result = $conn->query($sql);


        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        if ($result -> num_rows ==1) {
            
            $balancesql = "SELECT balance FROM login WHERE username = '$name';";

            $_SESSION["user"] = $name;
            
            $balanceResult = $conn->query($balancesql);
            $_SESSION["balance"] = $balanceResult -> fetch_array()['balance'];

            header('Location: index.php');
        } else {


            header('Location: userlogin.html');
        }
        ?>
    </body>
</html>
