<?php
	$name = "";
	$email = "";
	$school = "";
	$major = "";
	$gender = "";
	$dType = "";
	$age = "";
	$return = "";
	$campusRep = "";
	$hearQCOP = "";
	$q1 = "";
	$q2_1 = "";
	$q2_2 = "";
	$q2_3 = "";
	$q2_4 = "";
	$q2_5 = "";
	$q3 = "";
	$rp = "";

	$name = $_POST['name_textbox'];
	$email = $_POST['email_textbox'];
	$school = $_POST['uni_textbox'];
	$major = $_POST['major_textbox'];
	$gender = $_POST['gender_textbox'];
	$dType = $_POST['dType_textbox'];
	$age = $_POST['age_textbox'];
	$return = $_POST['returning_textbox'];
	$campusRep = $_POST['campusrep_textbox'];
	$hearQCOP = $_POST['hear_textbox'];
	$q1 = $_POST['q1_textbox'];
	$q2_1 = $_POST['q2_1_textbox'];
	$q2_2 = $_POST['q2_2_textbox'];
	$q2_3 = $_POST['q2_3_textbox'];
	$q2_4 = $_POST['q2_4_textbox'];
	$q2_5 = $_POST['q2_5_textbox'];
	$q3 = $_POST['q3_textbox'];
	$rp = $_POST['rp_textbox'];

	$name = contentCheck($name);
	$email = contentCheck($email);
	$school = contentCheck($school);
	$major = contentCheck($major);
	$gender = contentCheck($gender);
	$dType = contentCheck($dType);
	$age = contentCheck($age);
	$return = contentCheck($return);
	$campusRep = contentCheck($campusRep);
	$hearQCOP = contentCheck($hearQCOP);
	$q1 = contentCheck($q1);
	$q2_1 = contentCheck($q2_1);
	$q2_2 = contentCheck($q2_2);
	$q2_3 = contentCheck($q2_3);
	$q2_4 = contentCheck($q2_4);
	$q2_5 = contentCheck($q2_5);
	$q3 = contentCheck($q3);
	$rp = contentCheck($rp);

	include_once('./include/conn.php');

	mysqli_query($con, "INSERT INTO apps (name, email, school, major, gender, dType, age, return, campusRep, hearQCOP, q1, q2_1, q2_2, q2_3, q2_4, q2_5, q3, rp) VALUES 
										 ('$name', '$email', '$school', '$major','$gender','$dType','$age','$return','$campusRep','$')") or die("Error 001");
	
	function contentCheck($data){
		$data = trim($data);
		$data = addslashes($data);
		$data = htmlspecialchars($data);
		return $data;
  	}
?>
<html>
<head>
	<link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="./css/navbar.css" rel="stylesheet"/>
	<link href="./css/about.css" rel="stylesheet"/>
	<style>
		body{
        
	        background: url(./imgs/LANDING.png) no-repeat center center fixed; 
	        -webkit-background-size: cover;
	        -moz-background-size: cover;
	        -o-background-size: cover;
	        background-size: cover;
	      }
	      .question_textarea{
	      	width:100%;
	      	max-width: 100%;
	      	min-width: 100%;
	      	height: 100px;
	      	min-height: 100px;
	      	max-height: 100px;
	      }
	      .app_label{
	      	width: 80px;
	      }
	      .pay-btn{
	      	padding:20px 10px;
	      	background-color: white;
	      	text-decoration: none;
	      	color:#8A0829;
	      	border:#8A0829 solid 2px;
	      	border-radius: 5px;

	      }
	      .pay-btn:hover{
	      	text-decoration: none;
	      	color: white;
	      	background-color: #8A0829;

	      }
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="./js/navbar.js"></script>
	<script src="./js/external.js"></script>
	<title>Attend | QCOP</title>
</head>
<body>

<!--
======================================================
=================== NAVBAR ===========================
======================================================
-->

<div class="navbar  navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#000000;">
	<div class="container">
		<div class="navbar-header" style="height:75px;">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="margin-top:20px;">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				<img src="./imgs/logo.png" class="navBar_logo" style="">
				<img src="./imgs/words.png" class="navbar_text"/>
			</a>
		</div>
		<div class="navbar-collapse collapse" class="">
			<ul class="nav navbar-nav navbar-right" >
				<li class="">
					<a href="./about.html" style="padding:0px 0px;" class="navbar_item" id="about_item">
						
					</a>
				</li>
				<li class="">
					<a href="./speakers.html" style="padding:0px 0px;" class="navbar_item" id="speakers_item">
						
					</a>
				</li>
				<li class="">
					<a href="./sponsors.html" style="padding:0px 0px;" class="navbar_item" id="sponsors_item">
		
					</a>
				</li>
				<!--
				<li class="">
					<a href="./index.php" style="padding:0px 0px;">
						<img src="./imgs/schedule_icon.png" class="navbar_item" id="schedule_navbar_item"/>
						<img src="./imgs/schedule.png" class="navbar_hover_item" id="schedule_navbar_item_hover"/>
					</a>
				</li>
				-->
				<li class="">
					<a href="./tickets.html" style="padding:0px 0px;" class="navbar_item" id="tickets_item">
						
					</a>
				</li>
				<li class="">
					<a href="./connect.html" style="padding:0px 0px;" class="navbar_item" id="connect_item">
						
					</a>
				</li>

			</ul>
		</div>
	</div>
</div>

<!--
======================================================
================= END OF NAVBAR ======================
======================================================
-->


<div class="outter_wrapper">
	<div class="container">
		<!--
		<div class="row">
			<div class="col-sm-12">
				<h1 style="color:white;">Application for QCOP</h1>
			</div>
		</div>
		-->
		<div class="row" style="margin-top:10%;">
			<div class="col-sm-12 text-center">
				<h1 style="color:white;">Thanks for applying!</h1>
			</div>
		</div>
		<div style="width:100%;height:20px;"></div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>