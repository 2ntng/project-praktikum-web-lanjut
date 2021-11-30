<?= $this->include('admin/layout/header') ?>
<?= $this->include('admin/layout/navbar') ?>
<?= $this->include('admin/layout/sidebar') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <a href="/admin/manage/accounts/add">
            <button type="button" class="btn btn-info">
                <i class="mdi mdi-account-plus"></i>
                Add admin
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
                                <?php $id = 1;
                                foreach ($admins as $a) : ?>
                                    <tr>
                                        <td><?= $id++; ?></td>
                                        <td><?= $a['username']; ?></td>
                                        <td><?= $a['fullname']; ?></td>
                                        <td><?= $a['email']; ?></td>
                                        <td>
                                            <?php if ($a['username'] !== 'admin') : ?>
                                                <form action="/admin/manage/accounts/delete/<?= $a['user_id']; ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-icon"><i class="mdi mdi-delete"></i></button>
                                                </form>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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
                                <?php $id = 1;
                                foreach ($users as $u) :
                                ?>
                                    <tr>
                                        <td><?= $id++; ?></td>
                                        <td><?= $u['username']; ?></td>
                                        <td><?= $u['fullname']; ?></td>
                                        <td><?= $u['email']; ?></td>
                                        <td>
                                            <form action="/admin/manage/accounts/delete/<?= $u['user_id']; ?>" method="post">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger btn-icon"><i class="mdi mdi-delete"></i></button>
                                            </form>
                                            <!-- <button type="button" onclick="confirm('Are you sure? This data will be deleted permanently.')" class="btn btn-danger btn-icon"><i class="mdi mdi-delete"></i></button> -->
                                            <!-- <a href="javascript:void(0)" onclick="location.href='/acc-management/delete/<?= $u['user_id']; ?>'" class="btn btn-danger btn-icon"><i class="mdi mdi-delete"></i></a> -->
                                        </td>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('admin/layout/footer_comment') ?>
    <?= $this->include('admin/layout/footer') ?>