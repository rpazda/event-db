<?php
session_start();
$eventName = $_SESSION['eventName'];
?>

<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="content/jquery/jquery-3.0.0.min.js"></script>
		<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/808114f81f.js"></script>
		
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
							Event Details
						</div>
						
						<div class="panel-body">
							<?php
								$user = 'root';
								$password = '';
								$db = 'databaseproject';
								$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
								$sqlQuery = "SELECT* FROM `events` WHERE `eventName` = '$eventName'";
								
								$result = mysqli_query($link, $sqlQuery);
								$eventInfo = mysqli_fetch_array($result);
								echo "<div>
									<label>Event Name</label>
									</div>";
								echo "<div><label>".$eventInfo['eventName']."</label></div>";
								echo "<div>
									<label>Event Location</label>
									</div>";
								echo "<div><label>".$eventInfo['locationName']."</label></div>";
								echo "<div>
									<label>Event Description</label>
									</div>";
								echo "<div><label>".$eventInfo['description']."</label></div>";
								echo "<div>
									<label>Event Category</label>
									</div>";
								echo "<div><label>".$eventInfo['category']."</label></div>";
							?>
								<div>
									<label>Event Contact Information</label>
								</div>
								
								<div>
									<label>Rating</label>
								</div>
								
								<div>
									<label>Comments</label>
								</div>
								
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<div class="panel panel-info">
											<div class="panel-heading">
												User Name
											</div>
											<div class="panel-body">
												Comment
											</div>
										</div>
									</div>
								</div>
							
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