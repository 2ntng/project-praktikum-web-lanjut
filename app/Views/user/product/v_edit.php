<?= $this->include('user/layout/header') ?>
<?= $this->include('user/layout/navbar') ?>
<?= $this->include('user/layout/sidebar') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Edit Product
                            <!-- <h6 class="font-weight-normal mb-0">Halaman menambah produk </h6> -->
                    </div>
                </div>
            </div>
        </div>
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4>Check your entry!</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('product/save-edit/'.$product['product_id']) ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class=" row">
                <div class="col-12 grid-margin">
                    <div class="card my-3">
                        <div class="card-body">
                            <!-- <h4 class="card-title">Informasi Produk</h4> -->
                            <!-- <div>
                                <div class="form-group custom-file">
                                    <label class="custom-file-label" for="photo">Photo</label>
                                    <input type="file" class="custom-file-input" id="photo" name="photo" value="<= old('photo'); ?>">
                                </div>
                            </div> -->
                            <div>
                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama" value="<?= $product['name']; ?>">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description"><?= $product['description']; ?></textarea>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select class="form-control" id="category_id" name="category_id">
                                        <?php foreach ($categories as $category) { ?>
                                            <option value="<?= $category['category_id'] ?>" <?php if ($category['category_id'] == $product['category_id']) {echo "selected";}?>>
                                                <?= $category['name'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="inlineFormInputGroupUsername">Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="100000" value="<?= $product['price']; ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="stock">Stock</label>
                                    <input type="number" class="form-control" name="stock" placeholder="Stock" value="<?= $product['stock']; ?>">
                                </div>
                            </div>
                            <div>
                            <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image" placeholder="Gambar" value="<?= $product['image']; ?>">
                                </div>
                            </div>
                            <div>
                                <button type="submit" value="Simpan" class="btn btn-primary mr-2">Submit</button>
                                <a href="/product"><button type="button" class="btn btn-outline-danger">Cancel</button></a>
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