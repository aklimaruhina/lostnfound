<?php 
require_once('lib/app.php');
require_once 'links.php'; 
require_once 'header.php';

$id= $_GET['id'];


 $query = "SELECT * FROM `products` INNER JOIN profiles ON `profiles`.`user_id`='".$id."' AND `products`.`user_id`=`profiles`.`user_id`"; 

$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);



?>

</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->

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
							  <div class="row">

							  	 <div class="col-md-offset-2 center">
							  	   <h2> <span class="caption-subject font-green-sharp bold ">Product Code Matched!! </span></h2></br>

							  	 	<span class="caption-subject font-green-sharp bold uppercase">Want to find the owner of this product? </span></br>
									<span class="caption-subject font-green-sharp  "><small>Please enter your minimum informations to get connected to the owner and help them find their belongings. </small></span>
									<h4><span class="caption-subject font-blue-sharp bold ">THANK YOU!!</span></h4>

							  	 </div>
							  </div>
								
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

												<div class="tab-content">
													<div id="panel_overview" class="tab-pane fade in active">
														<div class="row">
															<div class="col-sm-5 col-md-4">
																<div class="user-left">
																	<div class="center">
																		<h4 style="color: black"><?php echo $data['first_name']." ".$data['last_name'];?></h4>
																		<div class="fileupload fileupload-new" data-provides="fileupload">
																			<div class="user-image">
																				<div class="fileupload-new thumbnail"><img src="<?php echo $data['profile_picture']?>" alt="">
																				</div>
																				<div class="fileupload-preview fileupload-exists thumbnail"></div>
																				<div class="user-image-buttons">
																					<span class="btn btn-azure btn-file btn-sm"><span class="fileupload-new"><i class="fa fa-pencil"></i></span><span class="fileupload-exists"><i class="fa fa-pencil"></i></span>
																						<input type="file">
																					</span>
																					<a href="#" class="btn fileupload-exists btn-red btn-sm" data-dismiss="fileupload">
																						<i class="fa fa-times"></i>
																					</a>
																				</div>
																			</div>
																		</div>
																		<hr>
																		<div class="social-icons block">
																			<ul>
																				<li data-placement="top" data-original-title="Twitter" class="social-twitter tooltips">
																					<a href="http://www.twitter.com" target="_blank">
																						Twitter
																					</a>
																				</li>
																				<li data-placement="top" data-original-title="Facebook" class="social-facebook tooltips">
																					<a href="http://facebook.com" target="_blank">
																						Facebook
																					</a>
																				</li>
																				<li data-placement="top" data-original-title="Google" class="social-google tooltips">
																					<a href="http://google.com" target="_blank">
																						Google+
																					</a>
																				</li>
																				<li data-placement="top" data-original-title="LinkedIn" class="social-linkedin tooltips">
																					<a href="http://linkedin.com" target="_blank">
																						LinkedIn
																					</a>
																				</li>
																				<li data-placement="top" data-original-title="Github" class="social-github tooltips">
																					<a href="#" target="_blank">
																						Github
																					</a>
																				</li>
																			</ul>
																		</div>
																		<hr>
																	</div>
																	<table class="table table-condensed table-hover">
																		<thead>
																			<tr>
																				<th colspan="3">Contact Information</th>
																			</tr>
																		</thead>
																		<tbody>
																			
																			<tr>
																				<td>Email:</td>
																				<td>
																				<a href="">
																					<?php echo $data['email']?>
																				</a></td>
																				
																			</tr>
																			<tr>
																				<td>Phone:</td>
																				<td>+880-<?php echo $data['mobile_number']?></td>
																				
																			</tr>
																			
																		</tbody>
																	</table>
																	<table class="table table-condensed table-hover">
																		<thead>
																			<tr>
																				<th colspan="3">General information</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>Address</td>
																				<td><?php echo $data['address']?></td>
																				
																			</tr>
																			<tr>
																				<td>City</td>
																				<td><?php echo $data['city']?></td>
																				
																			</tr>
																			<tr>
																				<td>District</td>
																				<td><?php echo $data['district']?></td>
																				
																			</tr>
																			<tr>
																				<td>Zip-Code</td>
																				<td><?php echo $data['zip_code']?></td>
																				
																			</tr>
																			
																			
																		</tbody>
																	</table>
																	
																</div>
															</div>
															<div class="col-sm-7 col-md-8">
															
															
																<div class="panel panel-white space20">
																	<div class="panel-heading">
																		
																		Product Details
																		
																	</div>
																	<div class="panel-body ">
																	    <div class="fileupload fileupload-new" >
																			<div class="user-image">
																				<div class="fileupload-new thumbnail"><img src="<?php echo $data['product_picture']?>" alt="">
																				</div>
																				
																				
																			</div>
																		</div>
																		<table class="table table-condensed ">
																		
																			<tbody>
																				
																				<tr>
																					<td style="font-weight:bold;">Title:</td>
																					<td><?php echo $data['title']?></td>
																					
																				</tr>
																				<tr>
																					<td style="font-weight:bold;">Product Code:</td>
																					<td><?php echo $data['product_code']?></td>
																					
																				</tr>
																				<tr >
																					<td style="font-weight:bold;">Description:</td>
																					<td><?php echo $data['description']?></td>
																					
																				</tr>
																				<tr>
																					<td style="font-weight:bold;">Color:</td>
																					<td><?php echo $data['color']?></td>
																					
																				</tr>
																				<tr>
																					<td style="font-weight:bold;">Weight:</td>
																					<td><?php echo $data['weight']?></td>
																					
																				</tr>
																				<tr>
																					<td style="font-weight:bold;">Catagory:</td>
																					<td><?php echo $data['catagory']?></td> 
																					
																				</tr>
																				<tr>
																					<td style="font-weight:bold;">Destination:</td>
																					<td><?php echo $data['destinaiton']?></td>
																					
																				</tr>
																				<tr>
																					<td style="font-weight:bold;">Travel Date:</td>
																					<td><?php echo $data['travel_date']?></td>
																					
																				</tr>
																				
																			</tbody>
																		</table>

																		
																	</div>
																</div>
															</div>
															
														</div>
														
													</div>
												
													
												</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="unknown_add_user.php?id=<?php echo $id?>" method="POST" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
								<div class="form-body">
									
									
									
									<div class="form-group">
										<label class="control-label col-md-4">Email <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="email"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Phone Number <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="mobile_number"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Write Message to the owner.</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<textarea name="message" row= "80" cols="45" placeholder="Enter your text to the owner here." value="I have found your product. Contact me ASAP. ">Hi! I have found your product. Contact me ASAP.</textarea>
											</div>
										</div>
									</div>
									
																		
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-4 col-md-8">
											<button type="submit" class="btn green">Send</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
								<div class="note row">
									<div class=" center">

										<h4 style="color:#C55F1B ">Thank you for your cooperation. Product owner will contact you through your email or phone number. You can anytime visit our site and register <a href="login.php">here</a> to have a stressless journey about your bolongings.</h4>
															
																
											
										</div>
									</div>
								</form>
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