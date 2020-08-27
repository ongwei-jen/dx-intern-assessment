<!DOCTYPE html>
<html lang="eng">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<title>Confirmation</title>

	<style type="text/css">

		body {
			background-color: #e0e0eb;
		}
		.container {
			text-align: center;
			margin-top: 250px;
			font-size: 30px;
		}

		.btn {
			margin-top: 20px;
			padding: 14px 28px;
			background-color: #008CBA;
			border-radius: 4px;
			color: white;
			border: none;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			border: 2px solid #008CBA;
			transition-duration: 0.6s;
		}

		.btn:hover {
			background-color: #e0e0eb;
  			color: black;
		}

	</style>
</head>
<body>		
		<div class="container">
			<h1>Your Reservation Has Been Made!</h1>
			<h2>See You Then :)</h2>
			<form action="index.php">
				<button type="submit" class='btn'>Book Another Reservation</button>
			</form>
		</div>
</body>	
</html>
