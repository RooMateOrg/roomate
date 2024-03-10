<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Mapview | The Green Perch</title>

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
								['name' => 'NSBM Green University Town Hostel Complex', 'placeId' => 'ChIJ-9uPlHZS4joRP6jpodvXrIk'],
								['name' => 'M&M Hostel (Boys)', 'placeId' => 'ChIJobkzO3pS4joR23ZqGLhkGK8'],
								['name' => 'DVS Boys Hostel', 'placeId' => 'ChIJq1sRXb9T4joR_zjZV6LBDeQ'],
								['name' => 'Venaya Boys Hostel', 'placeId' => 'ChIJNR9SPSNT4joRTYUe6u03M5Y'],
								['name' => 'Bodima', 'placeId' => 'ChIJl0aO0iFT4joRRdD_j7K9Sas'],
								['name' => 'NSBM Green University', 'placeId' => 'ChIJVVVVBTtS4joRiPT2mc00bFQ'],
								['name' => 'NSBM Green University', 'placeId' => 'ChIJVVVVBTtS4joRiPT2mc00bFQ'],
								['name' => 'NSBM Green University', 'placeId' => 'ChIJVVVVBTtS4joRiPT2mc00bFQ'],
								['name' => 'NSBM Green University', 'placeId' => 'ChIJVVVVBTtS4joRiPT2mc00bFQ'],
								['name' => 'NSBM Green University', 'placeId' => 'ChIJVVVVBTtS4joRiPT2mc00bFQ'],
							];

							echo '<ul id="locations">';
							foreach ($locations as $location) {
								echo '<li data-place-id="' . $location['placeId'] . '">' . $location['name'] . '</li>';
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
					lat: 6.8213291,
					lng: 80.0389926
				},
				zoom: 14
			});

			var service = new google.maps.places.PlacesService(map);

			var locations = document.querySelectorAll('#locations li');
			locations.forEach(function(location) {
				var placeId = location.getAttribute('data-place-id');
				service.getDetails({
					placeId: placeId
				}, function(place, status) {
					if (status === google.maps.places.PlacesServiceStatus.OK) {
						var marker = new google.maps.Marker({
							map: map,
							position: place.geometry.location
						});
						markers.push(marker);
					}
				});
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

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD57YgASGL9lgd-aHJXiQwJ1RKMjNtZfwU&callback=initMap&libraries=places" async defer></script>

</body>

</html>