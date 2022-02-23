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
            <div id="roomone" class="sub-con">
                <label>Room 1</label>
                <input type="radio" id value="8am-9am">8am-9am 

            </div>
            <div id="roomtwo" class="sub-con">
                <label>Room 2</label>

            </div>
            <div id="roomthree" class="sub-con">
                <label>Room 3</label>

            </div>
            <div id="roomfour" class="sub-con">
                <label>Room 4</label>

            </div>
            <div id="roomfive" class="sub-con">
                <label>Room 5</label>

            </div>
            <div id="roomsix" class="sub-con">
                <label>Room 6</label>
            
            </div>
        </div>
    </body>
</html>