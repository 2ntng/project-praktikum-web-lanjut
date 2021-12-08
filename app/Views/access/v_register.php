<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('vendors/feather/feather.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/ti-icons/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('vendors/mdi/css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/vertical-layout-light/style.css')?>">
    <link rel="stylesheet" href="/sweetAlert/sweetalert2.min.css">
    <link rel="shortcut icon" href="<?= base_url('images/favicon.png')?>" type="image/gif"/>
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="assets/gasskeun.png" alt="logo">
                            </div>
                            <h3>Create Account</h3>
                            <form action="/register/save" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="fullname" placeholder="Fullname" value="<?= old('fullname'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" minLength="4" class="form-control form-control-lg" name="username" placeholder="Username" value="<?= old('username'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" minLength="4" class="form-control form-control-lg" name="password" placeholder="Password" value="<?= old('password'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" minLength="4" class="form-control form-control-lg" name="confpassword" placeholder="Re-enter password" value="<?= old('confpassword'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="<?= old('email'); ?>" required>
                                </div>
                                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <h4>Account not registered!</h4>
                                        </hr />
                                        <?php echo session()->getFlashdata('error'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <div class="mt-3">
                                    <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Sign Up">
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="/login" class="text-primary">Login</a>
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
    <script src="<?= base_url('sweetAlert\sweetalert2.all.min.js')?>"></script>
    <script src="<?= base_url('sweetAlert\alert.js')?>"></script>
    <script src="<?= base_url('vendors/js/vendor.bundle.base.js')?>"></script>
    <script src="<?= base_url('js/template.js')?>"></script>
    <script src="<?= base_url('js/dashboard.js')?>"></script>
    <?php if (!empty(session()->getFlashdata('userRegistered'))) : ?>
        <script>
            accRegistered();
        </script>
    <?php endif; ?>
</body>

</html>