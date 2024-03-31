<?php
include '../config/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$email = $_POST['Email'];
	$password = $_POST['Password'];

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "Login successful";

			setcookie('email', $email, time() + (86400 * 30), '/'); // Save email cookie for 30 days
			setcookie('userid', $row['id'], time() + (86400 * 30), '/'); // Save userid cookie for 30 days
			setcookie('name', $row['name'], time() + (86400 * 30), '/'); // Save name cookie for 30 days
			setcookie('role', $row['role'], time() + (86400 * 30), '/'); // Save role cookie for 30 days

			switch ($row['role']) {
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
		}
	} else {
		echo "Login failed";
	}

	$conn->close();
}
?>