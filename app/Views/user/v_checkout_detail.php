<?= $this->include('user/layout/header') ?>

<div class="container-fluid">
    <nav class="navbar navbar-light bg-light">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="/"><img src="<?= base_url('images/favicon.png') ?>" class="mr-2" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="/"><img src="<?= base_url('images/favicon.png') ?>" class="mr-2" alt="logo" /></a>
        </div>
    </nav>
</div>

<div class="row ml-5">
    <div class="col-7">
        <div class="container mt-3">
            <h4 class="mb-4"><b>Checkout</b></h4>
            <h6><b>Alamat Pengiriman</b></h6>
            <hr>
            <p><b>Nama Penerima Misal Bintang</b></p>
            <p>+62 08080808</p>
            <p>Jl Gunung Putri, Kecamatan Bogor, Kota Tangerang Selatan</p>

            <div class="container mt-3">
                <div class="card mb-3">
                    <div class="card-body pb-0">
                        <p><b>Nama Toko</b></p>
                        <div class="row">
                            <div class="col-1 pl-3 pr-0">
                                <img class="img-fluid" src="<?= base_url('assets/images/product-placeholder.svg') ?>" alt="">
                            </div>
                            <div class="col-10 pl-3 pb-3">
                                <p>JUDUL PRODUK KLO PRODUKNYA PANJANG BANGET SAMPE BAWAH BANGET DI CODINGAN HARUS ALT+Z</p>
                                <h5>99.99$</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card mb-3">
                    <div class="card-body pb-0">
                        <p><b>Nama Toko</b></p>
                        <div class="row">
                            <div class="col-1 pl-3 pr-0">
                                <img class="img-fluid" src="<?= base_url('assets/images/product-placeholder.svg') ?>" alt="">
                            </div>
                            <div class="col-10 pl-3 pb-3">
                                <p>JUDUL PRODUK KLO PRODUKNYA PANJANG BANGET SAMPE BAWAH BANGET DI CODINGAN HARUS ALT+Z</p>
                                <h5>99.99$</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="container mt-3 mr-5">
            <h4 class="mb-4"><b>Ringkasan Belanja</b></h4>
            <div class="row">
                <div class="col-7">
                    <div class="h7" style="width: 10rem;">
                        Total Barang (5)
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
                        Rp. 10.000.000,00
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
                <a href="" class="btn btn-success mt-2"><i class="ti-shopping-cart"></i> Pilih Pembayaran</a>
            </div>
        </div>
        
    </div>


    <?= $this->include('user/layout/footer') ?>