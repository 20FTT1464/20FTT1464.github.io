<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $Bookers = array(
        array(
            'room'=>'1',
            'time'=>'1.30pm-2.30pm',
            'no_people'=>'3',
            'id'=>'19FTT1199',
            'id'=>'19FTT1199',
            'id'=>'19FTT1199',

        ),
        array(
            'room'=>'2',
            'time'=>'1.30pm-2.30pm',
            'id'=>'19FTT2932',

        ),
        array(
            'room'=>'3',
            'time'=>'1.30pm-2.30pm',
            'id'=>'19FTT3939',

        ),
        array(
            'room'=>'4',
            'time'=>'1.30pm-2.30pm',
            'id'=>'19FTT4034',

        ),
        array(
            'room'=>'5',
            'time'=>'1.30pm-2.30pm',
            'id'=>'19FTT6903',

        ),
        array(
            'room'=>'6',
            'time'=>'1.30pm-2.30pm',
            'id'=>'19FTT3023',

        ),
        array(
            'room'=>'1',
            'time'=>'2.30pm-3.30pm',
            'id'=>'20FTT4409',

        ),
        array(
            'room'=>'2',
            'time'=>'2.30pm-3.30pm',
            'id'=>'20FTT3922',

        ),
        array(
            'room'=>'3',
            'time'=>'2.30pm-3.30pm',
            'id'=>'20FTT9323',

        ),
        array(
            'room'=>'4',
            'time'=>'2.30pm-3.30pm',
            'id'=>'20FTT0232',

        ),
        array(
            'room'=>'5',
            'time'=>"2.30pm-3.30pm",
            'id'=>'20FTT8341',

        ),
        array(
            'room'=>'6',
            'time'=>"2.30pm-3.30pm",
            'id'=>'20FTT6535',

        ),
        );

    echo '<pre>';
    // print_r($Bookers);
    // echo $Bookers[1]['firstname'];
    
    
        
    
    
    ?>
    <table border="1" width="900">

         <tr>
            <td>No.</td>
            <td>ID</td>
            <td>Room</td>
            <td>Booked Time</td>
            <td>Select</td>
        </tr>
    <?php
        for ($i=0; $i < count($Bookers); $i++) { 
            echo '<tr>';
            foreach($Bookers[$i] as $bnum => $value) {
                echo "<td>$value</td>";
            }
            echo'<td><input type="checkbox" name="checkbox_name" value="checkox_value"></td>';
            echo '</tr>';
        }
    ?>
    
    </table>
    <input type="submit" name="Submit"
                class="button" value="submit" />

</body>
</html>