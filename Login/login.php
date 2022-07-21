<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login (PHP)</title>
	<link rel="icon" type="image/x-icon" href="./Images/form.png">

	<style type="text/css">
		
		* {
			overflow: hidden;
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			background-image: url('./Images/p1.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
		}

		.marginBottom {
			margin-bottom: 15px;
		}

		.title {
			color: darkslateblue;
			text-shadow: 1px 1px 1px #111;
			font-weight: bolder;
			font-family: "Times New Roman";
		}

		.login-form {
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

		.submit-button {
			width: 175px;
			border-radius: 15px;
			padding: 15px;
			background-color: darkslateblue;
			color: white;
			font-weight: bolder;
			text-shadow: 1px 1px 1px black;
			transition: all 1s ease;
		}

		.submit-button:hover {
			cursor: pointer;
			background-color: white;
			color: darkslateblue;
			transition: all 1s ease;
		}

		.reset-button {
			width: 175px;
			border-radius: 15px;
			padding: 15px;
			background-color: #c00;
			color: white;
			font-weight: bolder;
			text-shadow: 1px 1px 1px black;
			transition: all 1s ease;
		}

		.reset-button:hover {
			cursor: pointer;
			background-color: white;
			color: #c00;
			transition: all 1s ease;
		}

		.link {
			color: purple;
			font-weight: bolder;
			text-decoration: none;
		}

		.link:hover {
			text-decoration: underline;
		}

	</style>

</head>

<body>
	
	<?php

		session_start();

		if (isset($_POST['username'], $_POST['password'])) {
			if ($_POST['username'] == 'Ademir' && $_POST['password'] = '123') {
				$_SESSION['username'] = $_POST['username'];
				header('Location: home.php');
			}
		}

		if (isset($_GET['error'])) {
			$error = '<h1>It\'s necessary to login to enter.</h1>';
		}

	?>

	<form action="" method="post" class="login-form">
		
		<fielset class="field">

			<h1 class="marginBottom title">PHP Login</h1>

			<input
				type="text"
				name="username"
				autocomplete="name"
				placeholder="Enter your username here"
				class="marginBottom"
				required
			>

			<input
				type="password"
				name="password"
				autocomplete="current-password"
				placeholder="Enter your password here"
				class="marginBottom"
				required
			>

			<input type="submit" name="login" value="Login" class="marginBottom submit-button" title="Click here to login.">

			<input
				type="reset"
				name="reset"
				value="Reset"
				class=" marginBottom reset-button"
				title="Click here erase all the inputs."
			>

		</fieldset>

	</form>

	<a href="register.php" class="link">Register</a>

	<div>

		<?php echo $error ?? ''; ?>

	</div>

</body>

</html>
