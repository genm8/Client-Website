<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Schedule Page</title>
</head>
<body>
  <table>
      <tr>
          <th>Date</th>
          <th>Opponenet</th>
          <th>Location</th>
          <th>Time</th>
      </tr>
      
      

   <?php
        if (($csvfile = fopen("sched.csv", "r")) !== FALSE) {
            while (($csvdata = fgetcsv($csvfile, 0, ",")) !== FALSE) {
                $error= '';
                $colcount = count($csvdata);
                //echo " count = $colcount <br>";
                if($colcount!=4) {
                    $error = 'column count incorrect';
                } else {
                    //if(!is_numeric($csvdata[0])) $error.='not a date, ';
                   //$date = date_parse($csvdata[0]);
                    //if (!($date["error_count"] == 0 && checkdate($date["month"], $date["day"], $date["year"]))) $error.='date format, ';
                    //if(!is_numeric($csvdata[3])) $error.='time, ';
                }
                if($error == '') {
                    echo "<tr>
                            <td>$csvdata[0]</td>
                            <td>$csvdata[1]</td>
                            <td>$csvdata[2]</td>
                            <td>$csvdata[3]</td>
                        </tr>      ";
                } else {
                    echo $error;
                }
                
                
            }
        }
    ?>
    
    
    
    </table>  
</body>
</html>










