<?php

session_start();
require_once('debug.php');
require_once('database.php');
require_once('functions.php');

 $config = array();
 $config['district'] = array('Chittagong','Dhaka','Barisal','Khulna','Rangpur');

 $config['photo_path'] = 'profile_photo/';
 $_SESSION['config'] = $config;
?>

<!-- <p ><b>Current User:</b> <?php show_user_info();?></p>
 -->