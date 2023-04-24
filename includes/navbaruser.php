<?php
include('counts.php');
include('countsUsers.php');
include('countsvisits.php');

include('counttext.php');

?>



        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="logout.php">Dantech </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                           
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                       
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="user.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                
                                <li><a href="userusers.php"><i class="menu-icon icon-group"></i>users<b class="label green pull-right">
                                    <?php echo $total_users; ?></b> </a></li>
								<li><a href="visitorsuser.php"><i class="menu-icon icon-group"></i>Visitors <b class="label green pull-right"><?php echo $total_visitors; ?></b></a>
                                </li>
                               
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                               
                                <li><a href="expectedvisits.php"><i class="menu-icon icon-user"></i>Expected Visits <b class="label green pull-right"><?php echo $total_visits; ?></b></a></li>
                                <li><a href="tableuser.php"><i class="menu-icon icon-table"></i>Tables</a></li>
                                <li><a href="userchat.php"><i class="menu-icon icon-bar-chart"></i>Chat<b class="label green pull-right"><?php echo $total_chat; ?></b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                              <!--  <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="../code/includes/other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="../code/includes/other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="../code/includes/other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li> -->
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
