<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>loop practice</title>
</head>
<body>
	<div style="text-align: center;">
		<h2>Loop Demo</h2>
		<select>
			<?php for($x=1970; $x <= date("Y") ; $x++){ ?>
			<option><?php echo $x;?></option>
			<?php }?>
		</select>
		<select>
			<?php for($x=1970; $x <= date("Y") ; $x++): ?>
			<option><?php echo $x;?></option>
			<?php endfor?> <!-- -->
		</select>
	</div>
<!-- inspect or view page source(crl+u) এ যেয়ে দেখলে php এর code দেখা যাবে না কারন php preprocessor text. only hyper text can be seen -->
</body>
</html> 