<?php
// start session
session_start(); 
    // connect to db
    include "db/connect.php";

        $id = $_SESSION['u_id'];

    include "includes/select_mail.php";// SELECTION OF THE MAIL

    include "includes/flutter_con.php";//CONNECT FLUTTER API
    include "includes/url_sanitize.php" //URL VALIDATIONS

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Billing and payment</title>
     <!-- plugins:css -->
     <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
   <body>
      <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html">I-Recharge</a>
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
                <i class="mdi mdi-bank"></i>
              </span>
              <span class="menu-title">Payment</span>
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
      
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Billing & Payment</h3>
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
                  
                      <div class="form-group">
                        <label> <i class="mdi mdi-access-point
                             btn-icon-prepend"></i> Flutter-wave Payment </label>
                             <?php
                            $sql = "SELECT price FROM all_food WHERE food = '$typfood'";
                            $result = mysqli_query($Conn, $sql);
                            if(mysqli_num_rows($result) > 0){
                            if($row = mysqli_fetch_array($result)){  
                                                  $price = $row['price'];
                               }} 


      
                    ?>
                       
                     <center><h2><b class="mdi mdi-food"> <?php echo $typfood?></b></h2></center>
                        
                     
                      </div>
                     <hr />
                     <center><span>All Total: <a href="#" style="color:goldenrod">₦<?php echo number_format($price)?></a></span></center>
                  
                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"   enctype="multipart/form-data" accept-charset="utf-8" method="POST">
                      <input type="hidden" name="price" value="<?php echo $price?>">
                     
                     <br>
                    <center><button name="pay" type="submit" class="btn btn-warning btn-icon-text" style="padding:10px;width:">
                      <i class="mdi mdi-cash-multiple
                             btn-icon-prepend"></i>Comfirm & Pay</button></center><br>
                    <center><p>  <i class="mdi mdi-information-outline" style="font-size:19px"></i>   By clicking Confirm & Pay button you agree to the <a href="#">Terms & Conditions</a></p></center>
                    </form>
                  </div>
                </div>
              </div>
              <div>
         
          <!-- content-wrapper ends -->

          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©I-recharge.com 2020</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>