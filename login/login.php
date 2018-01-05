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

	<style>
	input.fromInvalid::-webkit-input-placeholder {
		color: red;
	}
	</style>
	</head>

	<body>

		<div class="container">
			
			<div class="row"> 
		
				<div class="col s2"> <!--Center allignment stuff--> 
				</div>
				<div class="col s8"> 
					<div class="card orange darken-2 hoverable">
						<div class="card-content white-text">
						<h5>Log ind</h5>
					
						<form method="post" action="login.php">
							<div class="input-field">
								<input id="username_input" type="text" placeholder="Brugernavn" name="username" class="validate">
								<div class="input-field">
								<input id="password_input" type="password" name="password" placeholder="Adgangskode" class="validate">	

							<button type="submit" class="btn red lighten-1 col s12">Log ind</button>
							</div>
						</form>

					</div>
				</div>
			
				<div class="col s2"> <!--Center allignment stuff--> 
				</div>
			
			</div>

		</div>

<?php
	# define variables and set to empty values
	$usernamename = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["username"])) { # check wether the value of the key 'username' is empty or not
			echo "<script>var username_input = document.getElementById('username_input');username_input.placeholder = 'This field cant be empty';</script>"; # error message
	} else {
		$username = test_input($_POST["username"]);
	}

	if (empty($_POST["password"])) { # check wether the value of the key 'password' is empty or not
		echo "<script>var password_input = document.getElementById('password_input'); password_input.placeholder = 'This field cant be empty';</script>"; # error message
	} else {
		$password = test_input($_POST["password"]);
	}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

</body>
</html>
