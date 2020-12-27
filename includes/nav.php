<?php include 'db/selectPatient.php'; ?>
<?php  
$today = date('Y-m-d');
$sql = "SELECT count(*) as total FROM orders WHERE response IS NULL AND userID=" . $_SESSION["userID"] . " AND orderDate <= " . "'" . $today . "'" . ";";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $orderCount = $row['total'];
    
  }
}
$sql = "SELECT count(*) as messageTotal FROM orders WHERE response IS NULL AND userID=" . $_SESSION["userID"] . " AND orderDate >= " . "'" . $today . "'" . ";";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $messageTotal = $row['messageTotal'];
    
  }
}
  ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-heartbeat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Heart<sup>Beat</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Welcome -->
      <li class="nav-item <?php if($page=='home'){echo 'active';} ?>">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Check-In</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pages
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php if($pageType=='components'){echo 'active';} ?>">
        <a class="nav-link <?php if($pageType!='components'){echo 'collapsed';} ?>" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-bullseye"></i>
          <span>Goals</span>
        </a>
        <div id="collapseTwo" class="collapse <?php if($pageType=='components'){echo 'show';} ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item <?php if($page=='goals'){echo 'active';} ?>" href="goals.php">Goals</a>
            <a class="collapse-item <?php if($page=='stats'){echo 'active';} ?>" href="stats.php">Stats</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Nurses Collapse Menu -->
      <li class="nav-item <php if($pageType=='nurses'){echo 'active';} ?>">
        <a class="nav-link <php if($pageType!='nurses'){echo 'collapsed';} ?>" href="#" data-toggle="collapse" data-target="#collapseNurses" aria-expanded="true" aria-controls="collapseNurses">
          <i class="fas fa-fw fa-info"></i>
          <span>Stats</span>
        </a>
        <div id="collapseNurses" class="collapse <php if($pageType=='nurses'){echo 'show';} ?>" aria-labelledby="headingNurses" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Nurses Menu:</h6>
            <a class="collapse-item <php if($page=='nursePts'){echo 'active';} ?>" href="nurse-patients.php">Activity</a>
            <a class="collapse-item <php if($page=='orders'){echo 'active';} ?>" href="nurse-orders.php">Orders</a>
            <a class="collapse-item <php if($page=='schedule'){echo 'active';} ?>" href="nurse-schedule.php">Schedule</a>
            <a class="collapse-item <php if($page=='other'){echo 'active';} ?>" href="nurse-other.php">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        External Roles
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php if($pageType=='pages'){echo 'active';} ?>">
        <a class="nav-link <?php if($pageType!='pages'){echo 'collapsed';} ?>" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-hospital-user"></i>
          <span>Patient</span>
        </a>
        <div id="collapsePages" class="collapse <?php if($pageType=='pages'){echo 'show';} ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.php">Login</a>
            <a class="collapse-item" href="register.php">Register</a>
            <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item <?php if($page=='404'){echo 'active';} ?>" href="404.php">404 Page</a>
            <a class="collapse-item <?php if($page=='blank'){echo 'active';} ?>" href="blank.php">Blank Page</a>
            <a class="collapse-item <?php if($page=='patient'){echo 'active';} ?>" href="patient.php">Patient Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item <?php if($page=='charts'){echo 'active';} ?>">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item <?php if($page=='tables'){echo 'active';} ?>">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter" <?php if ($orderCount === '0') {?>
                  style="display: none"
                <?php } ?>
                ><?php echo $orderCount; ?></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Open Orders:
                </h6>
                <?php include 'db/selectOrderNotis.php'; ?>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-clipboard-list fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-info badge-counter"<?php if ($messageTotal === '0') {?>
                  style="display: none"
                <?php } ?>
                ><?php echo $messageTotal; ?></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header bg-info border-info" >
                  Upcoming Order Info:
                </h6>
                <?php include 'db/orderMessages.php'; ?>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $fullName; ?></span>
                <img class="img-profile rounded-circle" src="<?php echo $photo; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="../review.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Wellness Check-In
                </a>
                <a class="dropdown-item" href="activity.php">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->