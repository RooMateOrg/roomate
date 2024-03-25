<?php
include '../config/dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['propertyName'];
	$type = '2 Person';
	$description = $_POST['description'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$beds = $_POST['beds'];
	$bathrooms = $_POST['bathrooms'];
	$bedrooms = $_POST['bedrooms'];
	$sqft = '300';
	$availability = $_POST['availability'];
	$placeid = $_POST['placeID'];
	$image1 = $_POST['propertyImage1'];
	$image2 = $_POST['propertyImage2'];
	$image3 = $_POST['propertyImage3'];
	$image4 = $_POST['propertyImage4'];
	$status = 'Pending';

	$sql = "INSERT INTO properties (name, type, description, category, price, beds, bathrooms, bedrooms, sqft, availability, placeid, image1, image2, image3, image4, status) VALUES ('$name', '$type', '$description', '$category', '$price', '$beds', '$bathrooms', '$bedrooms', '$sqft', '$availability', '$placeid', '$image1', '$image2', '$image3', '$image4', '$status')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
