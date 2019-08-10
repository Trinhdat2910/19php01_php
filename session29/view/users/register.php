<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
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
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
        
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register</h2>
            <div class="auto-form-wrapper">
              <form action="index.php?controller=user&action=register" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Phone</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Birthday</label>
                  <div class="input-group">
                    <input type="date" class="form-control" name="birthday" placeholder="Phone" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="file" class="form-control" name="avatar">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked required> I agree to the terms
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <input type="submit" name="register" value="Register"class="btn btn-primary submit-btn btn-block">
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="index.php?controller=user&action=login" class="text-black text-small">Login</a>
                </div>
              </form>
            </div>
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