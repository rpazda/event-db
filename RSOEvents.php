<?php
	session_start();
	if(!$_SESSION['current'])
		header('Location: noPermissions.php');
?>


<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="content/jquery/jquery-3.0.0.min.js"></script>
		<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/808114f81f.js"></script>
		
		<script src="content/list.min.js"></script>
		
	</head>
	
	<body>
		<?php
			include_once "header.php";
		?>
		<div class="container-fluid">
		
			<div class="row">
			
				<div class="col-md-8 col-md-offset-2">
				
					<h2>RSO Events </h2>
					
					<div class="btn-group" role="group" aria-label="...">
						<a href="home.php" class="btn btn-primary">Public Events</a>
						<a href="privateEvents.php" class="btn btn-primary">Private Events</a>
						<a href="RSOEvents.php" class="btn btn-primary active">RSO Events</a>
					</div>
					
					<div class="btn-group" role="group" aria-label="..." style="float:right">
						<a href="joinCreateRSO.php" class="btn btn-default">Join/Create RSO</a>
						<a href="createEvent.php" class="btn btn-default">Create Event</a>
					</div>
				
				</div>
				
				<div class="col-md-2">
				</div>
			
			</div>
			
			<div class="row">
				
				<div class="col-md-8 col-md-offset-2" style="margin-top: 15px;">
					
					<ul class="nav nav-tabs">
						<li role="presentation" class="active">
							<a href="#">Day View</a>
						</li>
						<li role="presentation">
							<a href="#">Week View</a>
						</li>
						<li role="presentation">
							<a href="#">Month View</a>
						</li>
						<li role="presentation">
							<a href="#">Year View</a>
						</li>
						<li role="presentation">
							<a href="#">Upcoming</a>
						</li>
					</ul>
				
				</div>
				
			</div>
			
			<div class="row">
				
				<div class="col-md-8 col-md-offset-2">
					
					<div class="col-sm-8" id="event-pane" style="margin-top: 15px;">
						
						<div class="panel panel-default">
							<div class="panel-heading">
								Example Event 
							</div>
							<div class="panel-body">
								<p>
									at <b>00:00am</b> in ABC room 000
								</p>
								<p>
									Join us for nothing never as we celebrate things not happening
								</p>
								
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								Example Event
							</div>
							<div class="panel-body">
								<p>
									at <b>00:00am</b> in ABC room 000
								</p>
								<p>
									Join us for nothing never as we celebrate things not happening
								</p>
								
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">
								Example Event
							</div>
							<div class="panel-body">
								<p>
									at <b>00:00am</b> in ABC room 000
								</p>
								<p>
									Join us for nothing never as we celebrate things not happening
								</p>
								
							</div>
						</div>
					
					</div>
					
					<div class="col-sm-4">
					
						<h2>Calendar</h2>
						
						<div class="panel panel-default" style="height: 200px;">
							<div class="panel-body">Calendar</div>
						</div>
						
						<h3>Filter by RSO</h3>
						
							<ul style="list-style-type: none;">
							
								<li>
									<i class="fa fa-flask"></i>&nbsp<a href="#">Chemistry Club</a>
								</li>
								
								<li>
									<i class="fa fa-music"></i>&nbsp<a href="#">Orchestra</a>
								</li>
								
								<li>
									<i class="fa fa-sign-language"></i>&nbsp<a href="#">American Sign Language Club</a>
								</li>
							
							</ul>
					
					</div>
				
				</div>
				
			</div>
	
		</div>
		
		<?php
			include_once "footer.php";
		?>
	
	</body>
	
</html>
