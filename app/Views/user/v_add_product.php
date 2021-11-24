<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>
<?= $this->include('layout/sidebar') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Add Produk
                            <h6 class="font-weight-normal mb-0">Halaman menambah produk </h6>
                    </div>
                </div>
            </div>
        </div>
        <form action="">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card my-3">
                        <div class="card-body">
                            <h4 class="card-title">Informasi Produk</h4>
                            <p class="card-description">
                                Cantumkan isi informasi dari produk
                            </p>
                            <div>
                                <div class="form-group">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama_produk" placeholder="Nama">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="harga_produk">Harga Produk</label>
                                    <input type="text" class="form-control" id="harga_produk" placeholder="Harga Produk">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="stok_produk">Stok Produk</label>
                                    <input type="text" class="form-control" id="stok_produk" placeholder="Harga Produk">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="status_produk">Status Produk</label>
                                    <input type="text" class="form-control" id="harga_produk" placeholder="Harga Produk">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Modal -->
    <section>
        <!-- Modal -->
        <div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title bold" id="exampleModalLabel">Tambah Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="forms-sample">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="text" class="form-control" id="nama_produk" placeholder="Nama Produk">
                            </div>
                            <div class="form-group">
                                <label for="harga_produk">Harga</label>
                                <input type="text" class="form-control" id="harga_produk" placeholder="Harga">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- content-wrapper ends -->
    <?= $this->include('layout/footer_comment') ?>
    <?= $this->include('layout/footer') ?>