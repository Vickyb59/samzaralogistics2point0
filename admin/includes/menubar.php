<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? 'images/'.$admin['photo'] : 'images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['full_name']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="applicants.php"><i class="fa  fa-building"></i> <span>Applicants</span></a></li>
      <li class="header">MANAGE</li>
      <li><a href="jobs.php"><i class="fa fa-briefcase"></i> <span>Jobs</span></a></li>
      <li><a href="review.php"><i class="fa fa-registered"></i> <span>Reviews</span></a></li>
      <li><a href="users.php"><i class="fa fa-users"></i> <span>Workers</span></a></li>
      <li><a href="tracking.php"><i class="fa fa-truck"></i> <span>Tracking</span></a></li>
      <li><a href="news.php"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-anchor"></i>
          <span>Admin Points</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="phone_numbers.php"><i class="fa fa-phone"></i> <span>Phone Number</span></a></li>
          <li><a data-toggle="modal" href="#profile" id="admin_profile"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>