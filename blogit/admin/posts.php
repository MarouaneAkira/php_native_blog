<?php 
	require_once('../db.php');

	session_start();
	if(empty($_SESSION)){
	header('location: login.php');
}

 ?>
 <nav>
	<ul>
		<li><a href="add_posts.php">Add Posts</a></li>
	</ul>
</nav>

<?php
	$sql = "select * from articles";
	$query = $db->prepare($sql);
	$query->execute();
	$result = $query->fetchAll();
	
	foreach($result as $p):
?>

<div>
	<h1><?= $p['title']; ?></h1>
	<p><?= $p['paragraphe']; ?></p>
	<a href="update_post.php?id=<?= $p['id']; ?>">Update</a>
	<a href="delete_post.php?id=<?= $p['id']; ?>">Delete</a>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#!" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<?php endforeach; ?>
