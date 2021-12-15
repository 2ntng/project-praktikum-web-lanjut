<?= $this->include('user/layout/header') ?>
<?= $this->include('user/layout/navbar') ?>
<?= $this->include('user/layout/sidebar') ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Cart</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 grid-margin">
                <div class="card mb-3">
                    <div class="card-body pb-0">
                        <p class="card-title">NAMA TOKO</p>
                        <div class="row">
                            <div class="col-2 pl-3 pr-0">
                                <img class="img-fluid" src="<?= base_url('assets/images/product-placeholder.svg') ?>" alt="">
                            </div>
                            <div class="col-10 pl-3 pb-3">
                                <p class="font-weight-500">JUDUL PRODUK KLO PRODUKNYA PANJANG BANGET SAMPE BAWAH BANGET DI CODINGAN HARUS ALT+Z</p>
                                <h2>99.99$</h2>
                                <div class="d-flex flex-row-reverse">
                                    <div class="p-2">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="ti-trash"></i> Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body pb-0">
                        <p class="card-title">NAMA TOKO</p>
                        <div class="row">
                            <div class="col-2 pl-3 pr-0">
                                <img class="img-fluid" src="<?= base_url('assets/images/product-placeholder.svg') ?>" alt="">
                            </div>
                            <div class="col-10 pl-3 pb-3">
                                <p class="font-weight-500">JUDUL PRODUK</p>
                                <h2>99.99$</h2>
                                <div class="d-flex flex-row-reverse">
                                    <div class="p-2">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="ti-trash"></i> Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="my-3 mx-1">Total Harga</h4>
                        <h2>99.99$</h2>
                    </div>
                    <!-- <button type="submit" class="btn btn-success mx-3 mb-3"><i class="ti-shopping-cart"></i> Buy</button> -->
                    <a href="/user/cart/checkout"class="btn btn-success mx-3 mb-3"><i class="ti-shopping-cart"></i> Buy</a>
                </div>
            </div>
        </div>

        <!-- content-wrapper ends -->
        <?= $this->include('user/layout/footer_comment') ?>
        <?= $this->include('user/layout/footer') ?>