<?php
	session_start();
?>

<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="content/jquery/jquery-3.0.0.min.js"></script>
		<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/808114f81f.js"></script>

		<script src="content/list.min.js"></script>
		<link rel="stylesheet" type="text/css" href="content/list.css">
		<script src="http://listjs.com/no-cdn/list.js"></script>
		<script src="content/scripts/events.js"></script>
		
	</head>
	<body>
		<?php
			include_once "header.php";
		?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>Public Events </h2>
				</div>
				<div class="col-md-2">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-2">
					<div class="col-sm-8" id="event-pane" style="margin-top: 15px;">
						<div class="input-group" style="margin-bottom:10px;">
							<input class="search form-control" placeholder="Search" />
						</div>
						<button class="sort btn btn-default" data-sort="eventName">
							Sort by name
						</button>

						<button class="sort btn btn-default" data-sort="eventTime">
							Sort by time
						</button>

						<button class="sort btn btn-default" data-sort="locationName">
							Sort by location
						</button>
						<table class="table table-striped">
							<thead>
								<th>Event Name</th>
								<th>Time</th>
								<th>Location</th>
								<th>Category</th>
								<th>Details</th>
							</thead>
							<tbody class="public-events-list">
								<?php
									$user = 'root';
									$password = '';
									$db = 'databaseproject';
									$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
									$sqlQuery = "SELECT `eventName`,`locationName`,`eventTime`,`category` FROM `events` WHERE `isPrivate` = 0 AND `isRSO` = 0 AND `isApproved` = 1";
									$result = mysqli_query($link, $sqlQuery);
									mysqli_close($link);
									while($row = mysqli_fetch_array($result)){
										echo "<tr>";
										echo "<td class='eventName'>".$row['eventName']."</td>";
										echo "<td class='eventTime'>".$row['eventTime']."</td>";
										echo "<td class='locationName'>".$row['locationName']."</td>";
										echo "<td class='category'>".$row['category']."</td>";
										echo "<td class='event-details'>";
										echo "<a href='eventDetails.php' class='btn btn-default'>Event Details</a>";
										echo "</td>";
										echo "</tr>";
									}
								?>				
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class='row'>
				<center>
					<a class="btn btn-primary" href="index.php">Back to Login Page</a>
				</center>
			</div>
		</div>
	</div>
	<?php
		include_once "footer.php";
	?>
	</body>
	
</html>


