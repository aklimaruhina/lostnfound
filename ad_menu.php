
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
			<div class="input-group logout_bttn">
			     <a href="logout.php"><button type="submit" class="btn btn-success" >Logout</button></a>
			</div>
			<form class="search-form" action="extra_search.php" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
				

			</form>

<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li <?php if (isset($ad_dashboard)){?> class="active" <?php }?>>
						<a href="admin_dashboard.php">Dashboard</a>
					</li>
					<li <?php if (isset($edit_dashboard)){?> class="active" <?php }?>>
						<a href="ad_edit_profile.php">Edit Profile</a>
					</li>
					<li <?php if (isset($user_dashboard)){?> class="active" <?php }?>>
						<a href="ad_users.php">Users</a>
					</li>
					<li <?php if (isset($prod_dashboard)){?> class="active" <?php }?>>
						<a href="ad_prod.php">Product</a>
					</li>
					<li <?php if (isset($sugg_dashboard)){?> class="active" <?php }?>>
						<a href="">Suggestion</a>
					</li>
					<li <?php if (isset($block_dashboard)){?> class="active" <?php }?>>
						<a href="block_user.php">Block User</a>
					</li>
					
					
					<li class="menu-dropdown classic-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						
							<i class="fa fa-cogs fa-2 font-white-sharp"></i>
						 <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-briefcase"></i>
								Data Tables </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="table_basic.html">
										Basic Datatables </a>
									</li>
									<li class=" ">
										<a href="table_tree.html">
										Tree Datatables </a>
									</li>
									<li class=" ">
										<a href="table_responsive.html">
										Responsive Datatables </a>
									</li>
									<li class=" ">
										<a href="table_managed.html">
										Managed Datatables </a>
									</li>
									<li class=" ">
										<a href="table_editable.html">
										Editable Datatables </a>
									</li>
									<li class=" ">
										<a href="table_advanced.html">
										Advanced Datatables </a>
									</li>
									<li class=" ">
										<a href="table_ajax.html">
										Ajax Datatables </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-wallet"></i>
								Portlets </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="portlet_general.html">
										General Portlets </a>
									</li>
									<li class=" ">
										<a href="portlet_general2.html">
										New Portlets #1 <span class="badge badge-roundless badge-danger">new</span>
										</a>
									</li>
									<li class=" ">
										<a href="portlet_general3.html">
										New Portlets #2 <span class="badge badge-roundless badge-danger">new</span>
										</a>
									</li>
									<li class=" ">
										<a href="portlet_ajax.html">
										Ajax Portlets </a>
									</li>
									<li class=" ">
										<a href="portlet_draggable.html">
										Draggable Portlets </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-bar-chart"></i>
								Charts </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="charts_amcharts.html">
										amChart </a>
									</li>
									<li class=" ">
										<a href="charts_flotcharts.html">
										Flotchart </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-pointer"></i>
								Maps </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="maps_google.html">
										Google Maps </a>
									</li>
									<li class=" ">
										<a href="maps_vector.html">
										Vector Maps </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-puzzle"></i>
								Multi Level </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-settings"></i>
										Item 1 </a>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-user"></i>
										Item 2 </a>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-globe"></i>
										Item 3 </a>
									</li>
									<li class=" dropdown-submenu">
										<a href="#">
										<i class="icon-folder"></i>
										Sub Items </a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="javascript:;">
												Item 1 </a>
											</li>
											<li class=" ">
												<a href="javascript:;">
												Item 2 </a>
											</li>
											<li class=" ">
												<a href="javascript:;">
												Item 3 </a>
											</li>
											<li class=" ">
												<a href="javascript:;">
												Item 4 </a>
											</li>
										</ul>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-share"></i>
										Item 4 </a>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-bar-chart"></i>
										Item 5 </a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					
					
				</ul>
			</div>
			<!-- END MEGA MENU -->

			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			
		</div>
	</div>