<?php
  // start session
  session_start(); 


     // connect to db
    include "db/connect.php";

    // unclude file that post to billing page
    include "post_to_billing.php";

  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home test by I-rechaarge</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html">I-recharge</a>
          <a class="sidebar-brand brand-logo-mini" href="index.html">API</a>
        </div>
     
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
           
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Hello Dear</h5>
                </div>
             </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <li class="nav-item menu-items">
            <a class="nav-link" href="dashboard.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Order For a Food</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                <form class="forms-sample" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"   enctype="multipart/form-data" accept-charset="utf-8">
                      <div class="form-group">
                        <label>Select Your Preferred Course</label>
                        <select name="food" id="select" class="form-control form-control-lg js-example-basic-single" style="width:100%">
                         
                        <?php  // Call Food list file
                        include "includes/food_list.php";
    
                        ?>
                        
                        </select>
                      </div>
                     
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Your Tracking ID</label>
                        <div class="col-sm-9">
                        <center><?php echo rand(); ?></center>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Email" Required />
                        </div>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input"  id="membershipRadios1"  name="pay" value="paynow" checked>Pay Now</label>
                      </div>
                     
                     
                    <center><button type="submit" class="btn btn-warning btn-icon-text" name="submit">
                      <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button></center>
                    
                    </form>
                  </div>
                </div>
              </div>
             </div>
         
          <!-- content-wrapper ends -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © I-recharge.com 2022</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> by <a href="#" target="_blank">Japheth</a> for backend developer position</span>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>