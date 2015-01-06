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

	check($name);
	check($email);
	check($school);
	check($major);
	check($gender);
	check($dType);
	check($age);
	check($q1);
	check($q2_1);
	check($q2_2);
	check($q2_3);
	check($q2_4);
	check($q2_5);
	check($q3);

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

	$to = "appqcop@gmail.com";
	$subject = "Application";
	$txt = "
	$name\n
	$email\n
	$school\n
	$major\n
	$gender\n
	$dType\n
	$age\n
	$return\n
	$campusRep\n
	$hearQCOP\n
	\n
	$q1\n
	$q2_1\n
	$q2_2\n
	$q2_3\n
	$q2_4\n
	$q2_5\n
	$q3\n
	$rp\n
	";
	$headers = "From: appqcop@gmail.com";

	mail($to,$subject,$txt,$headers);
	include_once('./include/conn.php');
	$code = genCode();
	mysqli_query($con, "INSERT INTO apps3 (code, name, email, school, major, gender, dType, age, returnD, campusRep, hearQCOP, q1, q2_1, q2_2, q2_3, q2_4, q2_5, q3, rp, result) VALUES ('$code', '$name', '$email', '$school', '$major','$gender','$dType','$age','$return','$campusRep','$hearQCOP','$q1','$q2_1','$q2_2','$q2_3','$q2_4','$q2_5','$q3','$rp','')") or die("Error 001");
	
	function genCode(){
		$s = "";
		$found = 0;
		while($found == 0){
			$s = "";
			for ( $i = 0 ; $i < 20 ; $i++ ){
				$s .= rand(0,10);
			}
			include_once('./include/conn.php');
			$result = mysqli_query($con, "SELECT * FROM apps WHERE code='$s'");
			if(mysqli_num_rows($result)==0){
				return $s;
			}

		}
		return $s;
	}
	function contentCheck($data){
		$data = trim($data);
		$data = addslashes($data);
		$data = htmlspecialchars($data);
		return $data;
  	}
  	function check($item){
  		if($item == ""){
  			die("A textbox was blank.");
  		}
  	}
?>
<html>
<head>
	<link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="./css/navbar.css" rel="stylesheet"/>
	<link href="./css/about.css" rel="stylesheet"/>
	<link href="./css/general.css" rel="stylesheet"/>
	
	<?php
		include_once('./include/analytics.php');
	?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="./js/navbar.js"></script>
	<script src="./js/external.js"></script>
	<title>Attend | QCOP</title>
	<link rel="SHORTCUT ICON" href="./imgs/qcop.png"/>
</head>
<body>

<?php
	include_once('./html/navbar.php');
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