<!DOCTYPE html>
<html>
<head>
	<title>Infignis - Login</title>
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

	<div class="container">
		
		<div class="row"> 
	
			<div class="col s2"> 
			</div>
			<div class="col s8"> 
				<div class="card orange darken-2 hoverable">
					<div class="card-content white-text">
					<h5>Log ind</h5>
				
					<form action="login.php" method="post">
						<div class="input-field">
							<input type="text" placeholder="Brugernavn" name="username" class="validate">
							<div class="input-field">
							<input type="password" name="password" placeholder="Adgangskode" class="validate">	
					<button type="submit" class="btn red lighten-1 col s12">Log ind</button>
						</div>
					</form>

				</div>
			</div>
		
			<div class="col s2">
			</div>
		
		</div>

	</div>

<?php

$target_file = fopen("users", "r");
echo fgets($target_file);

?>

</body>
</html>
