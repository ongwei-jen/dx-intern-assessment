<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    <title>Online Restaurant Reservation</title>
</head>

the form action is intialised where the data from the field inputs will be pass to the server.php file (which is the backend).
the line break is to separate the header area from the rest of the fields.
```
<body>
	<form action="server.php" method="post">
		<div class='container'>
			<div class="row">
				<h2>Reservation Form</h2>
				<p>Please fill up this form to place a reservation and help us serve you better.</p>
			</div>
			<hr>	
```   
the name row gets the user's full name (split into first and last for easier recognition)
this is a required field as a user has to fill up his/her name in order to link the name to the booking.
The label is there to let the user know which column is for first name and which is for last name.
```
			<div class="row1">
				<label class="Name">Full Name:</label>
				<input class="firstname" type="text" name="firstname" placeholder="John" required>
				<input class="lastname" type="text" name="lastname" placeholder="Doe" required>	
			</div>
			
			<div class="row">
				<label class="fLabel">First Name</label>
				<label class="lLabel">Last Name</label>
			</div>
```
this field gets the email address of the user. by doing this, a confirmation letter can be sent to the users email which maybe could 
has a QR code for easier checking at the restaurant (for future iterations). is also a required field.
```
			<div class="row1">
				<label class="Email">Email:</label>
				<input class="email" type="text" name="email" placeholder="JohnDoe@gmail.com" required>
			</div>
```
the phone field allows for the restaurant to call the user in any events. has a fixed pattern of 10 digits, from 0-9 (adapted for malaysian numbers). 
is also a required field.
```
			<div class="row1">
				<label class="Phone">Phone:</label>
				<input class="phone" type="text" name="phone" pattern="[0-9]{10}" placeholder="012 3456 789" required>
			</div>
```
number of guests lets the management know how many people to expect (guest is inclusive of the person that made the booking). min is 1 as there cannot
be no guests at the table and the guests are capped at 20 people. the user can type in the figure or use the arrow keys at the right to
increase or decrease the number. it is also a required field
```
			<div class="row1">
				<label class="Guests">Number of Guests:</label>
				<input class="guests" type="number" min="1" max="20" name="guests" required>
			</div>
```
the reservation type specifies what kind of reservation is being made so the staff can prepare of the occasion. if the user's type is not included, he/she
can choose other and specify the reservation type in the field below: If Other, Please Specify. it is also a required field, while the field below is not
required as users wont have to enter it if the type is already found in the reservation type field.
```
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
```
the reservation details specify the date and time of the reservation. it is required.
```
			<div class="row1">
				<label>Reservation Details:</label>
				<input class="details" name="details" type="datetime-local" required>
			</div>
```
the special requests field allows for users to specially request for something like the need of 3 baby chairs for 3 toddlers. it is not
required as not everyone has special requests.
```
			<div class="row1">
				<label>Special Requests:</label>
				<input class="requests" name="requests" type="text" placeholder="eg: need 3 baby chairs">
			</div>	
```
when all fields have been filled, the user can click the submit button where the data will be entered into the database
```
			<div>
                		<button type='submit'name="submit" value="redirect" class='btn btn-primary btn-block'>Submit</button>
           		</div>

		</div>
	</form>

</body>
</html>
```

