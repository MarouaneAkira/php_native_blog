<?php 

	$user = strtolower($_POST['user']);
	$pass = $_POST['password'];

	try {

		$db = new PDO('mysql:host=localhost;dbname=blogit;charset=utf8', 'root', '');
	}

	catch(Exception $e) {

		echo $e->getMessage();
	}

	$log = ('SELECT user FROM log_in WHERE user="'.$user.'" && password="'.$pass.'"');

	$query = $db->query($log);

	$query->execute();

	$result = $query->fetchAll();

	if(count($result) != 0) {

		session_start();

		$_SESSION['mail'] = $user;

		header('location:dashboard.php');
	}

?>