<?php
$inbox = 1;
require_once('lib/app.php');
require_once 'links.php'; 
require_once 'header.php'; 
require_once 'menu.php'; 

$inbox = 1;

if(!user_loggedin() ){
	header('location: login.php');
}

$id = $_GET['id'];

 ?>


</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>User Messages <small>All</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			
		</div>
	</div>
	<!-- END PAGE HEAD -->
        


	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			
			
			<!-- BEGIN PAGE CONTENT INNER -->
			
			
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">User Inbox</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								
							</div>
						</div>

						<div class="portlet-body form row">
							<!-- BEGIN FORM-->
							<form action="" id="" class="col-md-12">
								
								<div class="col-md-8 col-md-offset-2">
								    <div class="portlet-body form row">
										<div class="panel-body messages">"
											<ul class="messages-list col-md-10 col-md-push-1" style=" margin-top:20px;">
												
<?php

$query1 = "SELECT * FROM un_user WHERE user_id = $id ORDER BY id DESC";
$result = mysqli_query($link,$query1);
$data= array();
while ($row = mysqli_fetch_assoc($result) ) {
 		$data[]= $row ;
	}
 if (count($data) > 0) {
 	foreach ($data as $un_user) {




?>
												<li class="messages-item ">
													
													
													<span class="messages-item-from" style="text-align:left; font-size: 18px; margin-bottom:25px;">From: <a href=""><?php echo $un_user['email']?></a></span>
													<div class="bubble">
													    <span class="messages-item-subview " style="padding:10px 0px; text-align:left" ><b>Phone: </b><?php echo $un_user['mobile_number']?> </span>
	                                 
														<span class="messages-item-preview" style="padding-top:20px;text-align:left; font-size: 16px;"><blockquote><?php echo $un_user['message']?></blockquote></span>
														<div class="messages-item-time">
															
															<span class="text" style="text-align:left;  "><?php echo $un_user['sent_at']?></span>
														</div>
														
														
													</div>
													
													
												</li>


<?php
}
}

	else {
  
 ?>   <h4>No message found!! </h4>
 <?php
}

?>												
											</ul>
														
										</div>	
                                    </div>
									
									
								</div>

							</form>
						</div>





									
										
									
								
								
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
			
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<?php require_once 'pre_footer.php';?>
<?php require_once 'footer.php';?>
<?php require_once 'scripts.php';?>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>