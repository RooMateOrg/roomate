<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Find Your Perfect Fit For The University Life | The Green Perch</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/greenperch/assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<script src="/greenperch/assets/js/script.js" defer></script>

	<link rel="icon" href="/greenperch/assets/images/favicon.png">

	<style>
		#locations {
			list-style-type: none;
			padding: 0;
			margin: 0;
		}
		#locations li {
			padding: 15px;
			border-bottom: 1px solid #CCCCCC;
			cursor: pointer;
		}
		#locations li:last-child {
			border-bottom: none;
		}
		#locations li:hover {
			background-color: #F6F6F6;
		}
	</style>
</head>

<body>

	<?php
	include 'templates/navbar.html';
	include 'templates/mapview/header.html';
	?>

	<div class="flex containerBlock">
		<div class="flex flexCol container">

			<div class="flex flexCol" style="height: auto; width: 100%; gap: 35px;">
				<h1 style="font-weight: 600;">Map View</h1>

				<div class="flex flexRow" style="width: 100%;">
					<div id="sidebar" style="height: auto; width: 25%; background: var(--white); border-radius: 15px 0 0 15px; overflow: auto;">
						<div style="height: 600px; width: 100%;">

							<?php
							$locations = [
								['name' => 'Location 1', 'lat' => 48.8583701, 'lng' => 2.291901],
								['name' => 'Location 2', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 3', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 4', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 5', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 6', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 7', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 8', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 9', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 10', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 11', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 12', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 13', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 14', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 15', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 16', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 17', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 18', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 19', 'lat' => -34.397, 'lng' => 150.644],
								['name' => 'Location 20', 'lat' => -34.397, 'lng' => 150.644],
							];

							echo '<ul id="locations">';
							foreach ($locations as $location) {
								echo '<li data-lat="' . $location['lat'] . '" data-lng="' . $location['lng'] . '">' . $location['name'] . '</li>';
							}
							echo '</ul>';
							?>

						</div>
					</div>

					<div id="map" style="height: 600px; width: 75%; border-radius: 0 15px 15px 0;"></div>
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

	<script>
		var map;
		var markers = [];

		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: {
					lat: -34.397,
					lng: 150.644
				},
				zoom: 8
			});

			var locations = document.querySelectorAll('#locations li');
			locations.forEach(function(location) {
				var lat = parseFloat(location.getAttribute('data-lat'));
				var lng = parseFloat(location.getAttribute('data-lng'));
				var marker = new google.maps.Marker({
					position: {
						lat: lat,
						lng: lng
					},
					map: map
				});
				markers.push(marker);
			});
		}

		var locationsList = document.getElementById('locations');
		locationsList.addEventListener('click', function(e) {
			if (e.target.tagName === 'LI') {
				var index = Array.prototype.indexOf.call(locationsList.children, e.target);
				var marker = markers[index];
				map.setCenter(marker.getPosition());
			}
		});
	</script>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD57YgASGL9lgd-aHJXiQwJ1RKMjNtZfwU&callback=initMap"></script>

</body>

</html>