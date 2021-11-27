<?= $this->include('layout/header') ?>
<link rel="stylesheet" href="<?= base_url('vendors/simple-datatables/style.css') ?>">

<?= $this->include('layout/navbar') ?>
<?= $this->include('layout/sidebar') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Produk
                            <h6 class="font-weight-normal mb-0">Halaman daftar produk </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card mb-5">
                    <div class="card-body">
                        <p class="card-title">Tambah Produk</p>
                        <div class="mt-3 d-flex justify-content-start">
                            <a class ="btn btn-warning btn-icon-text"href="/product/add"><i class="ti-plus btn-icon-prepend"></i>Tambah</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Daftar Produk</p>
                        <table class="table table-hover table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Aksi</th>
                                
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($product as $row) { ?>
                                    <tr>
                                        <th scope="row"><p><?= $no++; ?></p></th>
                                        <td><?= $row['name']; ?></td>
                                        <td><?= $row['description']; ?></td>
                                        <td><?= $row['price']; ?></td>
                                        <td><?= $row['supply']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary">Detail</button>
                                            <button type="button" class="btn btn-warning">Edit Data</button>
                                            <button type="button" class="btn btn-danger">Hapus Data</button>
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
    <?= $this->include('layout/footer_comment') ?>
    <script src="<?= base_url('vendors/simple-datatables/simple-datatables.js') ?>"></script>
	<script>
		// Simple Datatable
		let table1 = document.querySelector('#table1');
		let dataTable = new simpleDatatables.DataTable(table1);
	</script>
    <?= $this->include('layout/footer') ?>