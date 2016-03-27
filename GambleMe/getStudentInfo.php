<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>


    <style>
        table, th, td,tr {
            border: 1px solid black;
        }

    </style>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>



        <?php
        $record = filter_input(INPUT_POST, 'recordtype');



// MAKES CONNECTION
        $servername = "localhost";
        $username = "root";
        $password = "abcde3";
        $dbname = "ubcoDB";

        $conn = new mysqli($servername, $username, $password, $dbname);
// CHECKS CONNECTIOn
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

// CHECKS WHICH TYPE OF RECORD TO LOOK FOR



        if ($record == 'honorlist') {
            $sql = "SELECT * FROM students WHERE grade_average >=85.00;";
        }

        if ($record == 'degreecompletion') {
            $sql = "SELECT * from students WHERE credits_completed = 120 AND grade_average>=60;";
        }

        if ($record == 'degreehonorlist') {
            $sql = "SELECT * FROM students WHERE credits_completed >=120 AND grade_average >=85.00;";
        }

// QUERIES
        $result = $conn->query($sql);

        if (mysql_num_rows($result) == 0) {
            
        }

// PRINTS RESULTS
        print("<H1>Dean's Honor List</H1>");
        print('<font color = blue>');
        print('<table style= "width:100%">');
        print('<tr>');
        print('<td><H2>Student Name</H2></td>');
        print('<td><H2>Student ID</H2></td>');
        print('<td><H2>Grade Average</H2></td>');
        print('<td><H2>Credits Completed</H2></td>');

        print('</tr>');

// FOR EACH ELEMENT PRINT OUT
        if ($result->num_rows > 0) {


// OUTPUT DATA OF EACH ROW
            while ($row = $result->fetch_assoc()) {
                print('<tr>');
                echo '<td>';
                echo $row["student_name"];
                echo '</td>';

                echo '<td>';
                echo $row["student_id"];
                echo '</td>';

                echo '<td>';
                echo $row["grade_average"];
                echo '</td>';

                echo '<td>';
                echo $row["credits_completed"];
                echo '</td>';
                print('</tr>');
            }



// IF NO RESULTS, REDIRECT TO QUERYSTUDENT INFO            
        } else {
            header('Location: queryStudentInfo.html');
        }



        print('</table>');
        printf('</font>');
        ?>
    </body>
</html>
