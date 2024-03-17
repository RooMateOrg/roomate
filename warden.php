<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Dashboard - Warden | The Green Perch</title>

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

		<h1 style="color: var(--accent2); font-weight: 600; padding-top: 50px;">
			Hello 
			<?php 
				if(isset($_SESSION['user'])){
					echo $_SESSION['user']['name'];
				} else {
					echo "User";
				}
			?>
		</h1>

		<?php
		include 'templates/warden/requests.html';
		include 'templates/warden/mapview.html';
		include 'templates/warden/viewlandlords.html';
		?>

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