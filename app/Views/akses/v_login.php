<?= $this->extend('layout/headfoot'); ?>

<?= $this->section('content'); ?>
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
            <form action="/dashboard" method="post">
              <div class="form-group">
                <input name="username" type="text" minLength="8" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input name="password" type="password" minLength="8" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
              </div>
              <div class="mt-3">
                <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Sign In">
              </div>
              <div class="text-center mt-4 font-weight-light">
                Don't have an account? <a href="/registrasi" class="text-primary">Create</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>