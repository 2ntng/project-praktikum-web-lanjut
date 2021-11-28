<?= $this->include('user/layout/header') ?>
<?= $this->include('user/layout/navbar') ?>
<?= $this->include('user/layout/sidebar') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Edit Produk
                            <h6 class="font-weight-normal mb-0">Halaman edit informasi produk </h6>
                    </div>
                </div>
            </div>
        </div>
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4>Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('product/data') ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class=" row">
                <div class="col-12 grid-margin">
                    <div class="card my-3">
                        <div class="card-body">
                            <h4 class="card-title">Informasi Produk</h4>
                            <p class="card-description">
                                Cantumkan isi informasi dari produk
                            </p>
                            <div>
                                <div class="form-group custom-file">
                                    <label class="custom-file-label" for="photo">Pilih Foto Produk</label>
                                    <input type="file" class="custom-file-input" id="photo" name="photo" value="<?= old('photo'); ?>">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="name">Nama Produk</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama" value="<?= old('name'); ?>">
                                </div>
                            </div>
                            <div>
                                <label for="description">Deskripsi Produk</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Berikan deskripsi produk..." value="<?= old('description'); ?>"></textarea>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="inlineFormInputGroupUsername">Harga Produk</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" id="price" name="price" placeholder="100000" value="<?= old('price'); ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="supply">Stok Produk</label>
                                    <input type="text" class="form-control" name="supply" placeholder="Stock Produk" value="<?= old('supply'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <button type="submit" value="Simpan" class="btn btn-primary mr-2">Ubah</button>
                                <button class="btn btn-light">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- content-wrapper ends -->
    <?= $this->include('user/layout/footer_comment') ?>
    <?= $this->include('user/layout/footer') ?>