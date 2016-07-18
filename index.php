<<<<<<< HEAD
<?php
session_start();
?>

=======
>>>>>>> refs/remotes/origin/Richard-UpdatePages
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="jquery-3.0.0.js"></script>
		<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/808114f81f.js"></script>
		<script src="content/scripts/login.js"></script>
	</head>
	
	<body>	
	
<<<<<<< HEAD
		<div id="header"></div>
	
=======
		<?php
			include_once('header.php');
		?>

>>>>>>> refs/remotes/origin/Richard-UpdatePages
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-md-offset-2">
					<div class="panel panel-primary">	
						
						<div class="panel-heading">
							Existing Users
						</div>
						
						<div class="panel-body">
<<<<<<< HEAD
							<form method="POST" />
								<div class="form-group">
									<label for="login-id">User ID</label>
									<input type="text" class="form-control" name="login-id" placeholder="University Email">
								</div>
								<div class="form-group">
									<label for="login-password">Password</label>
									<input type="password" class="form-control" name="login-password">
								</div>
								
								<button class="btn btn-default" type="submit" name="login-button">Login</button>								
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
									echo $inputUser;
									echo "<br>";
									echo $inputPassword;
									echo "<br>";
									echo $UID['uid'];
									echo "<br>";
									echo $UID['userPassword'];
									
									if ($UID['userPassword'] == $inputPassword){
										if($UID['userType'] == 0){
											$_SESSION['userLoggedIn'] = $inputUser;
											//Send to the admin home page
										}
										elseif($UID['userType'] == 2){
											$_SESSION['userLoggedIn'] = $inputUser;
											//send to the public events page
										}
										else{
											$_SESSION['userLoggedIn'] = $inputUser;
											mysqli_close($link);
											header('Location: home.php');
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

=======
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
>>>>>>> refs/remotes/origin/Richard-UpdatePages
						</div>	
						
					</div>
				</div>
				
				<div class="col-md-4">
					
					<div class="panel panel-info">
						<div class="panel-heading">
							New Users
						</div>
						
						<div class="panel-body">
<<<<<<< HEAD
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
=======
							
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
							
>>>>>>> refs/remotes/origin/Richard-UpdatePages
						</div>	
					</div>	
					
				</div>
			</div>
		</div>
<<<<<<< HEAD
=======
		
		<?php
			include_once('footer.php');
		?>
>>>>>>> refs/remotes/origin/Richard-UpdatePages
	
	</body>
	
</html>