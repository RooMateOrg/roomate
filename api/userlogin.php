<?php
include '../config/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$role = $_POST['Role'];
	$email = $_POST['Email'];
	$password = $_POST['Password'];

	$sql = "SELECT * FROM users WHERE role='$role' AND email='$email' AND password='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "Login successful";

			setcookie('email', $email, time() + (86400 * 30), '/'); // Save email cookie for 30 days
			setcookie('userid', $row['id'], time() + (86400 * 30), '/'); // Save userid cookie for 30 days
			setcookie('role', $role, time() + (86400 * 30), '/'); // Save role cookie for 30 days
		}
	} else {
		echo "Login failed";
	}

	$conn->close();
}
?>