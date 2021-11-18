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
                        <h4>Baru disini?</h4>
                        <h6 class="font-weight-light">Ayo daftarkan diri kamu dengan mudah!</h6>
                        <form action="/registrasi-save" method="post">
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control form-control-lg" name="nama" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" minLength="8" class="form-control form-control-lg" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" minLength="8" class="form-control form-control-lg" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="tingkat" required>
                                    <option>Admin</option>
                                    <option>User</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" required>
                                        Data yang dimasukkan sudah benar
                                    </label>
                                </div>
                            </div>
                            <div class="text-left mt-4 font-weight-light">
                                *Admin akan segera mengaktivasi akun kamu
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
<?= $this->endSection(); ?>