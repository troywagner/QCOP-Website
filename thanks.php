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
	<link rel="SHORTCUT ICON" href="./imgs/qcop.png"/>
</head>
<body>

<?php
	include_once('./include/navbar.php');
?>



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
					
					<h1 style="color:white;">
				<?php
					$c = $_GET['c'];
					$c = contentCheck($c);
					if($c == "early"){
						echo 'Thanks for signing up early!';
					}else if($c == "email"){
						echo 'Thanks for the message!';
					}else if($c == "waitlist"){

						echo 'You have been added to the waitlist.';
					}else if($c == "pay"){

						echo 'Thanks for paying!';
					}else{
						echo 'Error';
					}
					function contentCheck($data){
						$data = trim($data);
						$data = addslashes($data);
						$data = htmlspecialchars($data);
						return $data;
				  	}
				?>
				</h1>
			</div>
		</div>
		<div style="width:100%;height:20px;"></div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>