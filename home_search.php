<?php
require_once('lib/app.php');

//intialize data variables
$home_search = '';

//set user type ADMIN if no user in db


if(isset($_POST['home_search']) && !empty($_POST['home_search']))
{
	$home_search = $_POST['home_search'];
	

	$query1 = "SELECT * FROM `products` WHERE product_code = '".$home_search."' AND status = 1 ";
	
	$result = mysqli_query($link,$query1);
	$product = mysqli_fetch_assoc($result);
	
	if(!empty($product))
	{
	 // echo "ok";
		$id= $product['user_id'];
	   header('location: unknown_user.php?id='.$id);
	}
	else
	{  $_SESSION['msg_error'] = "Sorry! Code not Founf! Please try again. ";
	   header('location: index.php');
		
	}  
}
else{
	$_SESSION['msg_error'] = "Please enter a code. ";
	 header('location: index.php');
}


