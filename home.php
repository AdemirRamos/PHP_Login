<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="icon" type="image/x-icon" href="./Images/form.png">

	<style type="text/css">
		
		* {
			overflow: hidden;
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			background-image: url('./Images/p2.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			background-position: bottom;
		}

		.background {
			width: 100vw;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}

		.title {
			margin-bottom: 15px;
			color: #ddd;
			text-shadow: 2px 2px 2px black;
			font-weight: bolder;
			transition: all 1s ease;
		}

		.title:hover {
			color: white;
			transition: all 1s ease;
		}

		.logout {
			text-decoration: none;
			color: purple;
			font-weight: bolder;
		}

		.logout:hover {
			text-decoration: underline;
		}

	</style>

</head>

<body>
	
	<main class="background">
		
		<h1 class="title">Welcome, user!</h1>
		<a href="logout.php" class="logout">Logout</a>

	</main>

</body>

</html>
