<?php

require_once('lib/app.php');
$id = $_GET['id'];

$query = "SELECT * FROM profiles WHERE user_id = $id";
	$result = mysqli_query($link, $query);
	$user = array();
	$user = mysqli_fetch_assoc($result);
        
	if($user['user_id'] && $user['status']==0 ){
            
            header("location: block_msg.php?id=".$id);          

        }  else {
            header("location: user_dashboard.php?id=".$id);
        }
 
?>