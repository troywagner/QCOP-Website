<?php
	$name = "";
	$email = "";
	$message = "";


	$name = $_POST['name_textbox'];
	$email = $_POST['email_textbox'];
	$message = $_POST['message_textbox'];

	$name = contentCheck($name);
	$email = contentCheck($email);
	$message = contentCheck($message);
	
	$to = "qcopexec@gmail.com";


	$subject = "From the website";
	$txt = "$name\n$email\n\n\n$message";
	$headers = "From: qcopexec@gmail.com" . "\r";

	mail($to,$subject,$txt,$headers);


	echo '<script>window.location.replace("../thanks?c=email");</script>';
	header('Location: http://www.qcop.ca/thanks?c=email');
	die("<a href='../thanks?c=email'>Return Home</a>");

	function contentCheck($data){
		$data = trim($data);
		$data = addslashes($data);
		$data = htmlspecialchars($data);
		return $data;
  	}
?>