<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="webroot/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="webroot/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="webroot/admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="webroot/admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="webroot/admin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
          	<h1 style="text-align: center; color: #fff">LOGIN</h1>
            <div class="auto-form-wrapper">
              <form action="index.php?controller=user&action=login" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" name="password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="submit" name="login"class="btn btn-primary submit-btn btn-block" value="Login">
                </div>
                
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Not a member ?</span>
                  <a href="index.php?controller=user&action=register" class="text-black text-small" >Create new account</a>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="webroot/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="webroot/admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="webroot/admin/js/off-canvas.js"></script>
  <script src="webroot/admin/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>