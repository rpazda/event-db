
<?php
	include_once('header.php');
?>

<html>


	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="jquery-3.0.0.js"></script>
		<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/808114f81f.js"></script>
		<script src="content/scripts/login.js"></script>
	</head>
	
	<body>	
	
		<div id="header"></div>
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-md-offset-2">
					<div class="panel panel-primary">	
						
						<div class="panel-heading">
							Existing Users
						</div>
						
						<div class="panel-body">
							<form>
								<div class="form-group">
									<label for="login-id">User ID</label>
									<input type="email" class="form-control" id="login-id" placeholder="University Email">
								</div>
								<div class="form-group">
									<label for="login-password">Password</label>
									<input type="password" class="form-control" id="login-password">
								</div>
								
								<button class="btn btn-default" type="submit" id="login-button">Login</button>
								
							</form>
						</div>	
						
					</div>
				</div>
				
				<div class="col-md-4">
					
					<div class="panel panel-info">
						<div class="panel-heading">
							New Users
						</div>
						
						<div class="panel-body">
							
							<div class="form-group">
								<label for="newUser-name">Name</label>
								<input type="text" class="form-control" id="newUser-name" placeholder="Student Name">
							</div>
							
							<div class="form-group">
								<label for="newUser-university">University</label>
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" id="university-select" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										University
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="university-select">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</div>
							</div>
							
							<div class="form-group">
								<label for="newUser-id">Email</label>
								<input type="email" class="form-control" id="newUser-id" placeholder="University Email">
							</div>
							
							<div class="form-group">
								<label for="newUser-password">Password</label>
								<input type="password" class="form-control" id="newUser-password">
							</div>
							
						</div>	
					</div>	
					
				</div>
			</div>
		</div>
	
	</body>
	
</html>
<?php
	include_once('footer.php');
?>