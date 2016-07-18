<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1252">
		
		<script type="text/javascript" src="jquery-3.0.0.js"></script>
		<link href="content/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/808114f81f.js"></script>

		
	</head>
	
	<body>
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Create RSO
						</div>
						
						<div class="panel-body">
							
							<div class="form-group">
								<label for="newRSO-name">RSO Name</label>
								<input type="text" class="form-control" id="newRSO-name" placeholder="Name">
							</div>
							
							<div class="form-group">
								<label for="newRSO-university">RSO University</label>
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
								<label for="newRSO-description">RSO Description</label>
								<textarea rows="5" class="form-control" id="newRSO-description" placeholder="Description"></textarea>
							</div>
							
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">
									<div class="panel panel-info">
										<div class="panel-heading">
											RSO Initial Members
										</div>
										<div class="panel-body">
											Creating a new RSO requires five (5) initial members, one of which must be assigned as the RSO Admin. The RSO Admin is responsible for creating events on behalf of their RSO and are the only members allowed to do so.
										</div>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="newRSO-admin">RSO Admin Email</label>
								<input type="text" class="form-control" id="newRSO-admin" placeholder="Admin Email">
							</div>
							
							<div class="form-group">
								<label for="newRSO-member-1">RSO Member Emails</label>
								<input type="text" class="form-control" id="newRSO-member-1" placeholder="Member Email">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" id="newRSO-member-2" placeholder="Member Email">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" id="newRSO-member-3" placeholder="Member Email">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" id="newRSO-member-4" placeholder="Member Email">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" id="newRSO-member-5" placeholder="Member Email">
							</div>
							
						</div>	
					</div>
				</div>
			</div>
		</div>
	</body>
</html>