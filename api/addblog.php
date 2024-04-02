<?php
include '../config/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$title = $_POST['blogName'];
	$category = $_POST['blogCategory'];
	$image = $_POST['blogImage'];
	$description = $_POST['blogDescription'];
	$url = $_POST['blogLink'];

	$sql = "INSERT INTO blogs (title, category, image, description, url) VALUES ('$title', '$category', '$image', '$description', '$url')";

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
