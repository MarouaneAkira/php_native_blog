<?php 
include 'db.php';

$sql = 'SELECT * FROM articles';

$query = $db->query($sql);

$query->execute();

$result = $query->fetchAll();

if(count($result) == 0 ){

	echo 'not Found';

}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blogit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php require_once 'header.php';  ?>
	<main>
		<?php 
		include 'db.php';

		$sql = 'SELECT * FROM articles';

		$query = $db->query($sql);

		$query->execute();

		$result = $query->fetchAll();

		foreach($result as $r) {
			echo '<article>';
			echo "<div class='img-article' style='background-image:url(".$r['image'].")'></div>";
			echo "<h2><a href='blog.php?id=".$r['id']."'>".$r['title']."</a></h2>";
			echo "<hr>";
			echo "<p>".$r['paragraphe']."</p>";
			echo '</article>';
		} ?>
<!-- 		<article>
			<img src="img/men.jpg">
			<h2>Lorem Ipsum Sit Amet</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article>
		<article>
			<img src="img/women.jpg">
			<h2>Lorem Ipsum Sit Amet</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article>
		<article>
			<img src="img/men.jpg">
			<h2>Lorem Ipsum Sit Amet</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article>
		<article>
			<img src="img/women.jpg">
			<h2>Lorem Ipsum Sit Amet</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article> -->
	</main>
	
	</footer>
	<?php require_once 'footer.php'; ?>
</body>
</html>