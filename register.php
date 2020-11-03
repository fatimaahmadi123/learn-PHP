<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <h1>Student regisration</h1>
        <form action="save_registration.php" method="POST">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value=""><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value=""><br><br>
            <input type="submit" value="Submit">
        </form> 
        <h2>Registered students</h2>
        <ol>
            
        <?php
            $filename = 'student.txt';
            $myfile = fopen($filename, 'r');
            while (! feof($myfile)) {
                $student = trim(fgets($myfile));
                if ($student != "" ) {
                    echo "<li>" . $student . '</li>';
                }
            }
            fclose($myfile);
         ?>
        </ol>
    </body>
</html>

