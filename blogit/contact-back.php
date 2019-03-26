<?php

require_once 'db.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$commentary = $_POST['paragraphe'];

	// echo $name.' '.$email.' '.$commentary;

	$query = $db->prepare("INSERT INTO contact(email,name,message) VALUES ('".$name."','".$email."','".$commentary."')");
	if($query->execute()){
		echo 'ok';
	}

?>