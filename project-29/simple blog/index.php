<?php 

 include 'config/db.php';


 // create query
 $query = "SELECT * FROM posts ORDER BY id DESC";


 // get result
 $result = mysqli_query($conn, $query);

 // fetch data
 $allpost = mysqli_fetch_all($result, MYSQLI_ASSOC);




 ?>


<?php include 'leyouts/header.php'; ?>

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

 <?php include 'leyouts/footer.php'; ?>