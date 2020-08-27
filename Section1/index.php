
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    <title>Online Restaurant Reservation</title>
</head>

<body>
	<form action="server.php" method="post">
		<div class='container'>
			<div class="row">
				<h2>Reservation Form</h2>
				<p>Please fill up this form to place a reservation and help us serve you better.</p>
			</div>
			<hr>	
			
			<div class="row1">
				<label class="Name">Full Name:</label>
				<input class="firstname" type="text" name="firstname" placeholder="John" required>
				<input class="lastname" type="text" name="lastname" placeholder="Doe" required>	
			</div>

			<div class="row">
				<label class="fLabel">First Name</label>
				<label class="lLabel">Last Name</label>
			</div>

			<div class="row1">
				<label class="Email">Email:</label>
				<input class="email" type="text" name="email" placeholder="JohnDoe@gmail.com" required>
			</div>

			<div class="row1">
				<label class="Phone">Phone:</label>
				<input class="phone" type="text" name="phone" pattern="[0-9]{10}" placeholder="012 3456 789" required>
			</div>

			<div class="row1">
				<label class="Guests">Number of Guests:</label>
				<input class="guests" type="number" min="1" max="20" name="guests" required>
			</div>

			<div class="row1">
				<div class="select">
					<label class="Res">Reservation Type:</label>
					<select class="res" name="resType" id="resType" required="">
						<option value="">Please Select An Option:</option>
						<option value="Lunch">Lunch</option>
						<option value="Dinner">Dinner</option>
						<option value="Birthday/Anniversary">Birthday/Anniversary</option>
						<option value="Wedding">Wedding</option>
						<option value="Coporate">Coporate</option>
						<option value="Private">Private</option>
						<option value="Other">Other</option>
					</select>
				</div>
			</div>

			<div class="row1">
				<label class="Other">If Other, Please Specify:</label>
				<input class="other" type="text" name="other" placeholder="eg: Proposal">
			</div>

			<div class="row1">
				<label>Reservation Details:</label>
				<input class="details" name="details" type="datetime-local" required>
			</div>

			<div class="row1">
				<label>Special Requests:</label>
				<input class="requests" name="requests" type="text" placeholder="eg: need 3 baby chairs">
			</div>	

			<div>
                <button type='submit'name="submit" value="redirect" class='btn btn-primary btn-block'>Submit</button>
            </div>

		</div>
	</form>

</body>
</html>

