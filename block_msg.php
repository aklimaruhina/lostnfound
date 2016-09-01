<?php
$blocked = 1;

require_once('lib/app.php');
 require_once 'links.php'; 
 require_once 'header.php'; 
 require_once 'menu.php'; 


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
                            <h1 style="color: red">Blocked <small></small></h1>
			</div>
			<!-- END PAGE TITLE -->
			
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE CONTENT INNER -->
			
			
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">User Details</span>
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
<?php										
$query = "SELECT * FROM `users`,`profiles` WHERE `profiles`.`user_id`=".$id." AND `users`.`id`=".$id; 
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);

?>
						<div class="portlet-body form row">
							<!-- BEGIN FORM-->
							<form action="" id="" class="col-md-12">
								<div class="form-body col-md-4">
									
									<div class="center">
										<h4 style="color:#000;"><?php echo $data['first_name']." ".$data['last_name'];?></h4>
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="user-image">
												<div class="fileupload-new thumbnail"><img src="<?php echo $data['profile_picture']; ?>" >
												</div>
												
												
											</div>
										</div>
                                                                                <a class="disabled-link" >View your products</a>
									</div>
									
								</div>
								<div class="col-md-8">
                                                                    <h3 style="color: red">You are temporarily Blocked !</h3>
                                                                    <br>
                                                                    <h4 style="color: blue">Please Contact Us: 01911598603 | lostnfound@found.com</h4>
								</div>
<?php
session_destroy();

?>
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