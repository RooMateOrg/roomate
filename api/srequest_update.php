<?php
include '../config/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$requestid = $_POST['requestid'];

	$sql = "DELETE FROM srequests WHERE requestid = $requestid";

	if ($conn->query($sql) === TRUE) {
		echo "Request deleted successfully";
		header("Refresh: 1; url=" . $_SERVER['HTTP_REFERER']);
		header("Location: " . $_SERVER['HTTP_REFERER']);
		exit;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
