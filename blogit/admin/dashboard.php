<?php

session_start();
if(empty($_SESSION)){
	header('location: login.php');
}

?>
<nav class="nav-top">
	<ul>
		<li><a href="posts.php">Posts</a></li>
	</ul>
</nav>