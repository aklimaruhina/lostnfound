<?php
require_once('lib/app.php');

//intialize data variables
$first_name = '';
$last_name = '';
$email = '';
$password = '';
$mobile_number= '';
$address= '';

$city = '';
$district= '';
$status= '';
$username='';

//set user type ADMIN if no user in db

$query = "SELECT count(*) as total_user FROM users";
$result = mysqli_query($link, $query);
$users = array();
$row = mysqli_fetch_assoc($result);
$total_user = intval($row['total_user']);
if($total_user === 0){
	$is_admin = 1;
}
else{ 
  $is_admin=0;
}

//hold full_name
if(isset($_POST['first_name']))
	$first_name = $_POST['first_name'];
if(isset($_POST['last_name']))
	$last_name = $_POST['last_name'];
//hold email
if(isset($_POST['email']))
	$email = $_POST['email'];
//hold password
if(isset($_POST['password']))
	$password = md5($_POST['password']);

if(isset($_POST['mobile_number']))
	$mobile_number = $_POST['mobile_number'];

if(isset($_POST['address']))
	$address = $_POST['address'];
//hold gender
// if(isset($_POST['gender']))
// 	$gender = $_POST['gender'];
//hold city
if(isset($_POST['city']))
	$city = $_POST['city'];
//hold hobbies
// if(isset($_POST['hobbies']) && !empty($_POST['hobbies']))
// 	$hobbies = implode(',',$_POST['hobbies']);
//hold about_me
if(isset($_POST['district']))
	$district = $_POST['district'];
if(isset($_POST['zip']))
	$zip = $_POST['zip'];


if(isset($_POST['username']))
	$username = $_POST['username'];



$photo_tmp = $_FILES['photo']['tmp_name'];
$photo_id = uniqid();
$photo_type = $_FILES['photo']['type'];
$photo_path = 'photo/'.$photo_id;
move_uploaded_file($photo_tmp, $photo_path);

$query1 = "INSERT INTO users(username,email, password, is_admin, created, created_by, modified, modified_by) 
			values('".$username."','".$email."','".$password."','".$is_admin."' , NOW(), '0', '0','0' )";
$success = mysqli_query($link,$query1);
var_dump($query1);

	$query_id = "SELECT * FROM users WHERE email ='".$email."' AND username = '".$username."' AND password = '".$password."'";
	$result = mysqli_query($link, $query_id);
	$user = array();
	$user = mysqli_fetch_assoc($result);
	$reg_user= $user['id'];
	


 $query2 = "INSERT INTO profiles(user_id,first_name, last_name, mobile_number,email, address,zip_code, city, district, status,created, created_by, modified,modified_by, deleted_at, profile_picture) 
 			values('".$reg_user."','".$first_name."','".$last_name."','".$mobile_number."', '".$email."','".$address."','".$zip."','".$city."','".$district."','1',NOW(), '0','0','0','0','".$photo_path."')";
dd($query);

$success = mysqli_query($link,$query2);

 if($success){
 	$_SESSION['msg_success'] = "Please re-enter your email and password.";
 }else{
 	$_SESSION['msg_error'] = "Failed to add data";
 }
 header('location: login.php');
