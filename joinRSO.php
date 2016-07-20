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
							Join RSOs
						</div>
						
						<div class="panel-body">
							<?php
								$user = 'root';
								$password = '';
								$db = 'databaseproject';
								$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
								
							?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Leave RSOs
						</div>
						
						<div class="panel-body">
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			include_once('header.php');
		?>		
	</body>
</html>