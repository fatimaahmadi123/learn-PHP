<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <?php
            echo "Hello " . $_POST['fname']  . " " . $_POST['lname'];
            $filename = 'student.txt';
            $myfile = fopen($filename, 'a+');
            fwrite($myfile, $_POST['fname']  . " " . $_POST['lname']. "\n" );
            fclose($myfile);
        ?>
    </body>
</html>

