<?php
	echo '<html>';
	echo '<head>';

	echo '</head>';
	echo '<body>';
		echo 'Starting<br/>';
		include_once('./include/conn.php');
		$result = mysqli_query($con, "SELECT * FROM apps") or die("Error 001");
		$count = 0;
		while($row = mysqli_fetch_array($result)){
			$name = $row['name'];
			$result2 = mysqli_query($con, "SELECT * FROM names_reviewed2 WHERE name='$name'") or die("Error 002");
			if(mysqli_num_rows($result2)==0){
				if($name != ""){
					mysqli_query($con, "INSERT INTO names_reviewed2 (name) VALUES ('$name')") or die("Error 003");
					$count++;
				}
			}
		}
		echo $count;



?>