<?= $this->include('user/layout/header') ?>
<?= $this->include('user/layout/navbar') ?>
<?= $this->include('user/layout/sidebar') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div align="center">
            <h2><b>Finish Order List</b></h2>
        </div>
        <!-- awal card per pesanan -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-1">
                        <img src=" ../../images/faces/face0.png" width="50" class="card-img-top" alt="...">
                    </div>
                    <div class="col-7">
                        <b>Nama Pembeli</b>
                        <br>
                        tanggal pembelian
                    </div>
                    <div class="col ">
                        <div align="right">
                            <button type="button" class="btn btn-outline-success btn-fw" disabled><b>Finish</b></button>
                        </div>
                    </div>
                </div>
                <!-- mulai daftar barang -->
                <!-- mulai per item -->
                <br>
                <div class="row">
                    <div class="col-2">
                        <img src="https://i.loli.net/2019/11/23/cnKl1Ykd5rZCVwm.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-7">
                        <b>Nama Barang</b>
                        <br>
                        1 Item
                        <br>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-7">
                        Shopping Amount
                        <br>
                        <b>Rp 5000,-</b>
                        <br>
                    </div>
                </div>
                <!-- akhir per item -->
                <!-- mulai per item -->
                <br>
                <div class="row">
                    <div class="col-2">
                        <img src="https://i.loli.net/2019/11/23/cnKl1Ykd5rZCVwm.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="col-7">
                        <b>Nama Barang</b>
                        <br>
                        1 Item
                        <br>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-7">
                        Shopping Amount
                        <br>
                        <b>Rp 5000,-</b>
                        <br>
                    </div>
                </div>
                <!-- akhir per item -->
                <!-- akhir daftar barang -->

                <!-- alamat pembeli -->
                <br>
                <div class="row">
                    <div class="col-9">
                        <b>Adress :</b> &nbspJl. bla bla
                    </div>
                </div>

            </div>
        </div>
        <!-- akhir card per pesanan -->
    </div>
    <!-- content-wrapper ends -->
    <?= $this->include('user/layout/footer_comment') ?>
    <?= $this->include('user/layout/footer') ?>