<?php
session_start();
?>

<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="content/jquery/jquery-3.0.0.min.js"></script>
		<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/808114f81f.js"></script>

		<style>
			#map {
				width: 100%;
				height: 400px;
				background-color: grey;
			}
		</style>
	</head>
	
	<body>
		<?php
			include_once('header.php');
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Create University
						</div>
						
						<div class="panel-body">
							<form method="POST" />
								<div class="form-group">
									<label for="newUniversity-name">University Name</label>
									<input type="text" class="form-control" name="newUniversity-name" placeholder="University Name">
								</div>
								
								<div class="form-group">
									<label for="newUniversity-description">University Description</label>
									<textarea rows="5" class="form-control" name="newUniversity-description" placeholder="Description"></textarea>
								</div>
								
								<div>
									<label for="newUniversity-location">University Location</label>
									<div id="newUniversity-location">
										<div class="panel panel-danger">
											<?php
										echo "<div id='map'></div>";
										echo "<script>
											function initMap() {
												
												var uniLocation = {lat: 1, lng: 0};
												//change to center on uni latlong

												var mapDiv = document.getElementById('map');
												var map = new google.maps.Map(mapDiv, {
													center: uniLocation,
													zoom: 3
												});
												marker = new google.maps.Marker({position: uniLocation, map: map});
												google.maps.event.addListener(map, 'click', function(event) {
													marker.setMap(null)
													marker = new google.maps.Marker({position: event.latLng, map: map});
													position = marker.getPosition();
												});
											}
										</script>";
										echo "<script async defer
											src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA4J3mXl9mgqJGlQ1YgbDgqRMEbJDOc8pg&callback=initMap'>
										</script>";
									?>
										</div>
									</div>
								</div>
								<button class="btn btn-default" type="submit" name="login-button">Create University</button>
							</form>
							<?php
								if(!empty($_POST['newUniversity-name']) && !empty($_POST['newUniversity-description'])){
									$user = 'root';
									$password = '';
									$db = 'databaseproject';
									$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
									
									$universityName = $_POST['newUniversity-name'];
									$universityDescription = $_POST['newUniversity-description'];
									
									$sqlQuery = "INSERT INTO `locations` (`locationName`, `latitude`, `longitude`) VALUES ('$universityName', '2', '2')";
									$result = mysqli_query($link, $sqlQuery);
									
									if($result){
										$sqlQuery = "INSERT INTO `universities` (`universityName`, `locationName`, `description`, `domain`) VALUES ('$universityName', '$universityName', '$universityDescription', 'blah')";
										$result = mysqli_query($link, $sqlQuery);
										mysqli_close($link);
										if($result)
											echo "University $universityName was added";
										else
											echo "University $universityName was not added";
									}
									else{
										echo "University $universityName was not created!";
									}
									
								}
							?>
						</div>	
					</div>
				</div>
			</div>
			<div class='row'>
				<center>
					<a class="btn btn-primary" href="adminHome.php">Back to Admin Control Panel</a>
				</center>
			</div>
		</div>
		<?php
			include_once('footer.php');
		?>
	</body>
</html>