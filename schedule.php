<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Schedule Page</title>
</head>
<body>
   <?php
        if (($csvfile = fopen("sched.csv", "x")) !== FALSE) {
            while (($csvdata = fgetcsv($csvfile, 25, ",")) !== FALSE) {
                $error= '';
                $colcount = count($csvdata);
                echo '<tr>';
                if($colcount!=5) {
                    $error = 'column count incorrect';
                } else {
                    if(!is_numeric($csvdata[0])) $error.='error';
                    $date = date_parse($csvdata[3]);
                    if (!($date["error_count"] == 0 && checkdate($date["month"], $date["day"], $date["year"]))) $error.='error';
                    if(!is_numeric($csvdata[4])) $error.='error';
                }
                
                echo '</tr>';
            }
        }
    ?>
    
</body>
</html>










