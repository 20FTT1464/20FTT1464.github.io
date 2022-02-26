<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/base.css"></link>
        <style>
            .container {
                padding-top: 10px !important;
                overflow: auto;
                height: 480px;
            }
            .flexrow {
                display: flex;
            }
            .flexcol {
                width: 40%;
                background-color: white;
                border:solid 3px grey;
                border-radius: 30px;
                margin: auto;
                margin-bottom: 50px;
                margin-left: 5%;
                margin-right: 5%;
                height: 170px;
            }

            input[type="submit"] {
                margin-top: 15px !important;
            }
        </style>
    </head>

    <body>
        <div class="top-container"><b>Choose Room</b> > Book Form > Finished </div> 
        <div class="container">
        <?php
        // $date = date('l jS ');
        // $hour = date("h");
        // $min = date("i");
        // echo "<h1> Today date is " date('l jS \of F Y h:i:s A') " .</h1>";
        echo date('l jS \of F Y h:i:s A'); //https://www.php.net/manual/en/function.date.php
        // date above shows date time minute seconds.
        ?>
            <div class="flexrow">
                <div class="flexcol">
                    <form action="book.php" method="post">
                    <h3>Room 1</h3>

                    <!-- <input type="radio" id="" value="8am-9am">
                    <label for="">8am-9am</label>
                    <input type="radio" id="" value="9am-10am">
                    <label for="">9am-10am</label>
                    <input type="radio" id="" value="10am-11am">
                    <label for="">10am-11am</label>
                    <input type="radio" id="" value="11am-12pm">
                    <label for="">11am-12pm</label>
                    <input type="radio" id="" value="1.30pm-2.30pm">
                    <label for="">1.30pm-2.30pm</label>
                    <input type="radio" id="" value="2.30pm-3.30pm">
                    <label for="">2.30pm-3.30pm</label> -->
                    
                    <?php
                     $hour = date("h"); // hours
                     $min = date("i"); // minute
                    // $hour = 7;
                    // $min = 30;
                    // there is 6 if else statement for each room.
                    // each if is for each hour past. eg, if it is 7 oclock in the morning
                    // the student can book for room that are available on 8am onwards
                    // but if it is 9am, the code will automatically print time after 9am.
                    // id name according to radio eg roo = radio one one.
                        if($hour < 8){
                           echo '
                           <input type="radio" id="roo" name="radio_one" value="8am-9am">
                           <label for="roo">8am-9am</label>
                           <input type="radio" id="rot" name="radio_one" value="9am-10am">
                           <label for="rot">9am-10am</label>
                           <br>
                           <input type="radio" id="roth" name="radio_one" value="10am-11am">
                           <label for="roth">10am-11am</label>
                           <input type="radio" id="rof" name="radio_one" value="11am-12pm">
                           <label for="rof">11am-12pm</label>
                           <br>
                           <input type="radio" id="rofi" name="radio_one" value="1.30pm-2.30pm">
                           <label for="rofi">1.30pm-2.30pm</label>
                           <input type="radio" id="ros" name="radio_one" value="2.30pm-3.30pm">
                           <label for="ros">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="rot" name="radio_one" value="9am-10am">
                            <label for="rot">9am-10am</label>
                            <input type="radio" id="roth" name="radio_one" value="10am-11am">
                            <label for="roth">10am-11am</label>
                            <br>
                            <input type="radio" id="rof" name="radio_one" value="11am-12pm">
                            <label for="rof">11am-12pm</label>
                            <input type="radio" id="rofi" name="radio_one" value="1.30pm-2.30pm">
                            <label for="rofi">1.30pm-2.30pm</label>
                            <br>
                            <input type="radio" id="ros" name="radio_one" value="2.30pm-3.30pm">
                            <label for="ros">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="roth" name="radio_one" value="10am-11am">
                            <label for="roth">10am-11am</label>
                            <input type="radio" id="rof" name="radio_one" value="11am-12pm">
                            <label for="rof">11am-12pm</label>
                            <br>
                            <input type="radio" id="rofi" name="radio_one" value="1.30pm-2.30pm">
                            <label for="rofi">1.30pm-2.30pm</label>
                            <input type="radio" id="ros" name="radio_one" value="2.30pm-3.30pm">
                            <label for="ros">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="rof" name="radio_one" value="11am-12pm">
                            <label for="rof">11am-12pm</label>
                            <input type="radio" id="rofi" name="radio_one" value="1.30pm-2.30pm">
                            <label for="rofi">1.30pm-2.30pm</label>
                            <input type="radio" id="ros" name="radio_one" value="2.30pm-3.30pm">
                            <label for="ros">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min <= 30) {
                            echo '
                            <input type="radio" id="rofi" name="radio_one" value="1.30pm-2.30pm">
                            <label for="rofi">1.30pm-2.30pm</label>
                            <input type="radio" id="ros" name="radio_one" value="2.30pm-3.30pm">
                            <label for="ros">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min <= 30) {
                            echo '
                            <input type="radio" id="ros" name="radio_one" value="2.30pm-3.30pm">
                            <label for="ros">2.30pm-3.30pm</label>';
                        }
                    ?>
                    <br>
                    <input type="submit" name="submitone">
                </form>    
            </div>

                <div class="flexcol">
                <form action="book.php" method="post">
                    <h3>Room 2</h3>
                
                    <?php
                    // $hour = date("h");
                    // $min = date("i");
                        if($hour < 8){
                           echo '
                           <input type="radio" id="rto" name="radio_two" value="8am-9am">
                           <label for="rto">8am-9am</label>
                           <input type="radio" id="rtt" name="radio_two" value="9am-10am">
                           <label for="rtt">9am-10am</label>
                           <br>
                           <input type="radio" id="rtth" name="radio_two" value="10am-11am">
                           <label for="rtth">10am-11am</label>
                           <input type="radio" id="rtf" name="radio_two" value="11am-12pm">
                           <label for="rtf">11am-12pm</label>
                           <br>
                           <input type="radio" id="rtfi" name="radio_two" value="1.30pm-2.30pm">
                           <label for="rtfi">1.30pm-2.30pm</label>
                           <input type="radio" id="rts" name="radio_two" value="2.30pm-3.30pm">
                           <label for="rts">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="rtt" name="radio_two" value="9am-10am">
                            <label for="rtt">9am-10am</label>
                            <input type="radio" id="rtth" name="radio_two" value="10am-11am">
                            <label for="rtth">10am-11am</label>
                            <br>
                            <input type="radio" id="rtf" name="radio_two" value="11am-12pm">
                            <label for="rtf">11am-12pm</label>
                            <input type="radio" id="rtfi" name="radio_two" value="1.30pm-2.30pm">
                            <label for="rtfi">1.30pm-2.30pm</label>
                            <br>
                            <input type="radio" id="rts" name="radio_two" value="2.30pm-3.30pm">
                            <label for="rts">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="rtth" name="radio_two" value="10am-11am">
                            <label for="rtth">10am-11am</label>
                            <input type="radio" id="rtf" name="radio_two" value="11am-12pm">
                            <label for="rtf">11am-12pm</label>
                            <br>
                            <input type="radio" id="rtfi" name="radio_two" value="1.30pm-2.30pm">
                            <label for="rtfi">1.30pm-2.30pm</label>
                            <input type="radio" id="rts" name="radio_two"  value="2.30pm-3.30pm">
                            <label for="rts">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="rtf" name="radio_two" value="11am-12pm">
                            <label for="rtf">11am-12pm</label>
                            <input type="radio" id="rtfi" name="radio_two" value="1.30pm-2.30pm">
                            <label for="rtfi">1.30pm-2.30pm</label>
                            <input type="radio" id="rts" name="radio_two" value="2.30pm-3.30pm">
                            <label for="rts">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min <= 30) {
                            echo '
                            <input type="radio" id="rtfi" name="radio_two" value="1.30pm-2.30pm">
                            <label for="rtfi">1.30pm-2.30pm</label>
                            <input type="radio" id="rts" name="radio_two" value="2.30pm-3.30pm">
                            <label for="rts">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min <= 30) {
                            echo '
                            <input type="radio" id="rts" name="radio_two" value="2.30pm-3.30pm">
                            <label for="rts">2.30pm-3.30pm</label>';
                        }
                    ?>
                    <br>
                    <input type="submit" name="submittwo">
                </form>
                </div>
            </div>
            
            <div class="flexrow">
                <div class="flexcol">
                <form action="book.php" method="post">
                    <h3>Room 3</h3>
                
                    <?php
                    // $hour = date("h");
                    // $min = date("i");
                        if($hour < 8){
                           echo '
                           <input type="radio" id="rtho" name="radio_three" value="8am-9am">
                           <label for="rtho">8am-9am</label>
                           <input type="radio" id="rtht" name="radio_three" value="9am-10am">
                           <label for="rtht">9am-10am</label>
                           <br>
                           <input type="radio" id="rthth" name="radio_three" value="10am-11am">
                           <label for="rthth">10am-11am</label>
                           <input type="radio" id="rthf" name="radio_three" value="11am-12pm">
                           <label for="rthf">11am-12pm</label>
                           <br>
                           <input type="radio" id="rthfi" name="radio_three" value="1.30pm-2.30pm">
                           <label for="rthfi">1.30pm-2.30pm</label>
                           <input type="radio" id="rths" name="radio_three" value="2.30pm-3.30pm">
                           <label for="rths">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="rtht" name="radio_three" value="9am-10am">
                            <label for=rtht"">9am-10am</label>
                            <input type="radio" id="rthth" name="radio_three" value="10am-11am">
                            <label for="rthth">10am-11am</label>
                            <br>
                            <input type="radio" id="rthf" name="radio_three" value="11am-12pm">
                            <label for="rthf">11am-12pm</label>
                            <input type="radio" id="rthfi" name="radio_three" value="1.30pm-2.30pm">
                            <label for="rthfi">1.30pm-2.30pm</label>
                            <br>
                            <input type="radio" id="rths" name="radio_three" value="2.30pm-3.30pm">
                            <label for="rths">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="rthth" name="radio_three" value="10am-11am">
                            <label for="rthth">10am-11am</label>
                            <input type="radio" id="rthf" name="radio_three" value="11am-12pm">
                            <label for="rthf">11am-12pm</label>
                            <br>
                            <input type="radio" id="rthfi" name="radio_three" value="1.30pm-2.30pm">
                            <label for="rthfi">1.30pm-2.30pm</label>
                            <input type="radio" id="rths" name="radio_three" value="2.30pm-3.30pm">
                            <label for="rths">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="rthf" name="radio_three" value="11am-12pm">
                            <label for="rthf">11am-12pm</label>
                            <input type="radio" id="rthfi" name="radio_three" value="1.30pm-2.30pm">
                            <label for="rthfi">1.30pm-2.30pm</label>
                            <input type="radio" id="rths" name="radio_three" value="2.30pm-3.30pm">
                            <label for="rths">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min <= 30) {
                            echo '
                            <input type="radio" id="rthfi" name="radio_three" value="1.30pm-2.30pm">
                            <label for="rthfi">1.30pm-2.30pm</label>
                            <input type="radio" id="rths" name="radio_three" value="2.30pm-3.30pm">
                            <label for="rths">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min <= 30) {
                            echo '
                            <input type="radio" id="rths" name="radio_three" value="2.30pm-3.30pm">
                            <label for="rths">2.30pm-3.30pm</label>';
                        }
                    ?>
                    <br>
                    <input type="submit" name="submitthree">
                </form>
                </div>

                <div class="flexcol">
                <form action="book.php" method="post">
                    <h3>Room 4</h3>
                
                    <?php
                    // $hour = date("h");
                    // $min = date("i");
                        if($hour < 8){
                           echo '
                           <input type="radio" id="rfo" name="radio_four" value="8am-9am">
                           <label for="rfo">8am-9am</label>
                           <input type="radio" id="rft" name="radio_four" value="9am-10am">
                           <label for="rft">9am-10am</label>
                           <br>
                           <input type="radio" id="rfth" name="radio_four" value="10am-11am">
                           <label for="rfth">10am-11am</label>
                           <input type="radio" id="rff" name="radio_four" value="11am-12pm">
                           <label for="rff">11am-12pm</label>
                           <br>
                           <input type="radio" id="rffi" name="radio_four" value="1.30pm-2.30pm">
                           <label for="rffi">1.30pm-2.30pm</label>
                           <input type="radio" id="rfs" name="radio_four" value="2.30pm-3.30pm">
                           <label for="rfs">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="rft" name="radio_four" value="9am-10am">
                            <label for="rft">9am-10am</label>
                            <input type="radio" id="rfth" name="radio_four" value="10am-11am">
                            <label for="rfth">10am-11am</label>
                            <br>
                            <input type="radio" id="rff" name="radio_four" value="11am-12pm">
                            <label for="rff">11am-12pm</label>
                            <input type="radio" id="rffi" name="radio_four" value="1.30pm-2.30pm">
                            <label for="rffi">1.30pm-2.30pm</label>
                            <br>
                            <input type="radio" id="rfs" name="radio_four" value="2.30pm-3.30pm">
                            <label for="rfs">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="rfth" name="radio_four" value="10am-11am">
                            <label for="rfth">10am-11am</label>
                            <input type="radio" id="rff" name="radio_four" value="11am-12pm">
                            <label for="rff">11am-12pm</label>
                            <br>
                            <input type="radio" id="rffi" name="radio_four" value="1.30pm-2.30pm">
                            <label for="rffi">1.30pm-2.30pm</label>
                            <input type="radio" id="rfs" name="radio_four" value="2.30pm-3.30pm">
                            <label for="rfs">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="rff" name="radio_four" value="11am-12pm">
                            <label for="rff">11am-12pm</label>
                            <input type="radio" id="rffi" name="radio_four" value="1.30pm-2.30pm">
                            <label for="rffi">1.30pm-2.30pm</label>
                            <input type="radio" id="rfs" name="radio_four" value="2.30pm-3.30pm">
                            <label for="rfs">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min <= 30) {
                            echo '
                            <input type="radio" id="rffi" name="radio_four" value="1.30pm-2.30pm">
                            <label for="rffi">1.30pm-2.30pm</label>
                            <input type="radio" id="rfs" name="radio_four" value="2.30pm-3.30pm">
                            <label for="rfs">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min <= 30) {
                            echo '
                            <input type="radio" id="rfs" name="radio_four" value="2.30pm-3.30pm">
                            <label for="rfs">2.30pm-3.30pm</label>';
                        }
                    ?>
                    <br>
                    <input type="submit" name="submitfour">
                </form>
                </div>
            </div>

            <div class="flexrow">
                <div class="flexcol">
                <form action="book.php" method="post">
                    <h3>Room 5</h3>
                
                    <?php
                    // $hour = date("h");
                    // $min = date("i");
                        if($hour < 8){
                           echo '
                           <input type="radio" id="rfio" name="radio_five" value="8am-9am">
                           <label for="rfio">8am-9am</label>
                           <input type="radio" id="rfit" name="radio_five" value="9am-10am">
                           <label for="rfit">9am-10am</label>
                           <br>
                           <input type="radio" id="rfith" name="radio_five" value="10am-11am">
                           <label for="rfith">10am-11am</label>
                           <input type="radio" id="rfif" name="radio_five" value="11am-12pm">
                           <label for="rfif">11am-12pm</label>
                           <br>
                           <input type="radio" id="rfifi" name="radio_five" value="1.30pm-2.30pm">
                           <label for="rfif">1.30pm-2.30pm</label>
                           <input type="radio" id="rfis" name="radio_five" value="2.30pm-3.30pm">
                           <label for="rfis">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="rfit" name="radio_five" value="9am-10am">
                            <label for="rfit">9am-10am</label>
                            <input type="radio" id="rfith" name="radio_five" value="10am-11am">
                            <label for="rfith">10am-11am</label>
                            <br>
                            <input type="radio" id="rfif" name="radio_five" value="11am-12pm">
                            <label for="rfif">11am-12pm</label>
                            <input type="radio" id="rfifi" name="radio_five" value="1.30pm-2.30pm">
                            <label for="rfifi">1.30pm-2.30pm</label>
                            <br>
                            <input type="radio" id="rfis" name="radio_five" value="2.30pm-3.30pm">
                            <label for="rfis">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="rfith" name="radio_five" value="10am-11am">
                            <label for="rfith">10am-11am</label>
                            <input type="radio" id="rfif" name="radio_five" value="11am-12pm">
                            <label for="rfif">11am-12pm</label>
                            <br>
                            <input type="radio" id="rfifi" name="radio_five" value="1.30pm-2.30pm">
                            <label for="rfifi">1.30pm-2.30pm</label>
                            <input type="radio" id="rfis" name="radio_five" value="2.30pm-3.30pm">
                            <label for="rfis">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="rfif" name="radio_five" value="11am-12pm">
                            <label for="rfif">11am-12pm</label>
                            <input type="radio" id="rfifi" name="radio_five" value="1.30pm-2.30pm">
                            <label for="rfifi">1.30pm-2.30pm</label>
                            <input type="radio" id="rfis" name="radio_five" value="2.30pm-3.30pm">
                            <label for="rfis">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min <= 30) {
                            echo '
                            <input type="radio" id="rfifi" name="radio_five" value="1.30pm-2.30pm">
                            <label for="rfifi">1.30pm-2.30pm</label>
                            <input type="radio" id="rfis" name="radio_five" value="2.30pm-3.30pm">
                            <label for="rfis">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min <= 30) {
                            echo '
                            <input type="radio" id="rfis" name="radio_five" value="2.30pm-3.30pm">
                            <label for="rfis">2.30pm-3.30pm</label>';
                        }
                    ?>
                    <br>
                    <input type="submit" name="submitfive">
                </form>
                </div>

                <div class="flexcol">
                <form action="book.php" method="post">
                    <h3>Room 6</h3>
                
                    <?php
                    // $hour = date("h");
                    // $min = date("i");
                        if($hour < 8){
                           echo '
                           <input type="radio" id="rso" name="radio_six" value="8am-9am">
                           <label for="rso">8am-9am</label>
                           <input type="radio" id="rst" name="radio_six" value="9am-10am">
                           <label for="rst">9am-10am</label>
                           <br>
                           <input type="radio" id="rsth" name="radio_six" value="10am-11am">
                           <label for="rsth">10am-11am</label>
                           <input type="radio" id="rsf" name="radio_six" value="11am-12pm">
                           <label for="rsf">11am-12pm</label>
                           <br>
                           <input type="radio" id="rsfi" name="radio_six" value="1.30pm-2.30pm">
                           <label for="rsfi">1.30pm-2.30pm</label>
                           <input type="radio" id="rss" name="radio_six" value="2.30pm-3.30pm">
                           <label for="rss">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="rst" name="radio_six" value="9am-10am">
                            <label for="rst">9am-10am</label>
                            <input type="radio" id="rsth" name="radio_six" value="10am-11am">
                            <label for="rsth">10am-11am</label>
                            <br>
                            <input type="radio" id="rsf" name="radio_six" value="11am-12pm">
                            <label for="rsf">11am-12pm</label>
                            <input type="radio" id="rsfi" name="radio_six" value="1.30pm-2.30pm">
                            <label for="rsfi">1.30pm-2.30pm</label>
                            <br>
                            <input type="radio" id="rss" name="radio_six" value="2.30pm-3.30pm">
                            <label for="rss">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="rsth" name="radio_six" value="10am-11am">
                            <label for="rsth">10am-11am</label>
                            <input type="radio" id="rsf" name="radio_six" value="11am-12pm">
                            <label for="rsf">11am-12pm</label>
                            <br>
                            <input type="radio" id="rsfi" name="radio_six" value="1.30pm-2.30pm">
                            <label for="rsfi">1.30pm-2.30pm</label>
                            <input type="radio" id="rss" name="radio_six" value="2.30pm-3.30pm">
                            <label for="rss">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="rsf" name="radio_six" value="11am-12pm">
                            <label for="rsf">11am-12pm</label>
                            <input type="radio" id="rsfi" name="radio_six" value="1.30pm-2.30pm">
                            <label for="rsfi">1.30pm-2.30pm</label>
                            <input type="radio" id="rss" name="radio_six" value="2.30pm-3.30pm">
                            <label for="rss">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min <= 30) {
                            echo '
                            <input type="radio" id="rsfi" name="radio_six" value="1.30pm-2.30pm">
                            <label for="rsfi">1.30pm-2.30pm</label>
                            <input type="radio" id="rss" name="radio_six" value="2.30pm-3.30pm">
                            <label for="rss">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min <= 30) {
                            echo '
                            <input type="radio" id="rss" name="radio_six" value="2.30pm-3.30pm">
                            <label for="rss">2.30pm-3.30pm</label>';
                        }
                    ?>
                    <br>
                    <input type="submit" name="submitsix">
                </form>
                </div>

                </div>
            </div>
        </div>
    </body>
</html>