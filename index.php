<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>This is the main page</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/roomate/assets/css/style.css">

	<script src="/roomate/assets/js/script.js" defer></script>
</head>

<body>

<?php
include 'templates/navbar.html';
include 'templates/header.html';
?>

	<div class="flex containerBlock">
		<div class="flex flexCol container">

		<?php
		include 'templates/sample.html';
		?>

		</div>
	</div>

<?php
include 'templates/footer.html';
?>

</body>

</html>