<?php
session_start();
$logged_in = $_SESSION["logged_in"];
?>
<html>
	<head>
		<style>
			.ticket-container {
				width: 80%;
			}
			.task-type {
				border-radius: 1px 0 3px 4px;
			}
		</style>
	</head>
	<body>
		<?php
		if ("true" == $logged_in){
			echo "[...|...]\n";
		} else {
			echo "<a href='view/login.php'>Login</a>";
		}
		?>
	</body>
</html>
