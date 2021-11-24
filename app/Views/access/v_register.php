<?= $this->include('layout/header') ?>
<?php $session = \Config\Services::session(); 
    if($session->get('msg') != null){
        ?>
        <div class="flash-data" data-flashdata="userNotRegistered"></div>
        <?php
    }
?>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="assets/gasskeun.png" alt="logo">
                        </div>
                        <h4>Baru disini?</h4>
                        <h6 class="font-weight-light">Ayo daftarkan diri kamu dengan mudah!</h6>
                        <form action="/register/save" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="fullname" placeholder="Fullname" required>
                            </div>
                            <div class="form-group">
                                <input type="text" minLength="4" class="form-control form-control-lg" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" minLength="4" class="form-control form-control-lg" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" minLength="4" class="form-control form-control-lg" name="confpassword" placeholder="Confirm Password" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" required>
                                        Data yang dimasukkan sudah benar
                                    </label>
                                </div>
                            </div>

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
<?= $this->include('layout/footer') ?>