

<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
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
					
					<div class="col-sm-8" id="event-pane">
					
						<h2>Events</h2>
						
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
