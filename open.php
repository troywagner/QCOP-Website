<html>
<head>

</head>
<body>
<?php
	include_once('./include/conn.php');
	$id = $_GET['id'];
	$result = mysqli_query($con, "SELECT * FROM pay WHERE id='$id'") or die("Error 001");
	while($row = mysqli_fetch_array($result)){
		$link = 'https://www.qcop.ca/pay.php?c=3' . $row['code'] . '&a=' . $row['appCode'];
		echo '<script>window.open("' . $link . '");</script>';
	}
	die("<a href='" . $link . "'>Link</a>");
?>
</body>
</html>