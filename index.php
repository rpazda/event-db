<?php
session_start();
?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="content/jquery/jquery-3.0.0.min.js"></script>
		<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/808114f81f.js"></script>
		
		<script src="content/scripts/login.js"></script>
	</head>
	
	<body>	
	
		<div id="header">
		<?php
			include_once('header.php');
		?>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-md-offset-2">
					<div class="panel panel-primary">	
						
						<div class="panel-heading">
							Existing Users
						</div>
						
						<div class="panel-body">
							<form method="POST" />
								<div class="form-group">
									<label for="login-id">User ID</label>
									<input type="text" class="form-control" name="login-id" placeholder="University Email">
								</div>
								<div class="form-group">
									<label for="login-password">Password</label>
									<input type="password" class="form-control" name="login-password">
								</div>
								
								<div class="col-sm-6">
									<button class="btn btn-primary" type="submit" name="login-button">Login</button>
								</div>
								<div class="col-sm-6">
									<a style="float:right;" class="btn btn-default" href="guestHome.php" name="guest-button">View Public Events</a>
								</div>
								
								
							</form>
							<?php
								if(!empty($_POST['login-id']) && !empty($_POST['login-password'])){
									$user = 'root';
									$password = '';
									$db = 'databaseproject';
									$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
									$inputUser = $_POST['login-id'];
									$inputPassword = $_POST['login-password'];
									$sqlQuery = "SELECT* FROM `users` WHERE `uid` = '$inputUser'";
									$result = mysqli_query($link, $sqlQuery);
									$UID = mysqli_fetch_array($result);
									
									if ($UID['userPassword'] == $inputPassword){
										if($UID['userType'] == 0){
											$_SESSION['userLoggedIn'] = $inputUser;
											mysqli_close($link);
											header('Location: adminHome.php');
										}
										elseif($UID['userType'] == 2){
											$_SESSION['userLoggedIn'] = $inputUser;
											mysqli_close($link);
											header('Location: guestHome.php');
										}
										else{
											$_SESSION['userLoggedIn'] = $inputUser;
											mysqli_close($link);
											header('Location: studentHome.php');
										}
									}
									else{
										echo "Login Failed!";
									}
								}
								else if(!empty($_POST['login-id'])){
									echo "Please enter your password!";
								}
								else if(!empty($_POST['login-password'])){
									echo "Please enter your User ID!";
								}
								else{}
							?>

						</div>	
						
					</div>
				</div>
				
				<div class="col-md-4">
					
					<div class="panel panel-info">
						<div class="panel-heading">
							New Users
						</div>
						
						<div class="panel-body">
							<form method="POST" />
								<div class="form-group">
									<label for="newUser-name">Name</label>
									<input type="text" class="form-control" name="newUser-name" placeholder="Student Name">
								</div>
									
								<div class="form-group">
									<label for="newUser-university">University</label>
										<?php
											$user = 'root';
											$password = '';
											$db = 'databaseproject';
											$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
											$sqlQuery = "SELECT `universityName` FROM `universities` WHERE 1";
											$result = mysqli_query($link, $sqlQuery);
											echo "<div class='dropdown'>";
											echo"<select name='UniversityName'>";
											echo "<option size =100 ></option>";
											while($row = mysqli_fetch_array($result)){
												echo "<option value='".$row['universityName']."'>".$row['universityName']."</option>";
											}
											echo "</select>";
											echo"</div>";
											mysqli_close($link);
										?>
								</div>

								<div class="form-group">
									<label for="newUser-id">Email</label>
									<input type="email" class="form-control" name="newUser-id" placeholder="University Email">
								</div>
								
								<div class="form-group">
									<label for="newUser-password">Password</label>
									<input type="password" class="form-control" name="newUser-password" placeholder="Password">
								</div>
								<button class="btn btn-default" type="submit" name="register-button">Register</button>
							</form>
							<?php
								if(!empty($_POST['newUser-id']) && !empty($_POST['newUser-password']) && !empty($_POST['UniversityName']) && !empty($_POST['newUser-name'])){
									$user = 'root';
									$password = '';
									$db = 'databaseproject';
									$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
									
									$inputUser = $_POST['newUser-id'];
									$inputPassword = $_POST['newUser-password'];
									$inputUniversity = $_POST['UniversityName'];
									$inputName = $_POST['newUser-name'];

									$sqlQuery = "INSERT INTO users	(uid, userPassword, universityName, userType, userName) VALUES ('$inputUser', '$inputPassword', '$inputUniversity', 1, '$inputName')";
									$result = mysqli_query($link, $sqlQuery);
									mysqli_close($link);
									if ($result)
									{
										echo "An account has been resgistered!";
										echo "<br>";
										echo "Your username is $inputUser";
									}
									else{
										echo "That account is already created!";
									}
							}
							else if(!empty($inputUser) && !empty($inputPassword) && !empty($inputUniversity))
								echo "Please Enter your name.";
							else if(!empty($inputUser) && !empty($inputPassword) && !empty($inputName))
								echo "Please select a University.";
							else if(!empty($inputUser) && !empty($inputUniversity) && !empty($inputName))
								echo "Please enter a password.";
							else if (!empty($inputPassword) && !empty($inputUniversity) && !empty($inputName))
								echo "Please enter your school email address.";
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