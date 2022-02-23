<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/base.css"></link>
        <style>
            .container {
                display: flex;
                overflow: auto;
            }
            .sub-con {
                width: 40%;
                height: 40%;
                margin: auto;
                margin-left: 5%;
            }

            #roomone {
                background-color:blue;
                flex-direction: row;
                width: 50%;
            }
            #roomtwo {
                background-color: yellow;
                flex-direction: column;
                flex-basis: 50%;
            }
            #roomthree {
                
            }
            #roomfour {
                
            }
            #roomfive {
                
            }
        </style>
    </head>

    <body>
        <div class="top-container"><b>Choose Room</b> > Book Form > Finished </div>
        <div class="container">
            <div id="roomone" class="sub-con">Room 1</div>
            <div id="roomtwo" class="sub-con">Room 2</div>
            <div id="roomthree" class="sub-con">Room 3</div>
            <div id="roomfour" class="sub-con">Room 4</div>
            <div id="roomfive" class="sub-con">Room 5</div>
            <div id="roomsix" class="sub-con">Room 6</div>
        </div>
    </body>
</html>