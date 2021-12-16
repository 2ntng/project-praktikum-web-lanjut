<?= $this->include('user/layout/header') ?>
<div class="container-fluid">
    <nav class="navbar navbar-light bg-light">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="/"><img src="<?= base_url('images/favicon.png') ?>" class="mr-2" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="/"><img src="<?= base_url('images/favicon.png') ?>" class="mr-2" alt="logo" /></a>
        </div>
    </nav>
</div>

<?php if (!empty(session()->getFlashdata('error'))) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4>Stock Barang Kosong!</h4>
        </hr />
        <?php echo session()->getFlashdata('error'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<div class="row ml-5">
    <div class="col-7">
        <div class="container mt-3">
            <h4 class="mb-4"><b>Checkout</b></h4>
            <h6><b>Alamat Pengiriman</b></h6>
            <hr>
            <p><b>Nama Penerima Misal Bintang</b></p>
            <p>+62 08080808</p>
            <p>Jl Gunung Putri, Kecamatan Bogor, Kota Tangerang Selatan</p>
            <?php $i = 1;
            $jumlah = 0;
            $cart = \Config\Services::cart();
            $keranjang = $cart->contents();

            foreach ($keranjang as $key => $value) {
                $jumlah = $jumlah + $value['qty'];
                if ($value['options']['user_id'] == session()->get('user_id')) {
            ?>
                    <div class="container mt-3">
                        <div class="card mb-3">
                            <div class="card-body pb-0">
                                <!-- <p><b>Nama Toko</b></p> -->
                                <div class="row">
                                    <div class="col-1 pl-3 pr-0">
                                        <?php if ($value['options']['gambar'] != NULL) { ?>
                                            <img class="img-fluid" src="<?= base_url('assets/images/uploads/' . $value['options']['gambar']) ?>" width="70" height="70" alt="">
                                        <?php } else { ?>
                                            <img class="img-fluid" src="<?= base_url('assets/images/product-placeholder.svg') ?>" alt="">
                                        <?php } ?>
                                    </div>
                                    <div class="col-10 pl-3 pb-3">
                                        <p><?= $value['name']; ?></p>
                                        <h5>Rp. <?= $value['subtotal']; ?>.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                <?php }
            }
                ?>

                    </div>
        </div>
    </div>
    <div class="col-4">
        <div class="container mt-3 mr-5">
            <h4 class="mb-4"><b>Ringkasan Belanja</b></h4>
            <div class="row">
                <div class="col-7">
                    <div class="h7" style="width: 10rem;">
                        Total Barang (<?= $jumlah; ?>)
                    </div>
                    <div class="h7" style="width: 10rem;">
                        Total Ongkos Kirim
                    </div>
                    <div class="h7" style="width: 10rem;">
                        Asuransi Pengiriman
                    </div>
                </div>
                <div class="col-5 ">
                    <div class="h7" style="width: 10rem;">
                        Rp. <?= $cart->total(); ?>.00
                    </div>
                    <div class="h7" style="width: 10rem;">
                        Rp. 0,00
                    </div>
                    <div class="h7" style="width: 10rem;">
                        Rp. 0,00
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-7">
                    <div class="h7" style="width: 10rem;">
                        Total Tagihan
                    </div>
                </div>
                <div class="col-5">
                    <div class="h7 text-danger" style="width: 10rem;">
                        Rp. 10.000.000,00
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column-reverse">
                <!-- <button type="submit" class="btn btn-success mt-2"><i class="ti-shopping-cart"></i> Pilih Pembayaran</button> -->
                <a href="/user/cart/checkout/selesai" class="btn btn-success mt-2"><i class="ti-shopping-cart"></i> Pilih Pembayaran</a>
            </div>
        </div>

    </div>


    <?= $this->include('user/layout/footer') ?>