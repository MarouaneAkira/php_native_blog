<header>
		<h1>Blogit</h1>
		<nav class="nav-top">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact </a></li>
				<?php 
				session_start();
				if(empty($_SESSION)) {
					echo '<li><a href="admin/login.php">Login/Signup</a></li>';
				}else{
					echo '<li><a href="admin/dashboard.php">'.$_SESSION['mail'].'</a></li>';
				}
				?>
			</ul>
		</nav>
	</header>