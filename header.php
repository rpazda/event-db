<div class="container-fluid">
		
	<div class="row" style="background-color: #2db9b9; height:80px; border-bottom: thick solid #279e9e; 
				border-right: thick solid #279e9e; 
				margin-bottom: 15px;">
	
		<div class="col-md-12" style=" height: 100%;">
		
			<div id="header" class="row" >

				<div class="col-md-6" style="color: white;">
					<h1><i class="fa fa-calendar" aria-hidden="true"></i> University Events  </h1>
				 
				</div>
					
				<div class="col-md-6"  id="current-user-listing">
					
					<div style="float: right; color:white; margin-top:10px;">
						User: 
						<?php
							$userName = $_SESSION['userLoggedIn'];
							//if($userName != null){	//need to add logic and uncomment
								echo $userName;
							//}
						?>
						<?php
						//if(USERLOGGEDIN){		//need to add logic and uncomment
						?>
							<button class="btn btn-primary" type="submit" name="logout-button" style="margin-left:10px;">Log Out</button>
						<?php
						//}
						?>
					</div>	
					
				</p>
			
			</div>
		
		</div>
	
	</div>

</div>
