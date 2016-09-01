<?php
require_once('lib/app.php');
$pid = $_GET['pid'];

// $sql1 = "DELETE * FROM `users` WHERE `id` = ".$id;
// 	mysqli_query($link,$sql1);
$sql2 = "DELETE FROM `products` WHERE `id`=".$pid;

	$success=mysqli_query($link,$sql2);
	//var_dump($success);
	//header('location:ad_users.php');

if($success){
	$_SESSION['msg_success'] = 'Deleted succesfully';
 	
   

 }else{
 		$_SESSION['msg_error'] = 'Delete Failed';
   

 }

 header("location:prod_list.php");

?>