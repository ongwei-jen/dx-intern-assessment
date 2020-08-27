this is the php file that handles the backend, the data transfers and the address to which the data should go.
the session starts and the variables are initiated
```
<?php

session_start();

$firstname = "";
$lastname = "";
$email = "";
$phone = "";
$guests = "";
$resType = "";
$other = "";
$details = "";
$requests = "";
```
this line connects the form from the localhost to the reservations database
```
$db = mysqli_connect('localhost', 'root', '', 'reservations') or die ("cant connect");
```
fields of the form. this part of the code takes the inputs of each individual fields and stores them in the post array.
mysqli_real_escape_string is used to remove escape characters that could maybe cause security issues or other problems.
```
$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$guests = mysqli_real_escape_string($db, $_POST['guests']);
$resType = mysqli_real_escape_string($db, $_POST['resType']);
$other = mysqli_real_escape_string($db, $_POST['other']);
$details = mysqli_real_escape_string($db, $_POST['details']);
$requests = mysqli_real_escape_string($db, $_POST['requests']);
```
puts the data obtained from the form into each individual columns in the database. 
```
$query = "INSERT INTO user (firstname, lastname, email, phone, guests, resType, other, details, requests) VALUES ('$firstname', '$lastname', '$email', '$phone', '$guests', '$resType', '$other', '$details', '$requests')";

mysqli_query($db, $query);
$_SESSION['success'] = "Your Reservation Has Been Made";
```
if submit has been clicked, redirect to end.php (reservation confirmation page)
```
if (isset($_POST["submit"])) {
	header('location: end.php');
}
?>
```
