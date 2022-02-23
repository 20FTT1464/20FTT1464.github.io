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
                    // $hour = date("h");
                    // $min = date("i");
                    $hour = 7;
                    $min = 30;
                        if($hour < 8){
                           echo '
                           <input type="radio" id="" value="8am-9am">
                           <label for="">8am-9am</label>
                           <input type="radio" id="" value="9am-10am">
                           <label for="">9am-10am</label>
                           <br>
                           <input type="radio" id="" value="10am-11am">
                           <label for="">10am-11am</label>
                           <input type="radio" id="" value="11am-12pm">
                           <label for="">11am-12pm</label>
                           <br>
                           <input type="radio" id="" value="1.30pm-2.30pm">
                           <label for="">1.30pm-2.30pm</label>
                           <input type="radio" id="" value="2.30pm-3.30pm">
                           <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="" value="9am-10am">
                            <label for="">9am-10am</label>
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
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
                           <input type="radio" id="" value="8am-9am">
                           <label for="">8am-9am</label>
                           <input type="radio" id="" value="9am-10am">
                           <label for="">9am-10am</label>
                           <br>
                           <input type="radio" id="" value="10am-11am">
                           <label for="">10am-11am</label>
                           <input type="radio" id="" value="11am-12pm">
                           <label for="">11am-12pm</label>
                           <br>
                           <input type="radio" id="" value="1.30pm-2.30pm">
                           <label for="">1.30pm-2.30pm</label>
                           <input type="radio" id="" value="2.30pm-3.30pm">
                           <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="" value="9am-10am">
                            <label for="">9am-10am</label>
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <br>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <br>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <br>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
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
                           <input type="radio" id="" value="8am-9am">
                           <label for="">8am-9am</label>
                           <input type="radio" id="" value="9am-10am">
                           <label for="">9am-10am</label>
                           <br>
                           <input type="radio" id="" value="10am-11am">
                           <label for="">10am-11am</label>
                           <input type="radio" id="" value="11am-12pm">
                           <label for="">11am-12pm</label>
                           <br>
                           <input type="radio" id="" value="1.30pm-2.30pm">
                           <label for="">1.30pm-2.30pm</label>
                           <input type="radio" id="" value="2.30pm-3.30pm">
                           <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="" value="9am-10am">
                            <label for="">9am-10am</label>
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <br>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <br>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <br>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
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
                           <input type="radio" id="" value="8am-9am">
                           <label for="">8am-9am</label>
                           <input type="radio" id="" value="9am-10am">
                           <label for="">9am-10am</label>
                           <br>
                           <input type="radio" id="" value="10am-11am">
                           <label for="">10am-11am</label>
                           <input type="radio" id="" value="11am-12pm">
                           <label for="">11am-12pm</label>
                           <br>
                           <input type="radio" id="" value="1.30pm-2.30pm">
                           <label for="">1.30pm-2.30pm</label>
                           <input type="radio" id="" value="2.30pm-3.30pm">
                           <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="" value="9am-10am">
                            <label for="">9am-10am</label>
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <br>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <br>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <br>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
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
                           <input type="radio" id="" value="8am-9am">
                           <label for="">8am-9am</label>
                           <input type="radio" id="" value="9am-10am">
                           <label for="">9am-10am</label>
                           <br>
                           <input type="radio" id="" value="10am-11am">
                           <label for="">10am-11am</label>
                           <input type="radio" id="" value="11am-12pm">
                           <label for="">11am-12pm</label>
                           <br>
                           <input type="radio" id="" value="1.30pm-2.30pm">
                           <label for="">1.30pm-2.30pm</label>
                           <input type="radio" id="" value="2.30pm-3.30pm">
                           <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="" value="9am-10am">
                            <label for="">9am-10am</label>
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <br>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <br>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <br>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
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
                           <input type="radio" id="" value="8am-9am">
                           <label for="">8am-9am</label>
                           <input type="radio" id="" value="9am-10am">
                           <label for="">9am-10am</label>
                           <br>
                           <input type="radio" id="" value="10am-11am">
                           <label for="">10am-11am</label>
                           <input type="radio" id="" value="11am-12pm">
                           <label for="">11am-12pm</label>
                           <br>
                           <input type="radio" id="" value="1.30pm-2.30pm">
                           <label for="">1.30pm-2.30pm</label>
                           <input type="radio" id="" value="2.30pm-3.30pm">
                           <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 9) {
                            echo '
                            <input type="radio" id="" value="9am-10am">
                            <label for="">9am-10am</label>
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <br>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <br>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 10) {
                            echo '
                            <input type="radio" id="" value="10am-11am">
                            <label for="">10am-11am</label>
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <br>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
                        }

                        elseif ($hour < 11) {
                            echo '
                            <input type="radio" id="" value="11am-12pm">
                            <label for="">11am-12pm</label>
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }

                        elseif ($hour < 13 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="1.30pm-2.30pm">
                            <label for="">1.30pm-2.30pm</label>
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';    
                        }
                        elseif ($hour < 14 && $min < 30) {
                            echo '
                            <input type="radio" id="" value="2.30pm-3.30pm">
                            <label for="">2.30pm-3.30pm</label>';
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