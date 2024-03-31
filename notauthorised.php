<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Not Authorised | The Green Perch</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/greenperch/assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<script src="/greenperch/assets/js/script.js" defer></script>

	<link rel="icon" href="/greenperch/assets/images/favicon.png">
</head>

<body>

	<?php
	include 'templates/navbar.html';
	?>

	<div class="flex containerBlock">
		<div class="flex flexCol container">

			<div class="flex flexCol" style="height: 500px; width: 100%; padding-top: 50px; align-items: center; justify-content: center; gap: 40px;">
				<div>
					<img src="/greenperch/assets/images/bird.png" alt="Not Authorised" style="height: 250px; width: 250px;">
				</div>

				<span class="flex flexCol" style="align-items: center; justify-content: center; gap: 10px;">
					<h1 style="font-weight: 600;">Not Authorised</h1>
					<p style="font-size: 20px;">Uh oh! Looks like you don't have permission to see this page.</p>
				</span>

				<a class="anchorBtn" href="/greenperch/login.php">Go to Login</a>
			</div>

		</div>
	</div>

	<?php
	include 'templates/footer.html';
	?>

	<!-- SCROLL-TO-TOP START =====================================================-->
	<button class="flex" id="toTopBtn" title="Scroll to Top">
		<i class="fa-solid fa-chevron-up"></i>
	</button>
	<!--======================================================= SCROLL-TO-TOP END -->

</body>

</html>