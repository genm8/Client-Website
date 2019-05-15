<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="client-web.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bungee" rel="stylesheet">
    <title>Schedule Page</title>
    <div id="navigation">
        <nav>
            <h1>Bullard High Softball Schedule</h1>
            <ul>
                <li><a href="bhshome.php">Home</a></li>
                <li><a href="schedule.php">Schedules</a></li>
                <li><a href="youthprogram.php">Lil' Knights</a></li>
            </ul>
        </nav>
    </div>
</head>
<body>
  <table>
      <tr>
          <th>Date</th>
          <th>Opponenet</th>
          <th>Location</th>
          <th>Time</th>
      </tr>
      
      
<div class="sched">
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
    if (($csvros = fopen("roster.csv", "r")) !== FALSE) {
            while (($csvter = fgetcsv($csvros, 0, ",")) !== FALSE) {
                $error= '';
                $colcount = count($csvter);
                //echo " count = $colcount <br>";
                if($colcount!=4) {
                    $error = 'column count incorrect';
                } else {
                    
                }
    
    ?>
      </div>
    
    
    </table>  

<hr>
<footer>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, omnis cum dicta magni nulla nihil odio dolore, nobis maxime. Error assumenda, mollitia ea distinctio doloribus temporibus vitae corporis natus in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus amet nobis hic optio officiis quos voluptatibus id, itaque et odit reiciendis vero eum delectus totam sunt, ipsam odio commodi eligendi.</p>
</footer>
</body>
</html>










