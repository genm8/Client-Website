<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="client-web.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bungee" rel="stylesheet">
    <title>Schedules</title>

</head>

<body>
    <h1 id="h1">Bullard High Softball Schedule</h1>
    <div class="header">
           <nav >
           <a href="bhshome.php">
               <img id="logo" src="images/99990b86-769c-4471-89cb-de9285fe0647_200x200.png" alt=""></a>
            <ul class="nav">
                <li><a href="youthprogram.php">Lil' Knights</a></li>
                <li><a href="schedule.php">Schedules</a></li>
                <li><a href="bhshome.php">Home</a></li>
                
              
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

<footer class="margin-top">
        <div class="footercomp ">
            <div class="map margin-top">
                <h2>Bullard Softball Location and Contact </h2>

               <p>Follow Bullard Softball on social media.</p>
                <a href="https://twitter.com/BHSKnights_SB" target="_blank"><img src="images/twitter.png" alt=""> </a>

                <a href="https://www.facebook.com/BYSLFresno/" target="_blank">
                    <img src="images/facebook.png" alt="">
                </a>
            </div>


            <div class="mapouter margin-top">
                <div class="gmap_canvas"><iframe width="341" height="234" id="gmap_canvas" src="https://maps.google.com/maps?q=bullard%20high%20school%20&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 234px;
                        width: 341px;
                        margin-bottom: 2%;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 234px;
                        width: 341px;
                    }

                </style>
            </div>
        </div>
    </footer>
</body>
</html>

