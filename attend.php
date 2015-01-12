<?php
	//die("Applications are closed.");
?>
<html>
<head>
	<link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="./css/navbar.css" rel="stylesheet"/>
	<link href="./css/about.css" rel="stylesheet"/>
	<link href="./css/general.css" rel="stylesheet"/>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="./js/navbar.js"></script>
	<script src="./js/external.js"></script>
	<title>Attend | QCOP</title>
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
				<h1 style="color:white;">Application for QCOP</h1>
			</div>
		</div>
		<div class="row" style="margin-top:10px;">
			<div class="col-sm-12">
				<div class="about_wrapper" style="background-color:white;">
					<div class="about_buffer">

						<form class="form-horizontal" role="form" action="./done.php" method="post">
							<div class="form-group">
								
								<label class="col-sm-2 control-label">Full Name:</label>
								
								<div class="col-sm-10">
									<input type="text" class="form-control" required maxlength="250" name="name_textbox" />
								</div>
							</div>
							<div class="form-group">
								
								<label class="col-sm-2 control-label">School Email:</label>
								
								<div class="col-sm-10">
									<input type="text" class="form-control" required maxlength="250" name="email_textbox" />
								</div>
							</div>
							<div class="form-group">
								
								<label class="col-sm-2 control-label">University:</label>
								
								<div class="col-sm-10">
									<input type="text" class="form-control" required name="uni_textbox" maxlength="250" />
								</div>
							</div>	
							<div class="form-group">
								
								<label class="col-sm-2 control-label">Major:</label>
								
								<div class="col-sm-10">
									<input type="text" class="form-control" required name="major_textbox"/>
								</div>
							</div>
							<div class="form-group">
								
								<label class="col-sm-2 control-label">Gender:</label>
								
								<div class="col-sm-10">
									<select class="form-control" name="gender_textbox">
										<option>Male</option>
										<option>Female</option>
										<option>Prefer not to disclose</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								
								<label class="col-sm-2 control-label">Type of Delegate:</label>
								
								<div class="col-sm-10">
									<select class="form-control" id="d" name="dType_textbox">
										<option>Internal</option>
										<option>External</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								
								<label class="col-sm-2 control-label">Your age as of conference:</label>
								
								<div class="col-sm-10">
									<input type="text" class="form-control" required name="age_textbox" maxlength="250" />
								</div>
							</div>
							<!--
							<div class="form-group">
								
								<label class="col-sm-2 control-label">Resume:</label>
								
								<div class="col-sm-10">
									<input type="file" class="form-control" />
								</div>
							</div>
							-->
							<div class="form-group">
								
								<label class="col-sm-2 control-label">Are you a returning delegate?</label>
								
								<div class="col-sm-10">
									<select class="form-control" name="returning_textbox">
										<option>Yes</option>
										<option>No</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12" style="text-align:left;">
									<label>Executive member or Campus Rep who referred you, if applicable:</label>
								</div>
								<div class="col-sm-12">
									<input type="text" placeholder="Their name" class="form-control" name="campusrep_textbox" />
								</div>
							</div>
							

							<div class="form-group">
								<div class="col-sm-12">
									<label>How did you hear about QCOP?</label>
								</div>
								<div class="col-sm-12">
									<textarea class="question_textarea form-control" id="q1" required name="hear_textbox"></textarea>
								</div>
							</div>
							<br/>
							<div class="form-group">
								<div class="col-sm-12">
									<label>1) Why do you want to be a QCOP 2015 delegate? (150 word max)</label>
								</div>
								<div class="col-sm-12">
									<textarea class="question_textarea form-control 150max" id="q1" maxlength="1500" required name="q1_textbox"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12" style="text-align:;left;">
									<label>2) If you were to describe yourself in 5 words, what would they be? (5 word max)</label>
								</div>
								<div class="col-sm-12">
									<input type="text" class="form-control" style="width:25%;" required name="q2_1_textbox"/>
									<input type="text" class="form-control" style="width:25%;"  required name="q2_2_textbox"/>
									<input type="text" class="form-control" style="width:25%;"  required name="q2_3_textbox"/>
									<input type="text" class="form-control" style="width:25%;"  required name="q2_4_textbox"/>
									<input type="text" class="form-control" style="width:25%;"  required name="q2_5_textbox"/>
									
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<!--
									<label>3) You have been given a $5000 grant to work on a philanthropic initiative of your choice. How would you spend the grant? (150 word max)</label>
									-->
								</div>
								<div class="col-sm-12">
									<textarea class="question_textarea form-control" id="q3" maxlength="1500" hidden name="q3_textbox"></textarea>
								</div>
							</div>
							<!--
							<div class="form-group">
								<div class="col-sm-12">
									<label>Dietary Restrictions</label>
								</div>
								<div class="col-sm-12">
									<textarea class="question_textarea form-control"></textarea>
								</div>
							</div>	
							-->
							<div class="form-group" id="rp">
								<div class="col-sm-12">
									<label>Roommate preference?</label>
								</div>
								<div class="col-sm-12">
									<textarea class="question_textarea form-control" name="rp_textbox"></textarea>
								</div>
							</div>	
							<br/>
							<br/>
							<p>If you have any issues, please email <a href="mailto:qcopexternals@gmail.com">qcopexternals@gmail.com</a></p>
							<br/>
							<div style="width:100%;text-align:center;">
								<button type="submit" class="pay-btn">Submit</button>
							</div>
								
						</form>
					</div>

				</div>
			</div>
		</div>
		<div style="width:100%;height:20px;"></div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>