<?php
	$name = "";
	$email = "";

	$name = $_POST['name_textbox'];
	$email = $_POST['email_textbox'];

	$name = contentCheck($name);
	$email = contentCheck($email);

	include_once('../include/conn.php');

	mysqli_query($con, "INSERT INTO email (name, email) VALUES ('$name','$email')") or die("error: unable to sign up");

	echo '<script>window.location.replace("../thanks.php?c=early");</script>';
	header('Location: http://www.qcop.ca/thanks.php?c=early');
	die("<a href='../thanks.php?c=early'>Return Home</a>");

	function contentCheck($data){
		$data = trim($data);
		$data = addslashes($data);
		$data = htmlspecialchars($data);
		return $data;
  	}
?>