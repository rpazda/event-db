<div class="container-fluid">
	<div class="row" style="background-color: #2db9b9; height:80px; border-bottom: thick solid #279e9e; 
				border-right: thick solid #279e9e; 
				margin-bottom: 15px;">
		<div class="col-md-12" style=" height: 100%;">
			<div id="header" class="row" >
				<div class="col-md-6" style="color: white;">
					<h1><i class="fa fa-calendar" aria-hidden="true"></i> University Events  </h1>
				</div>
				<?php
					if($_SESSION['current']){
						echo "	<div class='col-md-6'  id='current-user-listing'>
									<div style='float: right; color:white; margin-top:10px;'>
										<div class='col-md-6'  id='current-user-listing'>
											";
						echo "User:";
						$userName = $_SESSION['userLoggedIn'];
						echo $userName;
					
						echo "				
											<form action= 'logOut.php' /> 
												<div style='float: right; color:white;'>
													<button class='btn btn-primary' type='submit' name='logout-button' style='margin-right:10px;'>
														Log Out
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							";
					}
				?>
			</div>
		</div>
	</div>
</div>