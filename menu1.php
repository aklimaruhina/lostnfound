<?php
require_once('lib/app.php');
require_once 'links.php';
$user = $_SESSION['user'];
?>

<!-- BEGIN HEADER MENU -->
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

        <!-- END HEADER SEARCH BOX -->
        <!-- BEGIN MEGA MENU -->
        <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
        <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
        <div class="hor-menu ">
            <ul class="nav navbar-nav">
                <li <?php if (isset($dashboard)) { ?> class="active" <?php } ?>>
                    <a href="user_dashboard.php?id=<?php echo $user['id'] ?>">Dashboard</a>
                </li>
                <li <?php if (isset($edit_profile)) { ?> class="active" <?php } ?>>
                    <a href="edit_profile.php?id=<?php echo $user['id'] ?>">Edit Profile</a>
                </li>
                <li <?php if (isset($register)) { ?> class="active" <?php } ?>>
                    <a href="register_new_pro.php?id=<?php echo $user['id'] ?>">Register New product</a>
                </li>
                <li <?php if (isset($product_list)) { ?> class="active" <?php } ?>>
                    <a href="prod_list.php?id=<?php echo $user['id'] ?>">Existing Product List</a>
                </li>
                <li <?php if (isset($inbox)) { ?> class="active" <?php } ?> >
                    <a href="inbox.php?id=<?php echo $user['id'] ?>"><i class="fa fa-envelope"></i>
                <?php
                $query = "SELECT COUNT(*) as total_msg FROM un_user WHERE user_id = " . $user['id'];
                $result = mysqli_query($link, $query);
                $msg = mysqli_fetch_assoc($result);
                //$total_msg = $msg['total_msg'];

                if (!empty($msg)) {
                    $total_msg = $msg['total_msg'];
                    if ($total_msg > 0) {
                        ?>
                                <span class="notifications-count badge badge-default animated bounceIN"><?php echo $total_msg; ?></span>
                                <?php
                            }
                        }
                        ?>
                    </a>

                </li>


                <li class="menu-dropdown classic-menu-dropdown ">
                    <a data-hover="megamenu-dropdown " id="dropdownMenu1" data-close-others="true" data-toggle="dropdown" href="javascript:;">

                        <i class="fa fa-cogs fa-2 font-white-sharp"></i>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-left" aria-labelledby="dropdownMenu1">
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
    </div>
</div>
<!-- END HEADER MENU -->
<?php require_once 'scripts.php'; ?>