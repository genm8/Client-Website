<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="client-web.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bungee" rel="stylesheet">
    <title>Schedule Page</title>

</head>

<body>
    <h1 id="h1">Bullard High Softball Schedule</h1>
    <div class="header">
        <nav>
            <ul class="nav">
                <li><a href="bhshome.php">Home</a></li>
                <li><a href="schedule.php">Schedules</a></li>
                <li><a href="youthprogram.php">Lil' Knights</a></li>
            </ul>
        </nav>
    </div>
    <div class="flex">
        <div class="sched">
            <h1>Schedule</h1>
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
                    echo "<div class='row'>
                            <div>$csvdata[0]</div>
                            <div>$csvdata[1]</div>
                            <div>$csvdata[2]</div>
                            <div>$csvdata[3]</div>
                        </div>      ";
                } else {
                    echo $error;
                }
                
                
            }
        }
    
    ?>
        </div>
        <div class="roster">
            <h1>Roster</h1>
            <?php
  
    if (($csvros = fopen("roster.csv", "r")) !== FALSE) {
            while (($csvter = fgetcsv($csvros, 0, ",")) !== FALSE) {
                $error= '';
                $colcount = count($csvter);
                //echo " count = $colcount <br>";
                if($colcount!=4) {
                    $error = 'column count incorrect';
                } else {
                    
                }
                    if($error == '') {
                    echo "<div class='row'>
                            <div>$csvter[0]</div>
                            <div>$csvter[1]</div>
                            <div>$csvter[2]</div>
                            <div>$csvter[3]</div>
                        </div>      ";
                } else {
                    echo $error;
                }
                
                
            }
        }
    ?>




        </div>
    </div>
    <hr>
    <footer>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, omnis cum dicta magni nulla nihil odio dolore, nobis maxime. Error assumenda, mollitia ea distinctio doloribus temporibus vitae corporis natus in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus amet nobis hic optio officiis quos voluptatibus id, itaque et odit reiciendis vero eum delectus totam sunt, ipsam odio commodi eligendi.</p>
    </footer>
</body>

</html>
