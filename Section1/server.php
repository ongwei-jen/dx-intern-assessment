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

$db = mysqli_connect('localhost', 'root', '', 'reservations') or die ("cant connect");

$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$guests = mysqli_real_escape_string($db, $_POST['guests']);
$resType = mysqli_real_escape_string($db, $_POST['resType']);
$other = mysqli_real_escape_string($db, $_POST['other']);
$details = mysqli_real_escape_string($db, $_POST['details']);
$requests = mysqli_real_escape_string($db, $_POST['requests']);

$query = "INSERT INTO user (firstname, lastname, email, phone, guests, resType, other, details, requests) VALUES ('$firstname', '$lastname', '$email', '$phone', '$guests', '$resType', '$other', '$details', '$requests')";

mysqli_query($db, $query);
$_SESSION['success'] = "Your Reservation Has Been Made";

if (isset($_POST["submit"])) {
	header('location: end.php');
}
?>
