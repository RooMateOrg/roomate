<?php
include '../config/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$propertyid = $_POST['propertyid'];
	$owner = $_POST['owner'];
	$userid = $_POST['userid'];
	$status = 'Pending';

	// Check if a record with the same data already exists
	$checkSql = "SELECT * FROM srequests WHERE propertyid = '$propertyid' AND userid = '$userid'";
	$checkResult = $conn->query($checkSql);

	if ($checkResult->num_rows > 0) {
		echo "A request with the same data already exists.";
	} else {
		$sql = "INSERT INTO srequests (propertyid, owner, userid, status) VALUES ('$propertyid', '$owner', '$userid', '$status')";

		if ($conn->query($sql) === TRUE) {
			echo "Request sent successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	$conn->close();
}
