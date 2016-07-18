<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="jquery-3.0.0.js"></script>
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
		?>
	
		<div class="container-fluid">
		
			<div class="row">
				
				<div class="col-md-6 col-md-offset-3">
				
					<div class="panel panel-primary">
					
						<div class="panel-heading">
							Create New Event
						</div>
						
						<div class="panel-body">
							
							<label>Event Type</label>
							<div class="radio">
								<label><input type="radio" name="optradio">Public Event</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio">Private Event</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio">RSO Event</label>
							</div>
							
							<div class="form-group">
								<label for="newEvent-name">Event Name</label>
								<input type="text" class="form-control" id="newEvent-name" placeholder="Event Name">
							</div>
							
							<div class="form-group">
								<label for="newEvent-time">Event Date and Time</label>
								
								
							</div>
							
							<div class="form-group">
								<label for="newEvent-location">Event Location</label>
								<br />
								<div class="well-sm">Select a location from the dropdown or select a new location on the map below</div>
								
								<div class="dropdown" style="margin-bottom: 10px;">
									<button class="btn btn-default dropdown-toggle" type="button" id="location-select" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										Location
										<span class="caret"></span>
									</button>
									
									<ul class="dropdown-menu" aria-labelledby="location-select">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#test">Separated link</a></li>
									</ul>
								</div>
								<h4>     or</h4>
								<div class="well">
								
									<div class="form-group">
										<label for="newEvent-name">New Event Location Name</label>
										<input type="text" class="form-control" id="newEvent-newLocation" placeholder="Event Location Name">
									</div>
								
									<div id="map">
									</div>
									
									<script>
										function initMap() {
											
											var uniLocation = {lat: 28.5973432, lng: -81.1911728};
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
									</script>
									<script async defer
										src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4J3mXl9mgqJGlQ1YgbDgqRMEbJDOc8pg&callback=initMap">
									</script>
								</div>
							</div>
							
							<div class="form-group">
								<label for="newEvent-description">Event Description</label>
								<textarea rows="5" class="form-control" id="newEvent-description" placeholder="Description"></textarea>
							</div>
							
							<div class="form-group">
								<label for="newEvent-category">Event Category</label>
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" id="category-select" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										Category
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="category-select">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</div>
							</div>
							
							<div class="form-group">
								<label for="newEvent-contact-name">Event Contact Information</label>
								<input type="text" class="form-control" id="newEvent-contact-name" placeholder="Contact Name">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" id="newEvent-contact-phone" placeholder="Contact Phone Number">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" id="newEvent-contact-email" placeholder="Contact Email">
							</div>
							
						</div>
					
					</div>
					
				</div>
				
			</div>
			
			<div class="row">
				<center>
					<a href="home.php" class="btn btn-primary">Back to Events</a>
				</center>
			</div>
		
		</div>
		
		<?php
			include_once "footer.php";
		?>
		
	</body>
	
</html>