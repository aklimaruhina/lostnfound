<?php
require_once('lib/app.php');
$id = $_GET['id'];

// $sql1 = "DELETE * FROM `users` WHERE `id` = ".$id;
// 	mysqli_query($link,$sql1);

$sql2 = "DELETE FROM `users`, `profiles`, `products` USING `users` INNER JOIN `profiles` INNER JOIN `products` INNER JOIN `un_users` WHERE `profiles`.user_id = $id AND `users`.id = `profiles`.user_id AND `products`.user_id = `profiles`.user_id AND `un_users`.user_id = `profiles`.user_id" ;
   
$success=mysqli_query($link,$sql2);
var_dump($success);

if($success){
	
 	// echo '<script type="text/javascript">'
  //  , 'alert( "Successfully Deleted");'
  //  , '</script>';
	$_SESSION['msg_success'] ="User Deleted Successfully";
   

 }else{
 	// echo '<script type="text/javascript">'
  //  , 'alert( "Delete Failed");'
  //  , '</script>';
   $_SESSION['msg_error'] = "Delete Failed";

 }
header("location:ad_users.php");
?>