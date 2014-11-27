<?php
	echo '<html>';
	echo '<head>';

	echo '</head>';
	echo '<body>';
		echo 'Starting<br/>';
		include_once('../include/conn.php');
		$result = mysqli_query($con, "SELECT * FROM names_reviewed2") or die("Error 001");
		$count = 1;
		echo '<table>';
			echo '<tr>';
				echo '<th>ID</th>';
				echo '<th>Name</th>';
				
			echo '</tr>';

			while($row = mysqli_fetch_array($result)){
				echo '<tr>';
					echo '<td>' . $count . '</td>';
					$name = $row['name'];
					echo '<td>' . $name . '</td>';
				echo '</tr>';
				$count++;
			}
		echo '</table>';
		//echo $count;
	echo '</body>';
	echo '</html>';

?>