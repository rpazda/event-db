<?php
	session_start();
	$userID = $_SESSION['userLoggedIn'];
	if(!empty($_GET['eventName']) && !empty($_GET['eventTime']) && !empty($_GET['locationName'])){
		$eventName = $_GET['eventName'];
		$eventTime = $_GET['eventTime'];
		$locationName = $_GET['locationName'];
		$time = explode('T', $eventTime);
	}
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
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				
					<div class="panel panel-primary">
					
						<div class="panel-heading">
							Event Details
						</div>
						
						<div class="panel-body">
							<?php
								$user = 'root';
								$password = '';
								$db = 'databaseproject';
								$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
								$sqlQuery = "SELECT* FROM `events` WHERE `eventTime` = '$eventTime' AND `locationName` = '$locationName'";
								$result = mysqli_query($link, $sqlQuery);
								$eventInfo = mysqli_fetch_array($result);
								
								//This is the Event Name code!
								echo "	<div>
											<label>Event Name</label>
										</div>
										<div>
											".$eventInfo['eventName']."
										</div>";
								
								//This is the Event location code with google maps code!
								echo "	<div>
											<label>Event Location</label>
										</div>";
								echo "	<div>
											".$eventInfo['locationName']."
										</div>
										<div id='map'></div>";
									$sqlQuery = "SELECT* FROM `locations` WHERE `locationName` = '$locationName'";
									$result2 = mysqli_query($link, $sqlQuery);
									$locationResult = mysqli_fetch_array($result2);
									echo "	<script>
												function initMap() {
													
													var uniLocation = {lat: ".$locationResult['latitude'].", lng: ".$locationResult['longitude']."};
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
									echo "	<script async defer
												src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA4J3mXl9mgqJGlQ1YgbDgqRMEbJDOc8pg&callback=initMap'>
											</script>";
											
								//This is the Event Description code!
								echo "<div>
									<label>Event Description</label>
									</div>";
								echo "<div>".$eventInfo['description']."</div>";
								
								//This is the Event Category code!
								echo "	<div>
											<label>Event Category</label>
										</div>
										<div>
											".$eventInfo['category']."
										</div>";
								
								//This is the Event Contact Information code!
								if($eventInfo['rsoName'] != NULL)
								{
									echo "	<div>
												<label>Hosting RSO</label>
											</div>";
									echo "<div>".$eventInfo['rsoName']."</div>";
								}
								
								//This is the Event Contact Information code!								
								echo "	<div>
											<label>Event Contact Information</label>
										</div>";
								echo "<div><label>Contact Name</label></div>";
								echo "<div>".$eventInfo['contactName']."</div>";
								echo "<div><label>Contact Phone</label></div>";
								echo "<div>".$eventInfo['contactPhone']."</div>";
								echo "<div><label>Contact Email</label></div>";
								echo "<div>".$eventInfo['contactEmail']."</div>";
										
								//This is the Event Rating Information code!
								// This the user rating input.
								echo "	<form method='POST'/>
											<div>
												<label>Rating</label>
											</div>";
											$i = 1;
								echo "<div class='radio'>";
								while($i <=5 )
								{
									echo "<label><input type='radio' name='optradio' value='$i'>$i</label>&emsp;";
									$i++;
								}
								echo "</div>";
								echo "	<div>
										<label>Comments</label>
										</div>
										<div>
											<textarea rows='4' cols='75' name='comment'></textarea>
										</div>
										<br>
										<div>
											<button class='btn btn-primary' type='submit' name='commentButton'>Comment</button>
										</div>
										</form>";
								if(!empty($_POST['optradio']))
								{
									$rating = $_POST['optradio'];
									$sqlQuery = "INSERT INTO `rating` (`uid`, `eventName`, `rating`, `eventTime`) VALUES ('$userID', '".$eventInfo['eventName']."', '$rating', CURRENT_TIMESTAMP);";
									$result3 = mysqli_query($link, $sqlQuery);
									if(!$result3)
									{
										$sqlQuery = "UPDATE `rating` SET `rating`= '$rating' WHERE `uid` = '$userID' AND `eventName` = '".$eventInfo['eventName']."'";
										$result3 = mysqli_query($link, $sqlQuery);
									}
								}
								
								//This is the Event Comments Information code!
								if(!empty($_POST['comment']))
								{
									$comment = $_POST['comment'];
									$sqlQuery = "INSERT INTO `comments` (`uid`, `eventName`, `createdOn`, `userComment`) VALUES ('$userID', '".$eventInfo['eventName']."', CURRENT_TIMESTAMP, '$comment')";
									$result3 = mysqli_query($link, $sqlQuery);
								}
								
								
								echo "	<div class='row'>";
								$sqlQuery= "SELECT AVG(`rating`) AS Ave FROM rating WHERE `eventName` = '".$eventInfo['eventName']."'";
								$avgRating = mysqli_query($link, $sqlQuery);
								$row = mysqli_fetch_assoc($avgRating);
								$tempAverage = $row['Ave'];
								$average = number_format((float)$tempAverage, 1, '.', '');
								echo "		<div class='col-sm-12'>
												<div class='panel panel-info'>
													<div class='panel-heading'>
														Event Comments &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; Average Rating $average 
													</div>
													<div class='panel-body'>";
														$sqlQuery = "SELECT `uid`, `userComment`,`createdOn` FROM `comments` WHERE `eventName` = '".$eventInfo['eventName']."' ORDER BY `createdOn` ASC";
														$commentResult = mysqli_query($link, $sqlQuery);
														mysqli_close($link);
														
													
								echo "					<table class='table table-striped'>
															<thead>
																<th>User</th>
																<th>Comment</th>
																<th>Created On</th>
															</thead>
															<tbody class='eventComment-list'>";
															if(mysqli_num_rows($commentResult) > 0)
															{
																while($row = mysqli_fetch_array($commentResult)){
																	echo "<tr>";
																	echo "<td class='".$row['uid']."'>".$row['uid']."</td>";
																	echo "<td class='".$row['userComment']."'>".$row['userComment']."</td>";
																	echo "<td class='".$row['createdOn']."'>".$row['createdOn']."</td>";
																	echo "<td class='event-details'>";
																	echo "</td>";
																	echo "</tr>";
																}
															}
								echo "              		</tbody>";	
								echo "              	</table>";
								echo "				</div>
												</div>
											</div>
										</div>";
							?>	
						</div>
					</div>
					<div class="row">
						<center>
							<a href="studentHome.php" class="btn btn-primary">Back to Events</a>
						</center>
					</div>
				</div>
			</div>
		</div>
		<div>
		<?php
			include_once "footer.php";
		?>
		</div>
	</body>
	
</html>