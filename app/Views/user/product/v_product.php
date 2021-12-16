<?= $this->include('user/layout/header') ?>
<link rel="stylesheet" href="<?= base_url('vendors/simple-datatables/style.css') ?>">

<?= $this->include('user/layout/navbar') ?>
<?= $this->include('user/layout/sidebar') ?>
<div class="flash-data" data-flashdata="<?= session()->get('inputmsg') ?>"></div>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">My Product</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Product List</p>
                        <div class="mt-3 d-flex justify-content-start">
                            <a class="btn btn-warning btn-icon-text" href="/product/add"><i class="ti-plus btn-icon-prepend"></i>Add Product</a>
                        </div>

                        <table class="table table-hover table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>

                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($product as $row) { ?>
                                    <tr>
                                        <th scope="row">
                                            <p><?= $no++; ?></p>
                                        </th>
                                        <td><?= $row['name']; ?></td>
                                        <td><?= $categories[$row['category_id']-1]['name']; ?></td>
                                        <td>Rp. <?= $row['price']; ?></td>
                                        <td><?= $row['stock']; ?></td>
                                        <td>
                                            <a href="/product/detail/<?= $row['product_id'] ?>"><button type="button" class="btn btn-icon btn-primary" title="Details"><i class="ti-info btn-icon-prepend"></i></button></a>
                                            <a href="/product/edit/<?= $row['product_id'] ?>"><button type="button" class="btn btn-icon btn-warning" title="Edit"><i class="ti-pencil btn-icon-prepend"></i></button></a>
                                            <button type="button" class="btn btn-icon btn-danger" onclick="deleteProduct(<?= $row['product_id'] ?>)" title="Delete"><i class="ti-trash btn-icon-prepend"></i></button>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
    <?= $this->include('user/layout/footer_comment') ?>
    <script src="<?= base_url('vendors/simple-datatables/simple-datatables.js') ?>"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <?= $this->include('user/layout/footer') ?>