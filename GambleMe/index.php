<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html><head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Brett McLaren - Personal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="vendor/stylesheets/bootstrap.min.css">
        <link rel="stylesheet" href="stylesheets/main.css">
        
    </head>


    <body>



        // top
        <?php
        session_start();

        if (isset($_SESSION["user"])) {
            
        } else {
            $_SESSION["user"] = NULL;
        }

        include_once('NavBar.php');
        //include_once('SlideShow.php');
        include_once('currentBets.php');
        
        ?>



        <div style="margin-left:25%;padding:1px 16px;height:1000px;background-color: transparent;">


            <div id="section-top" style="background-color: transparent;">


                <div class="content-container content">
                    <section class="module">
                        <div class="content-container content">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-sm-2">
                                    <img src="images/nhl1.jpg" style="width: 100%; margin-top: 20px;">
                                </div>
                                <div class="col-sm-10">  <a href="Hockey.php"<span><h2>Hockey</h2></span>
                                    </a>
                                    <p style="color: darkslategray; font-style: italic; font-size: 20;">
                                        The greatest game on Earth
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section></div>

                <div class="content-container content">
                    <section class="module">
                        <div class="content-container content">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-sm-2">
                                    <img src="images/nhl1.jpg" style="width: 100%; margin-top: 20px;">
                                </div>
                                <div class="col-sm-10">  <a href="Football.php"<span><h2>Football</h2></span>
                                    </a>
                                    <p style="color: darkslategray; font-style: italic; font-size: 20;">
                                        HandEgg
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section></div>

                <div class="content-container content">
                    <section class="module">
                        <div class="content-container content">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-sm-2">
                                    <img src="images/nhl1.jpg" style="width: 100%; margin-top: 20px;">
                                </div>
                                <div class="col-sm-10">  <a href="Basketball.php"<span><h2>Basketball</h2></span>
                                    </a>
                                    <p style="color: darkslategray; font-style: italic; font-size: 20;">
                                        The worst version of laundry
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section></div>

            </div>

        </div>

    </body>
</html>
