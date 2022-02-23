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
            ?>
                

                    <?php
                        if(isset($_POST['snumset'])) {
                            $studentno = $_POST['studentno'];
                            echo 
                            '<form method="post" action="book.php">
                                <input type="submit" value="Back">
                            </form>'; #ayy first try cheese
                            // line 56 - 58 refreshes the page, allow to change no of student id

                            echo '<form method="post" action="confirmation.php">';
                            echo "<h3>Please fill in your student ids</h3>";

                            //show the amount of student id based of the chosen value
                            switch ($studentno) { 
                                case '3':
                                    echo "<label for='si1'>Student id 1: </label>";
                                    echo "<input type='text' id='si1' name='studentid1'><br><br>";
                                    echo "<label for='si2'>Student id 2: </label>";
                                    echo "<input type='text' id='si2' name='studentid2'><br><br>";
                                    echo "<label for='si3'>Student id 3: </label>";
                                    echo "<input type='text' id='si3' name='studentid3'><br><br>";
                                    break;

                                case '4':
                                    echo "<label for='si1'>Student id 1: </label>";
                                    echo "<input type='text' id='si' name='studentid1'><br><br>";
                                    echo "<label for='si'>Student id 2: </label>";
                                    echo "<input type='text' id='si1' name='studentid2'><br><br>";
                                    echo "<label for='si2'>Student id 3: </label>";
                                    echo "<input type='text' id='si3' name='studentid3'><br><br>";
                                    echo "<label for='si4'>Student id 4: </label>";
                                    echo "<input type='text' id='si4' name='studentid4'><br><br>";
                                    break;

                                case '5':
                                    echo "<label for='si1'>Student id 1: </label>";
                                    echo "<input type='text' id='si1' name='studentid1'><br><br>";
                                    echo "<label for='si2'>Student id 2: </label>";
                                    echo "<input type='text' id='si2' name='studentid2'><br><br>";
                                    echo "<label for='si3'>Student id 3: </label>";
                                    echo "<input type='text' id='si3' name='studentid3'><br><br>";
                                    echo "<label for='si4'>Student id 4: </label>";
                                    echo "<input type='text' id='si4' name='studentid4'><br><br>";
                                    echo "<label for='si5'>Student id 5: </label>";
                                    echo "<input type='text' id='si5' name='studentid5'><br><br>";
                                    break;
                                
                                default:
                                    break;
                            }

                            echo '<input type="submit" name="snumset" value="submit" id="sbutton">';
                            echo '</form>';
                        }
                    ?>

                
            </div>
        </div>
    </body>
</html>