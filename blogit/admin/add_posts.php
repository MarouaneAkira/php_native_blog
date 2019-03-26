<?php 

require_once '../db.php';
session_start();
if(empty($_SESSION)) {
	header('location: login.php');
}


if(!empty($_POST)) {
	$title = $_POST['title'];
	$paragraphe = $_POST['paragraphe'];

	$sql = "INSERT INTO articles(title,paragraphe) VALUES ('".$title."','".$paragraphe."')";
	
	$query = $db->prepare($sql);
	if($query->execute()){
		echo 'Success';
}}

 ?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<form action="add_posts.php" method="post">
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control">
  </div>
  <div class="form-group">
    <label>Paragraphe</label>
    <textarea name="paragraphe" class="form-control" cols="30" rows="10"></textarea>
  </div>
  <input type="submit" value="Add" class="btn btn-submit">
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
