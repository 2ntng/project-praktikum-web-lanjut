<?= $this->include('user/layout/header') ?>
<?= $this->include('user/layout/navbar') ?>
<?= $this->include('user/layout/sidebar') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 grid-margin stretch-card d-flex justify-content-center">
            <div class="card">
                <div class="card-body">
                    <div align="center">
                        <h4 class="card-title">Account Settings</h4>
                    </div>
                    <form class="forms-sample" action="/user/settings/save" method="post">
                    <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Fullname</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-lg" name="fullname" placeholder="Fullname" value="<?= $fullname ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" minLength="4" class="form-control form-control-lg" name="username" placeholder="Username" value="<?= $username ?>" required>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" minLength="4" class="form-control form-control-lg" name="username" placeholder="Password" required>
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
                                <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="<?= $email ?>" required>
                            </div>
                        </div>
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <h4>Account not updated!</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('user/layout/footer_comment') ?>
    <?= $this->include('user/layout/footer') ?>

    <?php if (!empty(session()->getFlashdata('accUpdated'))) :  echo "Updated";?>
        <script>
            accUpdated();
        </script>
    <?php endif; ?>