<?php 
$ad_dashboard =1;
require_once('lib/app.php');
require_once 'links.php'; 
require_once 'header.php';
require_once 'ad_menu.php';

$id= $_GET['id'];
$query1 = "SELECT * FROM users WHERE is_admin=1";
$success = mysqli_query($link,$query1);
$data = mysqli_fetch_assoc($success);
	
	
?>


</div>

<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->

<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Admin Dashboard <small></small></h1>
			</div>
			<!-- END PAGE TITLE -->
			
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			
	
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Admin Details</span>
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
								<h3 style="color:#000;"><?php echo $data['username']?></h3>
									<table class="table table-condensed table-hover ">
										<thead>
											<tr>
											<th colspan="3">Contact Information</th>
											</tr>
										</thead>
									    <tbody>
											
						  					<tr>
												<td>email:</td>
												<td><a href=""><?php echo $data['email']?></a></td>
												<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
											</tr>
											<tr>
												<td>Password:</td>
												<td><?php echo $data['password']?></td>
												<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
											</tr>
											
										</tbody>
									</table>
									<!-- <table class="table table-condensed table-hover">
																<thead>
																	<tr>
																		<th colspan="3">General information</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Address</td>
																		<td>jghfhfhfg</td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>District</td>
																		<td>fdfdfd</td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>City</td>
																		<td>hfgfgfgr</td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Zip-Code</td>
																		<td>
																		<a href="#">
																			121212
																		</a></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Status</td>
																		<td><span class="label label-sm label-info">User</span></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																</tbody>
								    </table> -->
								    <table class="table table-condensed table-hover">
																<thead>
																	<tr>
																		<th colspan="3">Additional information</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Created in:</td>
																		<td><?php echo $data['created']?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Created by:</td>
																		<td><?php echo $data['username']?> </td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Modiefied in:</td>
																		<td><?php echo $data['modified']?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Modified by:</td>
																		<td>
																			<?php 
																			//echo get_user_type();
																			if ($data['is_admin']==1) {
																				echo "Admin";
																			}
																			?> 
																		</td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>

																</tbody>
									</table>
								</div>
							</form>
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

</body>
<!-- END BODY -->
</html>