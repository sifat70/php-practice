<?php
$name = $email = $phone = $address = $gender = "";
$errorname = $erroremail = $errorphone = $erroraddress = $errorgender = "";
if (isset($_POST['submit'])) {
	if(empty($_POST['name'])){
		$errorname = "<div class='alert alert-danger'>Name Is Requied</div>";
	}else{
		$name = $_POST['name'];
	}
	if(empty($_POST['email'])){
		$erroremail = "<div class='alert alert-danger'>Email Is Requied</div>";
	}elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$erroremail = "<div class='alert alert-danger'>Invalid Email Address</div>";
	}else{
		$email = $_POST['email'];
	}
	if(empty($_POST['phone'])){
		$errorphone = "<div class='alert alert-danger'>Phone Is Requied</div>";
	}else{
		$phone = $_POST['phone'];
	}
	if(empty($_POST['address'])){
		$erroraddress = "<div class='alert alert-danger'>Address Is Requied</div>";
	}else{
		$address = $_POST['address'];
	}
	if(empty($_POST['gender'])){
		$errorgender = "<div class='alert alert-danger'>Gender Is Requied</div>";
	}else{
		$gender = $_POST['gender'];
	}
	
	
	

echo $name."<br>";
echo $email."<br>";
echo $phone."<br>";
echo $address."<br>";
echo $gender."<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Form Practice</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-center mt-5">
				<div class="col-lg-8">
					<div class="card">
						<div class="card-header text-center bg-danger text-white">
							<h4>Form Practice</h4>
						</div>
						<div class="card-body">
							<form action="" method="post">
								<div class="mt-4">
									<label>Username</label>
									<?php echo $errorname ; ?>
									<input type="text" name="name" placeholder="Input Your Name" class="form-control">
								</div>
								<div class="mt-4">
									<label>Email</label>
									<?php echo $erroremail ; ?>
									<input type="email" name="email" placeholder="Input Your Email" class="form-control">
								</div>
								<div class="mt-4">
									<label>Phone</label>
									<?php echo $errorphone ;  ?>
									<input type="text" name="phone" placeholder="input your Phone number" class="form-control">
								</div>
								<div class="mt-4">
									<label>Adderss</label>
									<?php echo $erroraddress ;  ?>
									<textarea name="address" class="form-control" placeholder="Input Your Adderss"></textarea>
								</div>
								<div class="mt-4">
									<?php echo $errorgender ; ?>
									<label>Gender</label>
								</div>
								<div class="form-check form-check-inline">
									<input type="radio" name="gender" class="form-check-input" value="Male">
									<label>Male</label>
								</div>
								<div class="form-check form-check-inline">
									<input type="radio" name="gender" class="form-check-input" value="Female">
									<label>Female</label>
								</div>
								<div class="d-grid mt-4">
									<input type="submit" name="submit" class="btn btn-danger" value="Create">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>