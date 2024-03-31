<?php
if (isset($_COOKIE['email'])) {
	setcookie('email', '', time() - 3600, '/');
	setcookie('name', '', time() - 3600, '/');
	setcookie('role', '', time() - 3600, '/');
	setcookie('userid', '', time() - 3600, '/');
	header('Location: /greenperch');
} else {
	header('Location: /greenperch');
}
?>