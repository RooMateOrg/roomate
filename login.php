<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login | The Green Perch</title>

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
	if (isset($_COOKIE['role'])) {
		$role = $_COOKIE['role'];
		switch ($role) {
			case 'Student':
				header("Location: /greenperch");
				exit;
			case 'Landlord':
				header("Location: /greenperch/landlord.php");
				exit;
			case 'Warden':
				header("Location: /greenperch/warden.php");
				exit;
			case 'Admin':
				header("Location: /greenperch/admin.php");
				exit;
		}
	}

	include 'templates/navbar.html';
	?>

	<div class="flex containerBlock">
		<div class="flex flexCol container" style="padding-top: 40px;">

			<div class="flex flexRow card" style="color: var(--blackGrey); background: var(--white); height: 600px; width: 100%; border-radius: 15px;">

				<div style="height: 100%; width: 35%;">
					<img src="/greenperch/assets/images/temp.png" style="height: 100%; width: 100%; object-fit: cover; background-position: center; border-radius: 15px 0 0 15px;">
				</div>

				<div class="flex flexCol" style="color: var(--blackGrey); background: var(--white); height: calc(100% - 50px); width: calc(65% - 50px); padding: 25px; gap: 15px; border-radius: 0 15px 15px 0;">
					<form class="flex flexCol" style="height: 100%; width: 100%; gap: 30px;" action="/greenperch/api/userlogin.php" method="POST">
						<span class="flex flexCol" style="gap: 5px;">
							<h1 style="font-size: 24px; font-weight: 600;">Login</h1>
							<p style="font-size: 16px;">Login to your account</p>
						</span>

						<div class="flex flexCol" style="height: auto; width: 100%; gap: 20px;">
							<input type="email" name="Email" placeholder="Email" style="height: auto; width: calc(100% - 20px); padding: 10px; border: 1px solid var(--blackGrey); border-radius: 10px;" required>

							<input type="password" name="Password" placeholder="Password" style="height: auto; width: calc(100% - 20px); padding: 10px; border: 1px solid var(--blackGrey); border-radius: 10px;" required>
						</div>

						<button style="width: fit-content;" type="submit">Login</button>

						<p style="font-size: 14px;">New User? <a href="/greenperch/register.php" style="color: var(--accent2);">Register</a></p>
					</form>
				</div>

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