<?php
require_once('lib/app.php');
$id = $_GET['id'];
$sql1 = "UPDATE `profiles` SET status='0' WHERE `id`=".$id;

	$success=mysqli_query($link,$sql1);
	
	header('location:ad_users.php');