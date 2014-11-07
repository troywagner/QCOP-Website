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

	$con = mysqli_query("","","","") or die("Error 001");
	
	
	function contentCheck($data){
		$data = trim($data);
		$data = addslashes($data);
		$data = htmlspecialchars($data);
		return $data;
  	}
?>