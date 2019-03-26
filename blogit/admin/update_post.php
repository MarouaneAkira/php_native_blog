<?php 

require_once('../db.php');

session_start();
if(empty($_SESSION)){
	header('location: login.php');
}

if(!empty($_POST)){
	$id = $_POST['id'];
	$title = $_POST['title'];
	$paragraphe = $_POST['paragraphe'];
	
	$sql = "update articles set title = '".$title."', paragraphe = '".$paragraphe."' WHERE id = '".$id."'";
	
	$query = $db->query($sql);
	if($query->execute()){
		echo 'Update success';
	}
	
}elseif(!empty($_GET)){
	$id = $_GET['id'];
}

$sql = "select * from articles WHERE id = '".$id."'";
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll();

?>
<?php
foreach($result as $post):
?>
<!-- <form action="update_post.php" method="post">
	<input type="hidden" name="id" value="<?= $post['id']; ?>">
	<input type="text" name="title" value="<?= $post['title']; ?>">
	<textarea name="paragraphe" id="" cols="30" rows="10"><?= $post['paragraphe']; ?></textarea>
	<input type="submit" value="UPDATE">
</form> -->
<?php
endforeach;
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<form>
  <div class="form-group">
  	<input type="hidden" name="id" value="<?= $post['id']; ?>">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title" value="<?= $post['title']; ?>">
  </div>
  <div class="form-group">
    <label>Paragraphe</label>
    <textarea name="paragraphe" class="form-control" id="" cols="30" rows="10"><?= $post['paragraphe']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>