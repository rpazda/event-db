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
			include_once "header.php";
			$user = 'root';
			$password = '';
			$db = 'databaseproject';
			$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
			$userID = $_SESSION['userLoggedIn'];
			$sqlQuery = "SELECT `rsoName` FROM `rsos` WHERE `uid` = '$userID'";
			$result = mysqli_query($link, $sqlQuery);
			if(mysqli_num_rows($result) == 0)
			{
				mysqli_close($link);
				header('Location: noPermissions.php');
			}
		?>
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Create New Event
					</div>
					<form method="POST" />
						<div class="panel-body">
							
							<label>Event Type</label>
							<div class="radio">
								<label><input type="radio" name="optradio" value="publicEvent">Public Event</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio" value="privateEvent">Private Event</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio" value="rsoEvent">RSO Event</label>
							</div>
							
							<div class="form-group">
								<label for="newEvent-name">Event Name</label>
								<input type="text" class="form-control" name="eventName" placeholder="Event Name">
							</div>
							
							<div class="form-group">
								<label for="rso">RSO that your an Admin for : </label>
								<?php
									echo "<div class='dropdown'>";
									echo"<select name='rsoName'>";
									echo "<option size =100 ></option>";
									while($row = mysqli_fetch_array($result)){
										echo "<option value='".$row['rsoName']."'>".$row['rsoName']."</option>";
									}
									echo "</select>";
									echo"</div>";
								?>
							</div>
							
							<div class="form-group">
							<label for="meeting">Event Date and Time : <br></label>
							<input type="datetime-local" name="date">
								
							</div>
							
							<div class="form-group">
								<label for="newEvent-location">Event Location</label>
								
								<div class="well-sm">Select a location from the dropdown or select a new location on the map below</div>
								
								<?php
									$sqlQuery = "SELECT `locationName` FROM `locations` WHERE 1";
									$result = mysqli_query($link, $sqlQuery);
									echo "<div class='dropdown'>";
									echo"<select name='locationName'>";
									echo "<option size =100 ></option>";
									while($row = mysqli_fetch_array($result)){
										echo "<option value='".$row['locationName']."'>".$row['locationName']."</option>";
									}
									echo "</select>";
									echo"</div>";
								?>
								
								<div class="well">
								
									<div class="form-group">
										<label for="newEvent-name">New Event Location Name</label>
										<input type="text" class="form-control" id="newEvent-newLocation" placeholder="Event Location Name">
									</div>
									<?php
										echo "<div id='map'></div>";
										
										
										echo "<script>
											function initMap() {
												
												var uniLocation = {lat: 1, lng: 0};
												//change to center on uni latlong

												var mapDiv = document.getElementById('map');
												var map = new google.maps.Map(mapDiv, {
													center: uniLocation,
													zoom: 11
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
								
							<div class="form-group">
								<label for="newEvent-description">Event Description</label>
								<textarea rows="5" class="form-control" name="EventDescription" placeholder="Description"></textarea>
							</div>
							<div class="form-group">
							<label for="newEvent-category">Event Category</label>
							<?php
								$sqlQuery = "SELECT * FROM `eventcategory` WHERE 1";
								$result = mysqli_query($link, $sqlQuery);
								echo "<div class='dropdown'>";
								echo"<select name='eventcategory'>";
								echo "<option size =100 ></option>";
								while($row = mysqli_fetch_array($result)){
									echo "<option value='".$row['eventType']."'>".$row['eventType']."</option>";
								}
								echo "</select>";
								echo"</div>";
							?>
							</div>
							
							<div class="form-group">
								<label for="newEvent-contact-name">Event Contact Information</label>
								<input type="text" class="form-control" name="newEvent-contact-name" placeholder="Contact Name">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" name="newEvent-contact-phone" placeholder="Contact Phone Number">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" name="newEvent-contact-email" placeholder="Contact Email">
							</div>
							<center><button class='btn btn-default' type='submit' name='createEvent'>Create Event</button></center>
						</div>
					</form>
					<?php			
						if((!empty($_POST['eventName']) && !empty($_POST['locationName']) &&
						!empty($_POST['date']) && !empty($_POST['eventcategory'])) && 
						(($_POST['optradio'] == "publicEvent") || 
						($_POST['optradio'] == "privateEvent") || 
						($_POST['optradio'] == "rsoEvent"))){
							$user = 'root';
							$password = '';
							$db = 'databaseproject';
							$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
							$eventName = $_POST['eventName'];
							$location = $_POST['locationName'];
							$eventDate = $_POST['date'];
							$eventRSOName = $_POST['rsoName'];
							$eventCategory = $_POST['eventcategory'];
							$eventDespcription = $_POST['EventDescription'];
							$eventContactName = $_POST['newEvent-contact-name'];
							$eventContactPhone = $_POST['newEvent-contact-phone'];
							$eventContactEmail = $_POST['newEvent-contact-email'];
							$uid = $_SESSION['userLoggedIn'];
							$sqlQuery = "SELECT * FROM `users` where `uid` = '$uid'";
							$result = mysqli_query($link, $sqlQuery);
							$userInfo = mysqli_fetch_array($result);
							$currentUniversity = $userInfo['universityName'];
							
							if(($_POST['optradio']) == "publicEvent"){
								$sqlQuery = "INSERT INTO `events`(`eventName`, `eventTime`, `universityName`, `locationName`, `category`, `description`, `contactName`, `contactPhone`, `contactEmail`) VALUES ('$eventName','$eventDate','$currentUniversity','$location','$eventCategory','$eventDespcription','$eventContactName','$eventContactPhone','$eventContactEmail')";
								$result = mysqli_query($link, $sqlQuery);
								if($result){
									echo "Event Created and now awaiting approval!";
								}
								else{
									echo "The event was not created please check the your input and try again.";
								}
							}
							else if(($_POST['optradio'] == "rsoEvent") && !empty($eventRSOName)){
								$sqlQuery = "INSERT INTO `events`(`eventName`, `eventTime`, `universityName`, `locationName`, `category`, `description`, `contactName`, `contactPhone`, `contactEmail`, `isApproved`, `isRSO`, `rsoName`) VALUES ('$eventName','$eventDate','$currentUniversity','$location','$eventCategory','$eventDespcription','$eventContactName','$eventContactPhone','$eventContactEmail', 1, 1,'$eventRSOName')";
								$result = mysqli_query($link, $sqlQuery);
								if($result){
									echo "Event Created and now awaiting approval!";
								}
								else{
									echo "The event was not created please check the your input and try again.";
								}
							}
							else{
								$sqlQuery = "INSERT INTO `events`(`eventName`, `eventTime`, `universityName`, `locationName`, `category`, `description`, `contactName`, `contactPhone`, `contactEmail`, `isPrivate`) VALUES ('$eventName','$eventDate','$currentUniversity','$location','$eventCategory','$eventDespcription','$eventContactName','$eventContactPhone','$eventContactEmail',1)";
								$result = mysqli_query($link, $sqlQuery);
								if($result){
									echo "Event Created and now awaiting approval!";
								}
								else{
									echo "The event was not created please check the your input and try again.";
								}
							}
							mysqli_close($link);
						}
					?>
				</div>	
			</div>
		</div>
		<?php
			include_once "footer.php";
		?>
	</body>
</html>