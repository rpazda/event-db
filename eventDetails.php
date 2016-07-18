<?php
session_start();
?>

<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="jquery-3.0.0.js"></script>
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
								
								$eventName = $_SESSION['eventName'];
								$sqlQuery = "SELECT* FROM `events` WHERE `eventName` = '$eventName'";
								
								$result = mysqli_query($link, $sqlQuery);
								$eventInfo = mysqli_fetch_array($result);
								
								echo "<div><label>".$eventInfo['eventName']."</label></div>";
								echo "<div><label>".$eventInfo['universityName']."</label></div>";
								echo "<div><label>".$eventInfo['eventTime']."</label></div>";
							?>
								<div>
									<label>Event Location</label>
								</div>
								
								<div>
									<label>Event Description</label>
								</div>
								
								<div>
									<label>Event Category</label>
								</div>
								
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