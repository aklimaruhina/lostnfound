<?php
require_once('lib/app.php');

$id = $_GET['id'];

$link = mysqli_connect('localhost', 'root', '', 'lostnfound');
$query = "UPDATE `lostnfound`.`profiles` SET `status` = '1' WHERE `id` = $id";
$result = mysqli_query($link, $query);
/*
echo '<pre>';
var_dump($result);
echo '<pre>';
die();
 * 
 */

if($result){
    header('location: block_user.php');
}


