<html>


	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="content/jquery/jquery-3.0.0.min.js"></script>
		<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/808114f81f.js"></script>
		
		<script src="content/scripts/login.js"></script>
		
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
						
							Super Admin Control Panel
						
						</div>
						
						<div class="panel-body">
							
							<center>
								<p>
									<a href="approvalQueue.php" class="btn btn-default">RSO/Event Approval Queues</a>
								</p>
								<p>
									<a href="createUniversity.php" class="btn btn-default">Create University</a>
								</p>
							</center>
						
						</div>
						
					</div>
					
				</div>	
			
			</div>
		
		</div>
	
	</body>
	
	<?php
		include_once('footer.php');
	?>
	
</html>
