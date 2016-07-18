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
		<script src="http://listjs.com/no-cdn/list.js"></script>
		<script src="content/scripts/events.js"></script>
		
		<script>
		
			.list {
			  font-family:sans-serif;
			}
			td {
			  padding:10px; 
			  border:solid 1px #eee;
			}

			input {
			  border:solid 1px #ccc;
			  border-radius: 5px;
			  padding:7px 14px;
			  margin-bottom:10px
			}
			input:focus {
			  outline:none;
			  border-color:#aaa;
			}
			.sort {
			  padding:8px 30px;
			  border-radius: 6px;
			  border:none;
			  display:inline-block;
			  color:#fff;
			  text-decoration: none;
			  background-color: #28a8e0;
			  height:30px;
			}
			.sort:hover {
			  text-decoration: none;
			  background-color:#1b8aba;
			}
			.sort:focus {
			  outline:none;
			}
			.sort:after {
			  display:inline-block;
			  width: 0;
			  height: 0;
			  border-left: 5px solid transparent;
			  border-right: 5px solid transparent;
			  border-bottom: 5px solid transparent;
			  content:"";
			  position: relative;
			  top:-10px;
			  right:-5px;
			}
			.sort.asc:after {
			  width: 0;
			  height: 0;
			  border-left: 5px solid transparent;
			  border-right: 5px solid transparent;
			  border-top: 5px solid #fff;
			  content:"";
			  position: relative;
			  top:4px;
			  right:-5px;
			}
			.sort.desc:after {
			  width: 0;
			  height: 0;
			  border-left: 5px solid transparent;
			  border-right: 5px solid transparent;
			  border-bottom: 5px solid #fff;
			  content:"";
			  position: relative;
			  top:-4px;
			  right:-5px;
}
		
		</script>
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
						<table class="table table-striped">
							<thead>
								<th>Event Name</th>
								<th>Time</th>
								<th>Location</th>
								<th>Category</th>
								<th>Details</th>
							</thead>
							<tbody class="list">
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
										echo "<td class='".$row['eventName']."'>".$row['eventName']."</td>";
										echo "<td class='".$row['eventTime']."'>".$row['eventTime']."</td>";
										echo "<td class='".$row['locationName']."'>".$row['locationName']."</td>";
										echo "<td class='".$row['category']."'>".$row['category']."</td>";
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
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>Private Events </h2>
				</div>
				<div class="col-md-2">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-2">
					<div class="col-sm-8" id="event-pane" style="margin-top: 15px;">
						<table class="table table-striped">
							<thead>
								<th>Event Name</th>
								<th>Time</th>
								<th>Location</th>
								<th>Category</th>
								<th>Details</th>
							</thead>
							<tbody class="list">
								<?php
									$user = 'root';
									$password = '';
									$db = 'databaseproject';
									$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
									$sqlQuery = "SELECT `eventName`,`locationName`,`eventTime`,`category` FROM `events` WHERE `isPrivate` = 1 AND `isApproved` = 1";
									$result = mysqli_query($link, $sqlQuery);
									mysqli_close($link);
									while($row = mysqli_fetch_array($result)){
										echo "<tr>";
										echo "<td class='".$row['eventName']."'>".$row['eventName']."</td>";
										echo "<td class='".$row['eventTime']."'>".$row['eventTime']."</td>";
										echo "<td class='".$row['locationName']."'>".$row['locationName']."</td>";
										echo "<td class='".$row['category']."'>".$row['category']."</td>";
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
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>RSO Events </h2>
				</div>
				<div class="col-md-2">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-2">
					<div class="col-sm-8" id="event-pane" style="margin-top: 15px;">
						<table class="table table-striped">
							<thead>
								<th>Event Name</th>
								<th>Hosting RSO</th>
								<th>Time</th>
								<th>Location</th>
								<th>Category</th>
								<th>Details</th>
							</thead>
							<tbody class="list">
								<?php
									$user = 'root';
									$password = '';
									$db = 'databaseproject';
									$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
									$userID = $_SESSION['userLoggedIn'];
									$sqlQuery = "SELECT events.eventName, events.rsoName, events.category, events.eventTime, events.locationName  FROM events, rsomembers WHERE (events.isRSO = 1) AND (events.rsoName = rsomembers.rsoName) AND (rsomembers.uid = '$userID')" ;
									$result = mysqli_query($link, $sqlQuery);
									if(mysqli_num_rows($result) > 0)
									{
										while($row = mysqli_fetch_array($result)){
											echo "<tr>";
											echo "<td class='".$row['eventName']."'>".$row['eventName']."</td>";
											echo "<td class='".$row['rsoName']."'>".$row['rsoName']."</td>";
											echo "<td class='".$row['eventTime']."'>".$row['eventTime']."</td>";
											echo "<td class='".$row['locationName']."'>".$row['locationName']."</td>";
											echo "<td class='".$row['category']."'>".$row['category']."</td>";
											echo "<td class='event-details'>";
											echo "<a href='eventDetails.php' class='btn btn-default'>Event Details</a>";
											echo "</td>";
											echo "</tr>";
										}
									}
								?>				
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<?php
		include_once "footer.php";
	?>
	</body>
	
</html>


