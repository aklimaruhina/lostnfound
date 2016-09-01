<?php
require_once('lib/app.php');

$id = $_GET['id'];


//intialize data variables
$title = '';
$description = '';
$color = '';
$weight = '';
$destination= '';
$others= '';



//dd($user_type);

//hold full_name
if(isset($_POST['title']))
	$title = $_POST['title'];
if(isset($_POST['description']))
	$description = $_POST['description'];
//hold email
if(isset($_POST['color']))
	$color = $_POST['color'];
//hold password
if(isset($_POST['weight']))
	$weight = $_POST['weight'];

if(isset($_POST['destination']))
	$destination = $_POST['destination'];

if(isset($_POST['others']))
	$others = $_POST['others'];

if(isset($_POST['catagory']))
	$catagory = $_POST['catagory'];

$product_code = $_POST['product_code'];

$photo_tmp = $_FILES['photo']['tmp_name'];
$photo_id = uniqid();
$photo_type = $_FILES['photo']['type'];
$photo_path = 'photo/'.$photo_id;
move_uploaded_file($photo_tmp, $photo_path);


$query1 = "INSERT INTO products(catagory, title,description, product_code, user_id,color, weight,destinaiton, others, travel_date, product_picture) values('".$catagory."' ,'".$title."','".$description."','".$product_code."','".$id."' ,'".$color."','".$weight."','".$destination."','".$others."', NOW(), '".$photo_path."')";
$success = mysqli_query($link,$query1);
$pid = mysqli_insert_id($link);

if($success){
	header("location:view_prod.php?pid=".$pid);
 	echo '<script type="text/javascript">'
   , 'alert( "Successfully Updated");'
   , '</script>';
   

 }else{
 	echo '<script type="text/javascript">'
   , 'alert( "Update Failed");'
   , '</script>';
   //header("location:add_prod.php?id=".$id);
   var_dump($query1);

 }
