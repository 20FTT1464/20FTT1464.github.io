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
            'no_people'=>'4',
            'id'=>'19FTT4321',
            'id'=>'19FTT4329',
            'id'=>'19FTT9435',
            'id'=>'19FTT9432',

        ),
        array(
            'room'=>'3',
            'time'=>'1.30pm-2.30pm',
            'no_people'=>'5',
            'id'=>'19FTT2124',
            'id'=>'19FTT2366',
            'id'=>'19FTT9034',
            'id'=>'19FTT7456',
            'id'=>'19FTT1234',


        ),
        array(
            'room'=>'4',
            'time'=>'1.30pm-2.30pm',
            'no_people'=>'3',
            'id'=>'19FTT4589',
            'id'=>'19FTT9843',
            'id'=>'19FTT8712',


        ),
        array(
            'room'=>'5',
            'time'=>'1.30pm-2.30pm',
            'no_people'=>'4',
            'id'=>'19FTT9328',
            'id'=>'19FTT2374',
            'id'=>'19FTT0921',
            'id'=>'19FTT9213',

        ),
        array(
            'room'=>'6',
            'time'=>'1.30pm-2.30pm',
            'no_people'=>'5',
            'id'=>'19FTT6435',
            'id'=>'19FTT6546',
            'id'=>'19FTT7564',
            'id'=>'19FTT2134',
            'id'=>'19FTT2133',

        ),
        array(
            'room'=>'1',
            'time'=>'2.30pm-3.30pm',
            'no_people'=>'3',
            'id'=>'20FTT3452',
            'id'=>'20FTT8434',
            'id'=>'20FTT5456',

        ),
        array(
            'room'=>'2',
            'time'=>'2.30pm-3.30pm',
            'no_people'=>'4',
            'id'=>'20FTT2732',
            'id'=>'20FTT7234',
            'id'=>'20FTT3472',
            'id'=>'20FTT5212',


        ),
        array(
            'room'=>'3',
            'time'=>'2.30pm-3.30pm',
            'no_people'=>'5',
            'id'=>'20FTT3923',
            'id'=>'20FTT7235',
            'id'=>'20FTT8244',
            'id'=>'20FTT0421',
            'id'=>'20FTT2193',
        ),
        array(
            'room'=>'4',
            'time'=>'2.30pm-3.30pm',
            'no_people'=>'3',
            'id'=>'20FTT3249',
            'id'=>'20FTT4024',
            'id'=>'20FTT0923',
        ),
        array(
            'room'=>'5',
            'time'=>"2.30pm-3.30pm",
            'no_people'=>'4',
            'id'=>'20FTT5702',
            'id'=>'20FTT0235',
            'id'=>'20FTT3214',
            'id'=>'20FTT5613',
        ),
        array(
            'room'=>'6',
            'time'=>"2.30pm-3.30pm",
            'no_people'=>'5',
            'id'=>'20FTT4983',
            'id'=>'20FTT2346',
            'id'=>'20FTT4589',
            'id'=>'20FTT7835',
            'id'=>'20FTT2398',

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