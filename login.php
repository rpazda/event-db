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
								<label for="newuser-name">Name</label>
								<input type="text" class="form-control" id="newuser-name" placeholder="Student Name">
							</div>
							<div class="form-group">
								<label for="newuser-university">University</label>
								<input type="email" class="form-control" id="newuser-university" placeholder="University">
							</div>
							<div class="form-group">
								<label for="newuser-id">Email</label>
								<input type="email" class="form-control" id="login-id" placeholder="University Email">
							</div>
							<div class="form-group">
								<label for="newuser-password">Password</label>
								<input type="password" class="form-control" id="login-password">
							</div>
							
						</div>	
					</div>	
					
				</div>
			</div>
		</div>
	
	</body>
	
</html>