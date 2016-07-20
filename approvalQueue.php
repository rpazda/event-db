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
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Approve RSOs
						</div>
						<form method='POST' />
							<div class="panel-body">
								<?php
									$user = 'root';
									$password = '';
									$db = 'databaseproject';
									$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
									
									$sqlQuery = "SELECT * FROM `rsos` WHERE `isApproved` = 0";
									$result = mysqli_query($link, $sqlQuery);
									
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										$i = 0;
										echo "<table class='table table-hover'>
												<thead>
													<th>
														Approve
													</th>
													<th>
														RSO Name
													</th>
													<th>
														University
													</th>
													<th>
														RSO Admin
													</th>
												</thead>
												<tbody>
										";
										while($row = mysqli_fetch_array($result)) {
											$rsoName = $row["rsoName"];
											$rsoUniversity = $row["universityName"];
											$rsoAdmin = $row["uid"];
										  echo "
											<tr>
											  <td>
												<input type='checkbox' name='chk_group[]' value='$rsoName' />
											  </td>
											  <td>
												$rsoName
											  </td>
											  <td>
												$rsoUniversity
											  </td>
											  <td>
												$rsoAdmin
											  </td>
											</tr>
										  ";
										  $i++;
										  }
										  echo "
												</tbody>
											</table>
										  ";
										  echo "<button class='btn btn-default' type='submit' name='approveRSO'>Approve RSO</button>";
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
									$sqlQuery = "UPDATE `rsos` SET `isApproved`= 1 WHERE `rsoName` = '$optionArray[$i]'";
									$result = mysqli_query($link, $sqlQuery);
									if($result){
										echo "<span>";
										echo $optionArray[$i]." has been approved!<br />";
										echo "</span>";
									}
								}
								if($result)
									mysqli_close($link);
									header('Location: approvalQueue.php');
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Approve Events
						</div>
						<form method='POST' />
							<div class="panel-body">
								<?php
									
									$user = 'root';
									$password = '';
									$db = 'databaseproject';
									$link = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!");
									
									$sqlQuery = "SELECT * FROM `events` WHERE `isApproved` = 0";
									$result = mysqli_query($link, $sqlQuery);
									
									if (mysqli_num_rows($result) > 0) {
										// output data of each row
										$i = 0;
										echo "<table class='table table-hover'>
												<thead>
													<th>
														Approve
													</th>
													<th>
														Event Name
													</th>
													<th>
														University
													</th>
												</thead>
												<tbody>
										";
										while($row = mysqli_fetch_array($result)) {
											$eventName = $row["eventName"];
											$eventUniversity = $row["universityName"];
										  echo "
											<tr>
											  <td>
												<input type='checkbox' name='chk_group[]' value='$eventName' />
											  </td>
											  <td>
											    $eventName
											  </td>
											  <td>
											   $eventUniversity
											  </td>
											</tr>
										  ";
										  $i++;
										  }
										  echo "<button class='btn btn-default' type='submit' name='approveEvent'>Approve Event</button>";
										  echo "
												</tbody>
											</table>
										  ";
									}
									else {
										echo " There are no pending Event requests!<br>";
									}
								?>
							</div>
						</form>
						<?php
							if (isset($_POST['chk_group'])) {
								$optionArray = $_POST['chk_group'];
								for ($i=0; $i<count($optionArray); $i++) {
									$sqlQuery = "UPDATE `events` SET `isApproved`= 1 WHERE `eventName` = '$optionArray[$i]'";
									$result = mysqli_query($link, $sqlQuery);
									if($result){
										echo "<span>";
										echo $optionArray[$i]." has been approved!<br />";
										echo "</span>";
									}
								}
								if($result)
									mysqli_close($link);
									header('Location: approvalQueue.php');
							}
						?>
					</div>
				</div>
			</div>
			<div class='row'>
				<center>
					<a class="btn btn-primary" href="adminHome.php">Back to Admin Control Panel</a>
				</center>
			</div>
		</div>
		<?php
			include_once('footer.php');
		?>
	</body>
</html>