<?php
include '../config/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['Name'];
	$role = $_POST['Role'];
	$phone = $_POST['Phone'];
	$email = $_POST['Email'];
	$password = $_POST['Password'];
	$confpassword = $_POST['ConfirmPassword'];

	$sql = "INSERT INTO users (name, role, phone, email, password) VALUES ('$name', '$role', '$phone', '$email', '$password')";

	if ($password === $confpassword) {
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	} else {
		echo "Passwords do not match";
	}

	$conn->close();
}
?>