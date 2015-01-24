<?php
	$code = $_GET['c'];
	$code = contentCheck($code);
	
	$appCode = $_GET['a'];
	$appCode = contentCheck($appCode);

	

	if($appCode == ""){
		die("Error 1001: Please check the link in the email. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");
	}
	if($code == ""){
		die("Error 1002: Please check the link in the email. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");
	}

	$return = $_GET['r'];
	$return = contentCheck($return);

	$strLen = strlen($code);
		$firstLetter = substr($code, 0, 1);
		$remainCode = substr($code, 1, ($strLen-1));

		if($firstLetter != "3"){
			die("Error 1003: Please check the link in the email. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");
		}		
		include_once('./include/conn.php');
		//echo '<script>alert("' . $remainCode . '");</script>';
		$result = mysqli_query($con, "SELECT * FROM pay WHERE code='$remainCode'") or die("Error 001");
		if(mysqli_num_rows($result) != 1){
			die("Error 1004: Please check the link in the email. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");
		}
		$true = 0;
		while($row = mysqli_fetch_array($result)){
			if($row['appCode']==$appCode){
				$true = 1;
				if($row['paid']=="Yes"){
					die("Error 1005: Please check the link in the email. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");
				}
			}
		}
		if($true != 1){
			die("Error 1006: Please check the link in the email. If you still have issues, email <a href='mailto:info@qcop.ca'>info@qcop.ca</a>.");
		}

	if($return != "Yes"){

		/*
		session_start();
		$_SESSION['appCode'] = $appCode;
		$_SESSION['code'] = $code;
		*/
	}else{
		$type = $_GET['d'];
		$type = contentCheck($type);
		session_start();
		$_SESSION['type'] = $type;
	}


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
	<link href="./css/main.css" rel="stylesheet"/>
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
	</style>
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
				<h1 style="color:white;">Pay</h1>
			</div>
		</div>
		<div class="row" style="margin-top:10px;">
			<div class="col-sm-12">
				<div class="about_wrapper" style="border-radius:15px;">
					<div class="about_buffer">
						
							
							<?php

								if($return == "Yes"){
									//echo '<script>alert("Yes");</script>';
									echo '<p>Please enter your information below and to pay with your card for the 2015 Conference. Thank you!</p>';
									include_once('./include/pay.php');
								}else{
									echo '<p>Please select your payment option. (i.e.whether you will be rooming at the Holiday Inn during the conference weekend).</p>';
									echo '<form action="./pay.php" method="get">';
										echo '<input type="text" name="r" value="Yes" hidden readonly required/>';
										echo '<input type="text" name="a" value="' . $appCode  . '" hidden readonly required/>';
										echo '<input type="text" name="c" value="' . $code . '" hidden readonly required/>';
										echo '<select name="d">';
											echo '<option>Delegate Fee + Accommodation</option>';
											echo '<option>Delegate Fee (no Accommodation)</option>';
										echo '</select>';
										echo '<div class="text-center col-sm-12">';
											echo '<button type="submit" class="btn btn-primary">Next Step</button>';
										echo '</div>';
									echo '</form>';
									echo '<br/><br/>';
								}
							?>
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