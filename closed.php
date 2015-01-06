<html>
<head>
	<link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="./css/navbar.css" rel="stylesheet"/>
	<link href="./css/main.css" rel="stylesheet"/>
	<link href="./css/about.css" rel="stylesheet"/>
	<link href="./css/general.css" rel="stylesheet"/>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="./js/navbar.js"></script>
	<?php
		include_once('./include/analytics.php');
	?>
	<link rel="SHORTCUT ICON" href="./imgs/qcop.png"/>
</head>
<body>

<?php
	include_once('./html/navbar.php');
?>



<div class="outter_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 style="color:white;">Attend</h1>
			</div>
		</div>
		<div class="row" style="margin-top:10px;">
			<div class="col-sm-12">
				<div class="about_wrapper" style="border-radius:15px;">
					<div class="about_buffer">
						
							<p>Applications for the 2015 conference have now closed. If you are interested in being considered for the waitlist, or looking to learn more about the conference, please provide your name and email below. </p>
						
							<form class="form-horizontal" role="form" action="./actions/signUpForEmail.php" method="post">
								<div class="form-group">
									
									<label class="col-sm-2 control-label">Full Name:</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" required maxlength="250" name="name_textbox" />
									</div>
								</div>
								<div class="form-group">
									
									<label class="col-sm-2 control-label">Email:</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" required maxlength="250" name="email_textbox" />
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-sm-12 text-center">
										<button class="btn btn-info">Submit to be considered for the waitlist!</button>
									</div>
								</div>
							</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>