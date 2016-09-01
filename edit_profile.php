<?php 
$profile = 1;
require_once('lib/app.php');

require_once 'links.php';
require_once 'header.php'; 
require_once 'menu.php'; 

$edit_profile = 1;

$id = $_GET['id'];

$query = "SELECT * FROM `users`,`profiles` WHERE `profiles`.`user_id`=".$id." AND `users`.`id`=".$id; 
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);

$old_photo = $data['profile_picture']; 
$optDhaka="";
$optSylhet="";
$optKhulna="";
$optBarisal="";
if ($data['district']== 'Dhaka') {
    $optDhaka = "selected='selected'";
}
if ($data['district']== 'Khulna') {
    $optKhulna = "selected='selected'";
}
if ($data['district']== 'Barisal') {
    $optBarisal = "selected='selected'";
}
if ($data['district']== 'Sylhet') {
    $optSylhet = "selected='selected'";
}



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
				<h1>User Profile <small>Edit</small></h1>
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
								<span class="caption-subject font-green-sharp bold uppercase">Edit Details</span>
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
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form id="form_sample_2" class="form-horizontal" action="update_profile.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
								<div class="form-body">
									
									<div class="form-group">
										<label class="control-label col-md-3">First Name <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="first_name" value="<?php echo $data['first_name'];?>"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Last Name <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="last_name" value="<?php echo $data['last_name'];?>"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Email <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="email" value="<?php echo $data['email'];?>"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Mobile Number  <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="mobile_number" value="<?php echo $data['mobile_number'];?>"/>
											</div>
											
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Address <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="address" value="<?php echo $data['address'];?>"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">City<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="city" value="<?php echo $data['city'];?>"/>
											</div>
										</div>
									</div>
									<div class="form-group zipcode">
										<label class="control-label col-md-3 ">Zip Code <span class="required ">
										* </span>
										   
  
										</label>
										<div class="col-md-4 ">
											<div class="input-icon right " >
												<i class="fa"></i>									
																							  
												<div class="input-icon">
													
													<input class="form-control placeholder-no-fix" type="text" placeholder="Zip Code" name="zip_code" value="<?php echo $data['zip_code'];?>" />
												</div>
											
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">District <span class="required">
										* </span>
										</label>
										<div class="col-md-4 ">
											<div class="input-icon right " >
												<i class="fa"></i>
												
												
												  <select class="form-control" id="zcode" name="district"?>">
												       <option>Please Select District...</option>
												       <option value="Dhaka" <?php echo $optDhaka?>>Dhaka</option>
												       <option value="Khulna" <?php echo $optKhulna?>>Khulna</option>
												        <option value="Barisal" <?php echo $optBarisal?>>Barisal</option>
												       <option value="Sylhet" <?php echo $optSylhet?>>Sylhet</option>
												    </select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Status<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="status" value="<?php echo $data['status'];?>"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Select an image 
										</label>
										<div class="col-md-3 fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new thumbnail">
												<img src="<?php echo $old_photo;?>" alt=""/>
											</div>	
											<div class="fileupload-preview fileupload-exists thumbnail"></div>
											<div>
												<span class="btn btn-file">
													<span class="fileupload-new">
														 <button type="submit" class="btn blue"><i class="fa fa-picture-o"></i> Select Image</button>
													</span>
													<span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
													<input type="file" name="photo" value="">
													<input type="hidden" name="old_photo" value="<?php echo $data['profile_picture'];?>"/>

												</span>
												<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
												<i class="fa fa-times"></i> Remove
													</a>
											</div>
										</div>
										
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
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