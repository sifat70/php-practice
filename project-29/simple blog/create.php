<?php 
include 'config/db.php';

if (isset)($_POST['submit']) {
  $var_title = mysqli_real_escape_string($conn, $_POST['title']);
  $var_body = mysqli_real_escape_string($conn, $_POST['body']);
  $var_author = mysqli_real_escape_string($conn, $_POST['author']);


  //create query

   $query = "INSERT INTO posts (title, body, author) VALUES ('var_title', 'var_body', 'var_author')";


   if (mysqli_query($conn, $query)){
    header('Location: index.php');
   }else{
    echo "Something went wrong";
   }



}



 ?>

<?php include 'layouts/header.php'; ?>

   <div class="row justify-content-center">
     <div class="col-lg-6">
       <div class="card">
         <div class="card-header">
           <h4 class="card-title">Create New Post</h4>
         </div>
         <div class="card-body">
           <form action="" method="post">
             <div class="mb-4">
               <input type="text" name="title" class="form-control" placeholder="Input Post Title">
             </div>
             <div class="mb-4">
               <textarea name="body" rows="6" placeholder="Input Post Body" class="form-control"></textarea>
             </div>
             <div class="mb-4">
               <input type="text" name="author" class="form-control" placeholder="Input Post Author Name">
             </div>
             <div class="d-grid">
               <input type="submit" class="btn btn-success" name="submit" value="Create">
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
   
<?php include 'layouts/footer.php'; ?>