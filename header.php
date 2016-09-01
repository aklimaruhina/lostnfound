<?php 
require_once('lib/app.php');

?>
<body>




<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="index.php"><h3>Lost And Found</h3></a>
			</div>
			<!-- END LOGO -->
			<div class="floatright admin_name">
<?php
if(isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin'] == true){
	
$user_id = $_SESSION['user']['id'];
$query = "SELECT * FROM `profiles` WHERE user_id=".$user_id; 
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);

if($_SESSION['user']['is_admin'] == 0){
?>
		
				<img class="profile-image img-rounded pull-left " width="auto" height="40px" src="<?php echo $data['profile_picture']; ?>" >


			 <?php 
			}
			  
                        else {?><h3 style="float:left">Welcome &nbsp;</h3>
			 <?php }} ?>
						 	  
			  <h3 style="float:left"><a><?php echo strtoupper(show_user_info());?> </a></h3>
				
			</div>
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			
			
		</div>
	</div>
	<!-- END HEADER TOP -->
	
