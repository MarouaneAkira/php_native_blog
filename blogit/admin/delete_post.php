<?php

require_once('../db.php');

session_start();
if(empty($_SESSION)){
	header('location: login.php');
}


$id = $_GET['id'];

$sql = "delete from articles WHERE id = '".$id."'";

$query = $db->prepare($sql);
if($query->execute()){
	header('location: posts.php');
}

?>