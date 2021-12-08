<?php $session = \Config\Services::session(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('vendors/feather/feather.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/ti-icons/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/mdi/css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/vertical-layout-light/style.css')?>">
    <link rel="shortcut icon" href="<?= base_url('images/favicon.png')?>" type="image/gif" />
</head>
<body>
  <div class="flash-data" data-flashdata="<?= $session->get('msg') ?>"></div>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="assets/gasskeun.png" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form action="/login/auth" method="post">
                <div class="form-group">
                  <input name="username" type="text" minLength="4" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input name="password" type="password" minLength="4" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Sign In">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="/register" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url('sweetAlert\sweetalert2.all.min.js')?>"></script>
  <script src="<?= base_url('sweetAlert\alert.js')?>"></script>
  <script src="<?= base_url('vendors/js/vendor.bundle.base.js')?>"></script>
  <script src="<?= base_url('js/template.js')?>"></script>
  <script src="<?= base_url('js/dashboard.js')?>"></script>
  <?php if (!empty(session()->getFlashdata('wrongPassword'))) : ?>
    <script>
        wrongPassword();
    </script>
  <?php endif; ?>
  <?php if (!empty(session()->getFlashdata('usernameNotFound'))) : ?>
    <script>
        usernameNotFound();
    </script>
  <?php endif; ?>
</body>

</html>