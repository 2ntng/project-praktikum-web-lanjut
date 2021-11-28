<?= $this->include('admin/layout/header') ?>
<?= $this->include('admin/layout/navbar') ?>
<?= $this->include('admin/layout/sidebar') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <a href="/add-admin">
            <button type="button" class="btn btn-info">
                <i class="mdi mdi-account-plus"></i>
                Tambah Admin
            </button>
        </a>
        <br> <br>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div align=center>
                        <h4 class="card-title">Admin Management</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Admin</td>
                                    <td>Admin</td>
                                    <td colspan="2">dudu@gmail.com</td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Agus</td>
                                    <td>Agus Rumadani</td>
                                    <td>dudu@gmail.com</td>
                                    <td>
                                        <button type="button" class="btn btn-danger" onclick="hapus()"><i class="mdi mdi-delete"></i> Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rudi</td>
                                    <td>Rudi Rumadani</td>
                                    <td>dudu@gmail.com</td>
                                    <td>
                                        <button type="button" class="btn btn-danger" onclick="hapus()"><i class="mdi mdi-delete"></i> Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div align=center>
                        <h4 class="card-title">User Management</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tono</td>
                                    <td>Tono jagoan mama</td>
                                    <td>dudu@gmail.com</td>
                                    <td>
                                        <button type="button" onclick="activated()" class="btn btn-danger"><i class="mdi mdi-key"></i> Deactivated</button>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Agus</td>
                                    <td>Agus Rumadani</td>
                                    <td>dudu@gmail.com</td>
                                    <td>
                                        <button type="button" onclick="deactivated()" class="btn btn-success"><i class="mdi mdi mdi-key"></i> Activated</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rudi</td>
                                    <td>Rudi Rumadani</td>
                                    <td>dudu@gmail.com</td>
                                    <td>
                                        <button type="button" onclick="deactivated()" class="btn btn-success"><i class="mdi mdi mdi-key"></i> Activated</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('admin/layout/footer_comment') ?>
    <?= $this->include('admin/layout/footer') ?>