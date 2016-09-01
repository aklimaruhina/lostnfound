<?php
	require_once('lib/app.php');

	$email = $_POST['email'];
	
	$password = md5($_POST['password']);
	$query = "SELECT * FROM users WHERE email ='".$email."' AND password = '".$password."'";
	$result = mysqli_query($link, $query);
	$user = array();
	$user = mysqli_fetch_assoc($result);

	if($user['id'] && $user['is_admin']==0){
		//authenticate
		
			
		    $_SESSION['user_loggedin'] = true;
		    $_SESSION['user'] = $user;
		   header("location: check_status.php?id=".$user['id']);
		    
		}
		else if($user['id'] && $user['is_admin']==1){
		    $_SESSION['user_loggedin'] = true;
		    $_SESSION['user'] = $user;
           header("location: admin_dashboard.php?id=".$user['id']);
		 }

	else{
		//authentication failed
		$_SESSION['msg_error'] = 'Authentication failed! Please try again.';
		header('location: login.php');
	}



?>
