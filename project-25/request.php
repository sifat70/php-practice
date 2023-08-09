<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<form action="" method="post">
			<div style="margin-bottom: 20px;">
				<input type="text" name="username" placeholder="Input Username">
			</div>
			<div style="margin-bottom: 20px;">
				<input type="text" name="email" placeholder="Input Email">
			</div>
			<div>
				<input type="submit" name="submit" value="Submit">
			</div>
		</form>
		<?php
		
		if($_SERVER['REQUEST_METHOD'] == "POST"){
					$uname = $_REQUEST['username'];
					$uemail = $_REQUEST['email'];
		
					echo "Username is: ".$uname." & Email is: ".$uemail;
				}
		
		?>
	</body>
</html>