<?php 

 include 'config/db.php';


 // create query
 $query = "SELECT * FROM posts ORDER BY id DESC";


 // get result
 $result = mysqli_query($conn, $query);

 // fetch data
 $allpost = mysqli_fetch_all($result, MYSQLI_ASSOC);




 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Blog</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
 
 <h2 class="text-center">Our Simple Project</h2>

 <div class="container">
   <?php foreach ($allpost as $data): ?>	
 	<div class="row justify-content-center my-5">
 		<div class="col-lg-6">
 			<div class="card">
 				<div class="card-header">
 					<h4 class="card-title"><?php echo $data['title']; ?></h4>
 				</div>
 				<div class="card-body">
 					<p><?php echo $data['body']; ?></p>
 					<p>Created On <?php echo $data['craeated_at']; ?> By <strong><?php echo $data['author']?></strong></p>
 				</div>
 			</div>
 		</div>
 	</div>
  <?php endforeach?>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>