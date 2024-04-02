<?php
include '../config/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$id = $_POST['id'];
	$status = $_POST['status'];

	$sql = "UPDATE properties SET status = '$status' WHERE id = $id";

	if ($conn->query($sql) === TRUE) {
		echo "Property rejected successfully";
		header("Refresh: 1; url=" . $_SERVER['HTTP_REFERER']);
		header("Location: " . $_SERVER['HTTP_REFERER']);
		exit;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
