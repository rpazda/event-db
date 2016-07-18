<?php
	include_once('header.php');
?>

<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="jquery-3.0.0.js"></script>
		<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/808114f81f.js"></script>

		
	</head>
	
	<body>
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Create University
						</div>
						
						<div class="panel-body">
							
							<div class="form-group">
								<label for="newUniversity-name">University Name</label>
								<input type="text" class="form-control" id="newUniversity-name" placeholder="University Name">
							</div>
							
							<div class="form-group">
								<label for="newUniversity-description">University Description</label>
								<textarea rows="5" class="form-control" id="newUniversity-description" placeholder="Description"></textarea>
							</div>
							
							<div>
								<label for="newUniversity-location">University Location</label>
								<div id="newUniversity-location">
									<div class="panel panel-danger">
										<div class="panel-heading">
											MAPS
										</div>
										<div class="panel-body">
											REPLACE BEFORE PRODUCTION
										</div>	
									</div>
								</div>
							</div>
							
						</div>	
					</div>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-md-6 col-md-offset-3">
					<center>
						<p>
							<a href="adminhome.php" class="btn btn-default">Back to Super Admin Control Panel</a>
						</p>
					</center>
					
				</div>
			
			</div>
			
		</div>
		
	</body>
	
</html>

<?php
	include_once('footer.php');
?>