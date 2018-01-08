
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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>


<body>

        <form action="uf.php" method="get">
            <input type="hidden" name="addBox" value="true">
            <input class="btn teal" type="submit" value="Run me now!">
        </form>


		<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

		<img id="drag1" src="img_logo.png" draggable="true"
		ondragstart="drag(event)">

<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>

<?php

# Objects

$flame = $_GET["flame"];
$temp = $_GET["temp"];

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


