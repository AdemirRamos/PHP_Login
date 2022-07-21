<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="icon" type="image/x-icon" href="./Images/form.png">

	<style type="text/css">
		
		* {
			overflow: hidden;
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			background-image: url('./Images/p3.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
		}

		.marginBottom {
			margin-bottom: 15px;
		}

		.title {
			color: darkslateblue;
			font-weight: bolder;
			text-shadow: 1px 1px 1px black;
		}

		.register-form {
			width: 100vw;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}

		.field {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			border-radius: 15px;
			background-color: rgba(170, 170, 170, 0.5);
			width: 300px;
			height: 330px;
		}
		

		input {
			padding: 7px;
			border-radius: 15px;
		}

		a {
			margin-top: 15px;
			color: purple;
			font-weight: bolder;
		}

		.submit-button {
			width: 175px;
			border-radius: 15px;
			padding: 15px;
			background-color: burlywood;
			color: white;
			font-weight: bolder;
			text-shadow: 1px 1px 1px black;
			transition: all 1s ease;
		}

		.submit-button:hover {
			cursor: pointer;
			background-color: white;
			color: coral;
			text-shadow: 1px 1px 1px black;
			transition: all 1s ease;
		}

	</style>

</head>

<body>
	
	<form action="" method="post" class="register-form">
		
		<fieldset class="field">

			<h1 class="marginBottom title">Register</h1>

			<input type="text" name="new_username" placeholder="Enter your username here" class="marginBottom">
			<input type="password" name="new_password" placeholder="Enter you password here" class="marginBottom">
			<input type="submit" name="submit-data" value="Submit Data" class="marginBottom submit-button">

			<a href="index.php">Return To Login Page</a>

		</fieldset>

	</form>

</body>

</html>
