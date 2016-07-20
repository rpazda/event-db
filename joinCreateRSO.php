<?php
session_start();
?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="content/jquery/jquery-3.0.0.min.js"></script>
		<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/808114f81f.js"></script>
		
		<script src="content/scripts/joinCreateRSO.js"></script>
	</head>
	
	<body>
		
		<?php
			include_once "header.php";
			?>
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary">
						<form method='POST' />
						<div class="panel-heading">
							Join RSOs 
						</div>
						<form method='POST' />
							<div class="panel-body">
								<?php
								$user = 'root';
								$password = '';
								$db = 'databaseproject';
								$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
								$inputUser = $_SESSION['userLoggedIn'];
								$sqlQuery = "SELECT universityName FROM `users` WHERE `uid` = '$inputUser'";
								$result = mysqli_query($link, $sqlQuery);
								$userInfo = mysqli_fetch_array($result);
								$userUniversity = $userInfo['universityName'];
								$sqlQuery = "SELECT rsoName FROM `rsos` WHERE `universityName` = '$userUniversity'";
								$result = mysqli_query($link, $sqlQuery);
								
								if (mysqli_num_rows($result) > 0) {
									// output data of each row
									$i = 0;
									echo "<br>";
									echo "<table class='table table-hover'>
												<thead>
													<th>
														Join
													</th>
													<th>
														RSO Name
													</th>
												</thead>
												<tbody>
										";
									while($row = mysqli_fetch_array($result)) {
										$rsoName = $row["rsoName"];
									  echo "<center>
												<tr>
												  <td>
													<input type='checkbox' name='chk_group[]' value='$rsoName' />  
												  </td>
												  <td>
													$rsoName
												  </td>
												</tr>
											</center>
									  ";
									  $i++;
									  }
									  echo "<br>";
									  echo "
												</tbody>
											</table>
										  ";
									  echo "<center><button class='btn btn-default' type='submit' name='joinRSO'>Join RSO</button></center>";
								}
								else {
									echo " There are no pending RSO requests!<br>";
								}
								?>
						</div>
						</form>
						<?php
							if (isset($_POST['chk_group'])) {
								$optionArray = $_POST['chk_group'];
								for ($i=0; $i<count($optionArray); $i++) {
									$sqlQuery = "INSERT INTO `rsomembers`(`rsoName`, `universityName`, `uid`) VALUES ('$optionArray[$i]', '$userUniversity', '$inputUser')";
									$result = mysqli_query($link, $sqlQuery);
									if($result){
										echo "<span>";
										echo $optionArray[$i]." has been approved!<br />";
										echo "</span>";
									}
								}
								if($result)
									mysqli_close($link);
									header('Location: joinCreateRSO.php');
							}
						?>
					</div>
				</div>
			</div>
				
			<div class="row" id="rso-create-form">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Create RSO
						</div>
						<form method="POST" />
							<div class="panel-body">
								
								<div class="form-group">
									<label for="newRSO-name">RSO Name</label>
									<input type="text" class="form-control" name="newRSO-name" placeholder="Name">
								</div>
								
								<div class="form-group">
									<label for="newRSO-university">RSO University</label>
									<?php
										$user = 'root';
										$password = '';
										$db = 'databaseproject';
										$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
										$sqlQuery = "SELECT `universityName` FROM `universities` WHERE 1";
										$result = mysqli_query($link, $sqlQuery);
										echo "<div class='dropdown'>";
										echo"<select class='btn btn-default 'name='UniversityName'>";
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
									<label for="newRSO-description">RSO Description</label>
									<textarea rows="5" class="form-control" name="newRSO-description" placeholder="Description"></textarea>
								</div>
								
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<div class="panel panel-info">
											<div class="panel-heading">
												RSO Initial Members
											</div>
											<div class="panel-body">
												Creating a new RSO requires six (6) initial members, one of which must be assigned as the RSO Admin. The RSO Admin is responsible for creating events on behalf of their RSO and are the only members allowed to do so.
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<label for="newRSO-admin">RSO Admin Email</label>
									<input type="text" class="form-control" name="newRSO-admin" placeholder="Admin Email">
								</div>
								
								<div class="form-group">
									<label for="newRSO-member-1">RSO Member Emails</label>
									<input type="text" class="form-control" name="newRSO-member-1" placeholder="Member Email">
								</div>
								
								<div class="form-group">
									<input type="text" class="form-control" name="newRSO-member-2" placeholder="Member Email">
								</div>
								
								<div class="form-group">
									<input type="text" class="form-control" name="newRSO-member-3" placeholder="Member Email">
								</div>
								
								<div class="form-group">
									<input type="text" class="form-control" name="newRSO-member-4" placeholder="Member Email">
								</div>
								
								<div class="form-group">
									<input type="text" class="form-control" name="newRSO-member-5" placeholder="Member Email">
								</div>
								
								<button class="btn btn-default" type="submit" name="createRSO">Create RSO</button>
								
							</div>
						</form>
						<?php
							if(!empty($_POST['newRSO-name'] && $_POST['UniversityName'])){
								$user = 'root';
								$password = '';
								$db = 'databaseproject';
								$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
								
								$rsoName = $_POST['newRSO-name'];
								$rsoMamber1 = $_POST['newRSO-member-1'];
								$rsoMamber2 = $_POST['newRSO-member-2'];
								$rsoMamber3 = $_POST['newRSO-member-3'];
								$rsoMamber4 = $_POST['newRSO-member-4'];
								$rsoMamber5 = $_POST['newRSO-member-5'];
								$rsoAdmin = $_POST['newRSO-admin'];
								$rsoDescription = $_POST['newRSO-description'];
								$universityName = $_POST['UniversityName'];
								
								$sqlQuery1 = "INSERT INTO `rsos`(`rsoName`, `universityName`, `uid`, `description`) VALUES ('$rsoName', '$universityName', '$rsoAdmin','$rsoDescription')";
								$sqlQuery2 = "INSERT INTO `rsomembers`(`rsoName`, `universityName`, `uid`) VALUES ('$rsoName','$rsoMamber1',$universityName)";
								$sqlQuery3 = "INSERT INTO `rsomembers`(`rsoName`, `universityName`, `uid`) VALUES ('$rsoName','$rsoMamber2',$universityName)";
								$sqlQuery4 = "INSERT INTO `rsomembers`(`rsoName`, `universityName`, `uid`) VALUES ('$rsoName','$rsoMamber3',$universityName)";
								$sqlQuery5 = "INSERT INTO `rsomembers`(`rsoName`, `universityName`, `uid`) VALUES ('$rsoName','$rsoMamber4',$universityName)";
								$sqlQuery6 = "INSERT INTO `rsomembers`(`rsoName`, `universityName`, `uid`) VALUES ('$rsoName','$rsoMamber5',$universityName)";
								$sqlQuery7 = "INSERT INTO `rsomembers`(`rsoName`, `universityName`, `uid`) VALUES ('$rsoName','$rsoAdmin',$universityName)";
								
								$result1 = mysqli_query($link, $sqlQuery1);
								$result2 = mysqli_query($link, $sqlQuery2);
								$result3 = mysqli_query($link, $sqlQuery3);
								$result4 = mysqli_query($link, $sqlQuery4);
								$result5 = mysqli_query($link, $sqlQuery5);
								$result6 = mysqli_query($link, $sqlQuery6);
								$result7 = mysqli_query($link, $sqlQuery7);
								
								if($result1 && $result2 && $result3 && $result4 && $result5 && $result6 && $result7)
								{
									echo "RSO created!";
								}
							}
							
						?>
					
					</div>
				</div>
			</div>
			
			<div class="row" style="margin-bottom: 15px;">
				<center>
					<button type="button" class="btn btn-primary" id="rso-create-button">Create New RSO</button>
				<center>
			</div>
			
			<div class="row">
				<center>
					<a href="studentHome.php" class="btn btn-primary">Back to Events</a>
				</center>
			</div>
			
		</div>
		
		<?php
			include_once "footer.php";
		?>

	</body>
</html>