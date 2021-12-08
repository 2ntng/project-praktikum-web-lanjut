<?= $this->include('admin/layout/header') ?>
<?= $this->include('admin/layout/navbar') ?>
<?= $this->include('admin/layout/sidebar') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 grid-margin stretch-card d-flex justify-content-center">
            <div class="card">
                <div class="card-body">
                    <div align="center">
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                    <form class="forms-sample" action="admin/settings/update" method="post">
                        <?php foreach ($profile as $p) : ?>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Fullname</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-lg" name="fullname" value="<?= $p['fullname']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" minLength="4" class="form-control form-control-lg" name="username" value="<?= $p['username']; ?>" required>
                                </div>
                            </div>

                            <!-- CHANGE PASSWORD FEATURE -->
                            <!-- <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" minLength="4" class="form-control form-control-lg" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Confirmation Password</label>
                            <div class="col-sm-9">
                                <input type="password" minLength="4" class="form-control form-control-lg" name="confpassword" placeholder="Confirm Password" required>
                            </div>
                        </div> -->

                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control form-control-lg" name="email" value="<?= $p['email']; ?>" required>
                                </div>
                            </div>
                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" required>
                                    Confirmation submit
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('admin/layout/footer_comment') ?>
    <?= $this->include('admin/layout/footer') ?>