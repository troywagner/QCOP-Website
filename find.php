<?php
	echo '<html>';
	echo '<head>';

	echo '</head>';
	echo '<body>';
		echo '<script>';
			include_once('./include/conn.php');
			$result = mysqli_query($con, "SELECT * FROM apps") or die("Error 001");
			//$count = 0;
			while($row = mysqli_fetch_array($result)){
				$name =  $row['name'];
				echo $row['name']  . '<br/>';
				$result2 = mysqli_query($con, "SELECT * FROM names_reviewed WHERE name='$name'") or die("Error 002");		
				if(mysqli_num_rows($result2) == 0){
					//if($count < 5){
					
						mysqli_query($con, "INSERT INTO names_reviewed (name) VALUES ('$name')") or die("Error 003");
						//echo 'window.open("https://mail.google.com/mail/u/3/#search/' . $name . '");';
					//}
					//$count++;
				}
				
			}
		echo '</script>';
	echo '</body>';
	echo '</html>'
?>