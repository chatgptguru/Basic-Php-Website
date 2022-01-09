<div class="page-header-top">
    <div class="container-drop">
        <div class="top-menu" style="margin-top: 0px;">

            <ul class="nav navbar-nav pull-right height-100 d-flex">
                <!-- BEGIN INBOX DROPDOWN -->
                <li class="dropdown dropdown-extended dropdown-dark dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <span class="circle">3</span>
                    <span class="corner"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>You have <strong>3 New</strong> Updates</h3>
                            <a href="javascript:;">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                <li>
                                    <a href="inbox.html?a=view">
                                    <span class="photo">
                                    <img src="../../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                                    </span>
                                    <span class="subject">
                                    <span class="from">
                                    Lisa Wong </span>
                                    <span class="time">Just Now </span>
                                    </span>
                                    <span class="message">
                                    Completed NPS Survey </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="inbox.html?a=view">
                                    <span class="photo">
                                    <!-- <img src="../../assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt=""> -->
                                    </span>
                                    <span class="subject">
                                    <span class="from">
                                    Team Climate Inventory Survey </span>
                                    <span class="time">16 mins </span>
                                    </span>
                                    <span class="message">
                                    All 36 Employees Completed TCI Survey </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="inbox.html?a=view">
                                    <span class="photo">
                                    <img src="../../assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
                                    </span>
                                    <span class="subject">
                                    <span class="from">
                                    Bob Nilson </span>
                                    <span class="time">2 hrs </span>
                                    </span>
                                    <span class="message">
                                    POPE-PC Survey has not been submitted by deadline </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown dropdown-user dropdown-dark">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img alt="" class="img-circle" src="../../assets/admin/layout3/img/avatar.png">
                    <span class="username username-hide-mobile"><?php echo $_SESSION['auth_user']['username']; ?> </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="extra_profile.html">
                            <i class="icon-user"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
                            7 </span>
                            </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="logout.php">
                            <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown dropdown-extended quick-sidebar-toggler">
                    <span class="sr-only">Toggle Quick Sidebar</span>
                    <i class="icon-logout"></i>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
    </div>
</div>
