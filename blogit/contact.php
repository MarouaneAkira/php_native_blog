<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blogit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<?php require_once 'header.php';  ?>
	<main class="form-group">
		<!-- <form action="contact-back.php" method="post"> -->
			<label>Name: </label><input type="text" name="name" id="name" class="form-control"><br><br>
			<label>Email: </label><input type="text" name="email" id="email" class="form-control"><br><br>
			<label>Commentary: </label><input type="textarea" name="paragraphe" id="paragraphe" class="form-control"><br><br>
			<p id="alert"></p>
			<input type="sumbit" onclick="contact_form()" value="Submit" class="btn btn-submit">
		<!-- </form> -->
	</main>
	<?php require_once 'footer.php'; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/contact-script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>