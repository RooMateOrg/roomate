<?php
include '../config/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['fullName'];
	$role = $_POST['role'];
	$phone = $_POST['telephone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO users (name, role, phone, email, password) VALUES ('$name', '$role', '$phone', '$email', '$password')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		header("Refresh: 1; url=" . $_SERVER['HTTP_REFERER']);
		header("Location: " . $_SERVER['HTTP_REFERER']);
		exit;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
