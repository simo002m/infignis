¨
<!DOCTYPE html>
<html>
    <head>
        <title>Infignis - UF Haltegning</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import the Inconsolata font-->
        <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet'>
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>


    <body>

        <form action="uf.php" method="get">
            <input type="hidden" name="addBoks" value="true">
            <input type="submit" value="Run me now!">
        </form>

        <h1>Skriver</h1>



        <?php

        //OBJEKTER
        class infignisBoks
        {

            function retData($flameSensor, $tempSensor){
                
                
                
                echo "From infignisBoks<br>";
                echo "Flame = " . $flameSensor . "<br>";
                echo "Temp = " . $tempSensor . "<br>";
                echo "retData function end<br>";

            }
        }

        $boksSens = new infignisBoks;


        $flame = $_GET["flame"];
        $temp = $_GET["temp"];

        $boksSens->retData($flame, $temp);

        echo "<br>";

        echo "Flame sensor = " . $flame;
        echo "<br>";
        echo "Temperatur sensor = " . $temp;
        echo "<br>";


        $myfile = fopen("sensorLog.txt", "r+") or die("Unable to open file!");
        fwrite($myfile, "flame=");
        fwrite($myfile, $flame);
        fwrite($myfile, "\n");
        fwrite($myfile, "temp=");
        fwrite($myfile, $temp);
        
        $logText = fread($myfile);
        echo "Log Text = " . $logText;

        fclose($myfile);





        ?>

    </body>
</html>


