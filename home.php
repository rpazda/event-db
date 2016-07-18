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
					
					<div class="btn-group" role="group" aria-label="..." >
						<a href="home.php" class="btn btn-primary active">Public Events</a>
						<a href="privateEvents.php" class="btn btn-primary">Private Events</a>
						<a href="RSOEvents.php" class="btn btn-primary">RSO Events</a>
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
						
						<div id="events-list">
							
							<div class="input-group" style="margin-bottom:10px;">
								<input class="search form-control" placeholder="Search" />
							</div>
							
							<button class="sort btn btn-default" data-sort="event-name">
								Sort by name
							</button>
							
							<button class="sort btn btn-default" data-sort="event-time">
								Sort by time
							</button>
							
							<button class="sort btn btn-default" data-sort="event-location">
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
								
								<tbody class="list">
								
									<tr>
										<td class="event-name">Pie Contest</td>
										<td class="event-time">3:00pm</td>
										<td class="event-location">MAP 213</td>
										<td class="event-category">Math</td>
										<td class="event-details">
											<a href="" class="btn btn-default">Event Details</a>
										</td>
									</tr>
									<tr>
										<td class="event-name">Pie Contest</td>
										<td class="event-time">5:00pm</td>
										<td class="event-location">MAP 233</td>
										<td class="event-category">Meth</td>
										<td class="event-details">
											<a href="" class="btn btn-default">Event Details</a>
										</td>
									</tr>
									<tr>
										<td class="event-name">Pie Contest</td>
										<td class="event-time">4:00pm</td>
										<td class="event-location">MAP 253</td>
										<td class="event-category">Matth</td>
										<td class="event-details">
											<a href="" class="btn btn-default">Event Details</a>
										</td>
									</tr>
								
								</tbody>
							
							</table>
							
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


