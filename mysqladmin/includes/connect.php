<?php
		$link = mysqli_connect("localhost", "USER_NAME", "PASSWORD");
		mysqli_select_db($link, "DB_NAME");  
		mysqli_query($link, "SET CHARACTER SET utf8");
		?>
		