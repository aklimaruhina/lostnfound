<?php 
require_once('lib/app.php');


//$id= $_GET['id'];


	
?>

<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Lost And Found</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
	
		
		<!-- end: MAIN CSS -->
		
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="plugins/lightbox2/css/lightbox.css">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE CSS -->
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/styles-responsive.css">
	
	
	
		<!-- end: CORE CSS -->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	
<?php  
require_once 'header.php'; 
require_once 'menu.php';
?>
		
				<!-- start: PAGE -->
		<div class="page-content" style="min-height:187px; overflow-y:hidden;">
					
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
					<div class="container">
						<!-- start: PAGE HEADER -->
						
						<!-- end: PAGE HEADER -->
						
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-white">
									<div class="panel-heading">
										<h4 class="panel-title">Gallery</h4>
										
									</div>
									<div class="panel-body">
										<div class="controls">
											<h5>Filter Controls</h5>
											<ul class="nav nav-pills">
												<li class="filter active" data-filter="all">
													<a href="#">
														Show All
													</a>
												</li>
												<li class="filter" data-filter=".luggage">
													<a href="#">
														Luggage
													</a>
												</li>
												<li class="filter" data-filter=".trolley">
													<a href="#">
														Trolley
													</a>
												</li>
												<li class="filter" data-filter=".hand_bag">
													<a href="#">
														Hand Bag
													</a>
												</li>
												<li class="filter" data-filter=".briefcase">
													<a href="#">
														Briefcase
													</a>
												</li>
											</ul>
										</div>
										<hr/>
										<!-- GRID -->

										<ul id="Grid" class="list-unstyled">
<?php

$user_id = $_SESSION['user']['id'];		

$query = "SELECT * FROM `products` WHERE user_id=".$user_id ; 


$result = mysqli_query($link, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result) ) {

 		$data[]= $row ;

	}
	
 if ( count($data) > 0) {
 	foreach ($data as $prod) {

?>
	

										<li class="col-md-3 col-sm-6 col-xs-12 mix <?php echo $prod['catagory'] ?> gallery-img" data-cat="1">
											<div class="portfolio-item">
												<a class="thumb-info" href="<?php echo $prod['product_picture']?>" data-lightbox="gallery" data-title="<?php echo $prod['title'];?>">

													
														<img src="<?php echo $prod['product_picture']?>" class="img-responsive" alt="">
														
													
													   <span class="thumb-info-title"> <?php echo $prod['title'] ?> </span>
												</a>
												<div class="chkbox"></div>
												<div class="tools tools-bottom">
													<a href="view_prod.php?pid=<?php echo $prod['id']?>">
														<i class="fa fa-eye"></i>
													</a>
													<a href="prod_edit.php?pid=<?php echo $prod['id'];?>">
														<i class="fa fa-pencil"></i>
													</a>
													<a href="prod_delete.php?pid=<?php echo $prod['id'];?>">
														<i class="fa fa-trash-o"></i>
													</a>
												</div>
											</div>

										</li>

										
										
<?php
}

}
else {
  
 ?>   <h4>No product found!! Register your product <a href="register_new_pro.php?id= <?php echo $user_id?>"?>HERE</a>,</h4>
 <?php
}
?>
											</ul>

									</div>
								</div>
							</div>
						</div>
						<!-- end: PAGE CONTENT-->
					</div>
					
		</div>
	<!--[if gte IE 9]><!-->
		<script src="plugins/jQuery/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->

						<!-- end: CORE JAVASCRIPTS  -->
		<script>
		jQuery.noConflict();
			jQuery(document).ready(function() {
				
				PagesGallery.init();
			});
		</script>

<?php 
 require_once 'pre_footer.php';
 require_once 'footer.php';
 require_once 'scripts.php';?>
	</body>
	<!-- end: BODY -->
</html>