<header class="main-header">
    <!-- Logo -->
    <a target="_blank" href="<?php echo base_url(); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>T</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Akana</b>Travel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo $admin_assets . 'img/img.png'; ?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $this->ion_auth->user()->row()->first_name; ?></span>
                    </a>
                    <ul class="dropdown-menu" style="width: 100px;">
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat"><i class="fa fa-user"></i> <span>Profile</span></a>
                        </li>
                        <li class="user-footer">
                            <a href="<?php echo base_url('auth/logout'); ?>" class="btn btn-default btn-flat"><i class="fa fa-power-off text-red"></i> <span class="text-red">Sign Out</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>