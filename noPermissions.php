<?php
session_start();
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
					<div class="panel panel-danger">
						<div class="panel-heading">
							Access Denied
						</div>
						
						<div class="panel-body">
							
							You do not have permission to view this page.
							
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