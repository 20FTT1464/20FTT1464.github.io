<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/base.css"></link>
</head>
<body>
    <link rel="stylesheet" href="assets/css/base.css"></link>
    <div class="top-container">&nbsp</div> 
        <div class="container">
            
            <?php
            
            $Bookers = array(
                array(
                    'room'=>'1',
                    'no of people'=>'3',
                    'student '=>'19FTT1199',
                    'student 1'=>'19FTT1199',
                    'student 2'=>'19FTT1199',
                    'time'=>'1.30pm-2.30pm',
                    
                    

                ),
                array(
                    'room'=>'2',
                    'no of people'=>'4',
                    'student 1'=>'19FTT4321',
                    'student 2'=>'19FTT4329',
                    'student 3'=>'19FTT9435',
                    'student 4'=>'19FTT9432',
                    'time'=>'1.30pm-2.30pm',
                    
                    

                ),
                array(
                    'room'=>'3',
                    'no of people'=>'5',
                    'student 1'=>'19FTT2124',
                    'student 2'=>'19FTT2366',
                    'student 3'=>'19FTT9034',
                    'student 4'=>'19FTT7456',
                    'student 5'=>'19FTT1234',
                    'time'=>'1.30pm-2.30pm',
                    
                    


                ),
                array(
                    'room'=>'4',
                    'no of people'=>'3',
                    'student 1'=>'19FTT4589',
                    'student 2'=>'19FTT9843',
                    'student 3'=>'19FTT8712',
                    'time'=>'1.30pm-2.30pm',
                    

                ),
                array(
                    'room'=>'5',
                    'no of people'=>'4',
                    'student 1'=>'19FTT9328',
                    'student 2'=>'19FTT2374',
                    'student 3'=>'19FTT0921',
                    'student 4'=>'19FTT9213',
                    'time'=>'1.30pm-2.30pm',
                    
                    

                ),
                array(
                    'room'=>'6',
                    'no of people'=>'5',
                    'student 1'=>'19FTT6435',
                    'student 2'=>'19FTT6546',
                    'student 3'=>'19FTT7564',
                    'student 4'=>'19FTT2134',
                    'student 5'=>'19FTT2133',
                    'time'=>'1.30pm-2.30pm',
                    
                    

                ),
                array(
                    'room'=>'1',
                    'no of people'=>'3',
                    'student 1'=>'20FTT3452',
                    'student 2'=>'20FTT8434',
                    'student 3'=>'20FTT5456',
                    'time'=>'2.30pm-3.30pm',
                    

                ),
                array(
                    'room'=>'2',
                    'no of people'=>'4',
                    'student 1'=>'20FTT2732',
                    'student 2'=>'20FTT7234',
                    'student 3'=>'20FTT3472',
                    'student 4'=>'20FTT5212',
                    'time'=>'2.30pm-3.30pm',
                    
                    


                ),
                array(
                    'room'=>'3',
                    'no of people'=>'5',
                    'student 1'=>'20FTT3923',
                    'student 2'=>'20FTT7235',
                    'student 3'=>'20FTT8244',
                    'student 4'=>'20FTT0421',
                    'student 5'=>'20FTT2193',
                    'time'=>'2.30pm-3.30pm',
                    
                    
                ),
                array(
                    'room'=>'4',
                    'no of people'=>'3',
                    'student 1'=>'20FTT3249',
                    'student 2'=>'20FTT4024',
                    'student 3'=>'20FTT0923',
                    'time'=>'2.30pm-3.30pm',
                    
                    
                ),
                array(
                    'room'=>'5',
                    'no of people'=>'4',
                    'student 1'=>'20FTT5702',
                    'student 2'=>'20FTT0235',
                    'student 3'=>'20FTT3214',
                    'student 4'=>'20FTT5613',
                    'time'=>"2.30pm-3.30pm",
                    
                    
                ),
                array(
                    'room'=>'6',
                    'no of people'=>'5',
                    'student 1'=>'20FTT2346',
                    'student 2'=>'20FTT4589',
                    'student 3'=>'20FTT7835',
                    'student 4'=>'20FTT2398',
                    'student 5'=>'20FTT4983',
                    'time'=>"2.30pm-3.30pm",
                    
                    
                    
                ),
                );

            echo '<pre>';
            // print_r($Bookers);
            // echo $Bookers[1]['firstname'];
            
            
                
            
            
            ?>
            
            <?php
                for ($i=0; $i < count($Bookers); $i++) { 
                    echo '<table border=1 width=900>';
                    foreach($Bookers[$i] as $bnum => $value) {
                        echo "
                        <tr>
                            <th>$bnum</th>
                            <td>$value</td>
                        </tr>
                        ";
                    }
                    echo'
                    <tr>
                        <th>select</th>
                        <td><input type="radio" name="radio" value="radio' . $i . '"></td>
                    </tr>
                    <br>
                    </table>
                    ';
                }
            ?>
            
            <input type="submit" name="Submit"
                        class="button" value="submit" />
        </div>
    </div>
</body>
</html>