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
			include_once('header.php');
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Create University
						</div>
						
						<div class="panel-body">
							<form method="POST" />
								<div class="form-group">
									<label for="newUniversity-name">University Name</label>
									<input type="text" class="form-control" name="newUniversity-name" placeholder="University Name">
								</div>
								
								<div class="form-group">
									<label for="newUniversity-description">University Description</label>
									<textarea rows="5" class="form-control" name="newUniversity-description" placeholder="Description"></textarea>
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
								<button class="btn btn-default" type="submit" name="login-button">Create University</button>
							</form>
							<?php
								if(!empty($_POST['newUniversity-name']) && !empty($_POST['newUniversity-description'])){
									$user = 'root';
									$password = '';
									$db = 'databaseproject';
									$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
									
									$universityName = $_POST['newUniversity-name'];
									$universityDescription = $_POST['newUniversity-description'];
									
									$sqlQuery = "INSERT INTO `locations` (`locationName`, `latitude`, `longitude`) VALUES ('$universityName', '2', '2')";
									$result = mysqli_query($link, $sqlQuery);
									
									if($result){
										$sqlQuery = "INSERT INTO `universities` (`universityName`, `locationName`, `description`, `domain`) VALUES ('$universityName', '$universityName', '$universityDescription', 'blah')";
										$result = mysqli_query($link, $sqlQuery);
										mysqli_close($link);
										if($result)
											echo "University $universityName was added";
										else
											echo "University $universityName was not added";
									}
									else{
										echo "University $universityName was not created!";
									}
									
								}
							?>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<?php
			include_once('footer.php');
		?>
	</body>
</html>