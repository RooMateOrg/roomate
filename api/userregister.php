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
			echo "User registered successfully";

			// Retrieve the user ID from the database
			$userId = $conn->insert_id;

			// Set the userid cookie for 30 days
			setcookie('userid', $userId, time() + (86400 * 30), '/');

			setcookie('email', $email, time() + (86400 * 30), '/'); // Save email cookie for 30 days
			setcookie('name', $name, time() + (86400 * 30), '/'); // Save name cookie for 30 days
			setcookie('role', $role, time() + (86400 * 30), '/'); // Save role cookie for 30 days

			switch ($role) {
				case 'Landlord':
					header("Location: /greenperch/landlord.php");
					exit;
				case 'Warden':
					header("Location: /greenperch/warden.php");
					exit;
				case 'Admin':
					header("Location: /greenperch/admin.php");
					exit;
				case 'Student':
					header("Location: /greenperch");
					exit;
			}
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	} else {
		echo "Passwords do not match";
	}

	$conn->close();
}
?>