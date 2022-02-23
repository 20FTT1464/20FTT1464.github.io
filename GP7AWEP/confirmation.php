<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/base.css"></link>
        <style>
            .container {
                padding-top: 20px !important;
                padding-bottom: 80px !important;
            }
        </style>
    </head>

    <body>
    <div class="top-container">Choose Room > Book Form > <b> Finished </b> </div>
        <div class="container">
            <h1>Finished</h1>
            <h2>your student id are:</h2>
            <?php
                if(isset($_POST['studentid5'])) {
                    $studentid1 = $_POST['studentid1'];
                    $studentid2 = $_POST['studentid2'];
                    $studentid3 = $_POST['studentid3'];
                    $studentid4 = $_POST['studentid4'];
                    $studentid5 = $_POST['studentid5'];
                    echo "
                        <h3>$studentid1</h3>
                        <h3>$studentid2</h3>
                        <h3>$studentid3</h3>
                        <h3>$studentid4</h3>
                        <h3>$studentid5</h3>
                    ";
                }
            ?>
            <a href="index.php"><button type="button">Homepage</button></a>
        </div>
    </body>
</html>