<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/base.css"></link>
        <style>
            .container {
                padding-top: 10px !important;
                padding-bottom: 90px !important;
            }
            #formwrapper {
                width: 90%;
                text-align: left;
                margin: auto;
            }
            #sbutton {
                margin : auto;
                margin-left: 30%;
                width: 40%;
                height: 3em;
                background-color: #e35760;
                border: solid 5px #bd0d22;
                border-radius: 10px;
                margin-top: 18%;
                color: white;
                font-size: 1.2em;
            }
        </style>
    </head>

    <body>
        <div class="top-container">Choose Room > <b>Book Form</b> > Finished </div>
        <div class="container">
            <div style="margin: auto;">
                <?php
                    if(isset($_POST['submitone'])) {
                        echo '<h1>Room 1</h1>';
                    } else if(isset($_POST['submittwo'])) {
                        echo '<h1>Room 2</h1>';                                                       
                    } else if(isset($_POST['submitthree'])) {
                        echo '<h1>Room 3</h1>';               
                    } else if(isset($_POST['submitfour'])) {
                        echo '<h1>Room 4</h1>';             
                    } else if(isset($_POST['submitfive'])) {
                        echo '<h1>Room 5</h1>';              
                    } else if(isset($_POST['submitsix'])) {
                        echo '<h1>Room 6</h1>';             
                    }
                ?>
            </div>
            <div id="formwrapper">
            <?php
                if(isset($_POST['notsnumset'])) {

                } else {
                    if(isset($_POST['snumset'])) {
                        
                    } else { //sheeesh allows to get opposite of isset aka isnotset
                        echo 
                        '<form method="post" action="book.php">
                            <h3>How many student?</h3>
                            <select name="studentno" id="snum">
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <input type="submit" name="snumset" value="set">
                        </form>';
                    }
                }
            ?>
                

                    <?php
                        $backbutton = '<form method="post" action="book.php">
                            <input type="submit" value="Back">
                        </form>'; #ayy first try cheese
                        //refreshes the page, allow to change no of student id

                        if(isset($_POST['notsnumset'])) {
                            echo $backbutton;
                            
                            if(isset($_POST['studentid5'])) {
                                $si1 = $_POST['studentid1'];
                                $si2 = $_POST['studentid2'];
                                $si3 = $_POST['studentid3'];
                                $si4 = $_POST['studentid4'];
                                $si5 = $_POST['studentid5'];
                                if (empty($si1)|empty($si2)|empty($si3)|empty($si4)|empty($si5)) {
                                    echo "field must not be empty";
                                } else {
                                    echo '<form action="confirmation.php" method="post">';
                                        echo "<label for='si1'>Student id 1: </label>
                                        <input type='text' id='si1' name='studentid1' value='$si1'><br><br>
                                        <label for='si2'>Student id 2: </label>
                                        <input type='text' id='si2' name='studentid2' value='$si2'><br><br>
                                        <label for='si3'>Student id 3: </label>
                                        <input type='text' id='si3' name='studentid3' value='$si3'><br><br>
                                        <label for='si4'>Student id 4: </label>
                                        <input type='text' id='si4' name='studentid4' value='$si4'><br><br>
                                        <label for='si5'>Student id 5: </label>
                                        <input type='text' id='si5' name='studentid5' value='$si5'><br><br>";
                                    echo 
                                    '
                                    <h2 style=""> Are You Sure? </h2>
                                        <input type="submit" name="submiter" value="confirm" id="sbutton">
                                    </form>
                                    ';
                                }
                                
                                
                            } else if(isset($_POST['studentid4'])) {
                                $si1 = $_POST['studentid1'];
                                $si2 = $_POST['studentid2'];
                                $si3 = $_POST['studentid3'];
                                $si4 = $_POST['studentid4'];
                                if (empty($si1)|empty($si2)|empty($si3)|empty($si4)) {
                                    echo "field must not be empty";
                                } else {
                                    echo '<form action="confirmation.php" method="post">';
                                    echo "<label for='si1'>Student id 1: </label>
                                    <input type='text' id='si1' name='studentid1' value='$si1'><br><br>
                                    <label for='si2'>Student id 2: </label>
                                    <input type='text' id='si2' name='studentid2' value='$si2'><br><br>
                                    <label for='si3'>Student id 3: </label>
                                    <input type='text' id='si3' name='studentid3' value='$si3'><br><br>
                                    <label for='si4'>Student id 4: </label>
                                    <input type='text' id='si4' name='studentid4' value='$si4'><br><br>";
                                    echo 
                                    '
                                    <h2 style="text-align: center;"> Are You Sure? </h2>
                                        <input type="submit" name="submiter" value="submit" id="sbutton">
                                    </form>
                                    ';
                                }
                                
                            } else if(isset($_POST['studentid3'])) {
                                $si1 = $_POST['studentid1'];
                                $si2 = $_POST['studentid2'];
                                $si3 = $_POST['studentid3'];
                                if (empty($si1)|empty($si2)|empty($si3)) {
                                    echo "field must not be empty";
                                } else {
                                    echo '<form action="confirmation.php" method="post">';
                                    echo "<label for='si1'>Student id 1: </label>
                                    <input type='text' id='si1' name='studentid1' value='$si1'><br><br>
                                    <label for='si2'>Student id 2: </label>
                                    <input type='text' id='si2' name='studentid2' value='$si2'><br><br>
                                    <label for='si3'>Student id 3: </label>
                                    <input type='text' id='si3' name='studentid3' value='$si3'><br><br>";
                                    echo 
                                    '
                                    <h2 style=""> Are You Sure? </h2>
                                        <input type="submit" name="submiter" value="Confirm" id="sbutton">
                                    </form>
                                    ';
                                }
                                
                            }

                        } else {
                            if(isset($_POST['snumset'])) {
                                echo $backbutton;

                                echo '<form method="post" action="book.php">';
                                echo "<h3>Please fill in your student ids</h3>";

                                //show the amount of student id based of the chosen value
                                $studentno = $_POST['studentno'];
                                $student123 = "<label for='si1'>Student id 1: </label>
                                <input type='text' id='si1' name='studentid1'><br><br>
                                <label for='si2'>Student id 2: </label>
                                <input type='text' id='si2' name='studentid2'><br><br>
                                <label for='si3'>Student id 3: </label>
                                <input type='text' id='si3' name='studentid3'><br><br>";
                                switch ($studentno) { 
                                    case '3':
                                        echo $student123;
                                        break;

                                    case '4':
                                        echo $student123;
                                        echo "<label for='si4'>Student id 4: </label>
                                        <input type='text' id='si4' name='studentid4'><br><br>";
                                        break;

                                    case '5':
                                        echo $student123;
                                        echo "<label for='si4'>Student id 4: </label>
                                        <input type='text' id='si4' name='studentid4'><br><br>
                                        <label for='si5'>Student id 5: </label>
                                        <input type='text' id='si5' name='studentid5'><br><br>";
                                        break;
                                    
                                    default:
                                        break;
                                }

                                
                                echo '<input type="submit" name="notsnumset" value="submit" id="sbutton">';
                                echo '</form>';
                                
                            }
                        }
                    ?>
                    
                
            </div>
        </div>
    </body>
</html>