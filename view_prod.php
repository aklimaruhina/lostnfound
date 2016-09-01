<?php
require_once('lib/app.php');
 require_once 'links.php'; 
 require_once 'header.php'; 
 require_once 'menu.php'; 


if(!user_loggedin()){
	header('location: login.php');
}

$pid = $_GET['pid'];

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
				<h1>Your Product <small>Details</small></h1>
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
								<span class="caption-subject font-green-sharp bold uppercase">Product Details</span>
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
$query = "SELECT * FROM `products` WHERE id=".$pid; 
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);

?>
						<div class="portlet-body form row">
							<!-- BEGIN FORM-->
							<form action="" id="" class="col-md-12">
								<div class="form-body col-md-4">
									
									<div class="center">
										<h4 style="color:#000;"><?php echo $data['title'];?></h4>
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="user-image">
												<div class="fileupload-new thumbnail"><img src="<?php echo $data['product_picture']; ?>" >
												   
												</div>
												
												
											</div>
											
										</div>
										<div class="row">
											<div class="col-md-6 col-md-offset-3 ">
												
												    <div class="row" style="text-align:left">	

		                                   				 <a href="prod_edit.php?pid=<?php echo $data['id'];?>" class="show-tab"><i class="fa fa-pencil"></i> Edit Product</a>
											
													</div>							 							
									    
												    <div class="row" style="text-align:left">
												    	<a href="prod_delete.php?pid=<?php echo $data['id'];?>" class="show-tab"><i class="fa fa-trash-o"></i> Delete This product</a>
												    </div>
			                                        <div class="row" style="text-align:left">
			                                        	<a href="prod_list.php?id=<?php echo $data['user_id'];?>" class="show-tab"><i class="fa fa-eye"></i> View List</a>

			                                        </div>

												
											</div>
										</div>
										
									    <div class="row" >
                                                                                <?php if ($data['status']== 1){ ?>
										  <div class="col-md-8 col-md-push-2" style="margin-top:20px">
										    	 
                                                                                      <a href="product_hide_process.php?pid=<?php echo $data['id'];?>" ><button type="button" class="btn btn-block btn-red" style="padding-right : 20px"> Hide Product</button></a>
											    </div>
                                                                                <?php } else {?>
                                                                                    <div class="col-md-8 col-md-push-2" style="margin-top:20px" >
										    	 
											    	<a href="product_unhide_process.php?pid=<?php echo $data['id'];?>"><button type="button" class="btn btn-block btn-green" style="padding-right : 20px">Product Unhide</button></a>
											    </div>
                                                                                    <?php }?>
										        <div class="col-md-8 col-md-push-2" style="margin-top:20px">
										    	 
											    	<a href="pdf/pdf.php?pid=<?php echo $data['id'];?>"> <button type="button" class="btn btn-block btn-orange" style="padding-right : 20px">Print Code</button></a>
											    </div>
										   
                                                                                    
                                                                                            

									    </div>
										
										
									</div>
									

									
								</div>
								<div class="col-md-8">
									
									<table class="table table-condensed table-hover">
																<thead>
																	<tr>
																		<th colspan="3">General information</th>
																		<td><a href="prod_edit.php?pid=<?php echo $data['id'];?>" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Catagory</td>
																		<td><?php echo $data['catagory'];?></td>
																		
																	</tr>
																	<tr>
																		<td>Description</td>
																		<td><?php echo $data['description'];?></td>
																		
																	</tr>
																	<tr>
																		<td>Color</td>
																		<td><?php echo $data['color'];?></td>
																		
																	</tr>
																	<tr>
																		<td>Weight</td>
																		<td>
																		   <?php echo $data['weight'];?>
																		</td>
																		
																	</tr>
																	<tr>
																		<td>Others</td>
																		<td>
																		   <?php echo $data['others'];?>
																		</td>
																		
																	</tr>
																	<tr>
																		<td>Status</td>
																		<td><span class="label label-sm label-info"><?php if ($data['status'] == 1 ){ echo "Shown";} else { echo "Hidden";}?></span></td>
																	
																	</tr>
																</tbody>
								    </table>
								    <table class="table table-condensed table-hover">
																<thead>
																	<tr>
																		<th colspan="3">Additional information</th>
																		<td><a href="prod_edit.php?pid=<?php echo $data['id'];?>" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Product Code</td>
																		<td><?php echo $data['product_code'];?></td>
																		
																	</tr>
																	<tr>
																		<td>Destination:</td>
																		<td><?php echo $data['destinaiton'];?> </td>
																		
																	</tr>
																	<tr>
																		<td>Travel Date:</td>
																		<td><?php echo $data['travel_date'];?></td>
																		
																	</tr>
																	

																</tbody>
									</table>
								</div>
<?php

//}
//}
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