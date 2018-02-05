<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';


	$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
	$phonenumber = mysqli_real_escape_string($conn,$_POST['phonenumber']);
	$emal = mysqli_real_escape_string($conn,$_POST['emal']);
	$address = mysqli_real_escape_string($conn,$_POST['address']);
	$eventtype = mysqli_real_escape_string($conn,$_POST['eventtype']);
	$eventdate = mysqli_real_escape_string($conn,$_POST['eventdate']);
	$eventtime = mysqli_real_escape_string($conn,$_POST['eventtime']);
	$guests = mysqli_real_escape_string($conn,$_POST['guests']);
	$venue = mysqli_real_escape_string($conn,$_POST['venue']);
	$music = mysqli_real_escape_string($conn,$_POST['music']);
	$photography = mysqli_real_escape_string($conn,$_POST['photography']);
	$catering = mysqli_real_escape_string($conn,$_POST['catering']);
	$customization = mysqli_real_escape_string($conn,$_POST['customization']);


	$sql = "INSERT INTO registration (firstname, lastname, phonenumber, email, address, eventtype, eventdate, eventtime, guests, venue, music, photography, catering, customization) VALUES ('$firstname', '$lastname', '$phonenumber', '$email', '$address', '$eventtype', '$eventdate', '$eventtime', '$guests', '$venue', '$music', '$photography', '$catering','$customization');";

	mysqli_query($conn, $sql);
	header("Location: ../registration.php?registraion=success");
	exit();


}else{
	header("Location: ../newEvent.php");
	exit();
}