<?= $this->include('user/layout/header') ?>
<?= $this->include('user/layout/navbar') ?>
<?= $this->include('user/layout/sidebar') ?>
<?php 
use App\Models\ProductCategoryModel;
$this->categories = new ProductCategoryModel();
?>
<div class="main-panel">
<?php
    echo form_open('CartController/add');
    echo form_hidden('id', $product['product_id']);
    echo form_hidden('price', $product['price']);
    echo form_hidden('name', $product['name']);
    ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold"><?= $product['name']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="<?= base_url('assets/images/product-placeholder.svg') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="my-3 mx-1"><?= $product['name']; ?></h4>
                        <hr>
                        <h2 class="my-3 mx-1"><?=number_to_currency($product['price'],'IDR')?></h2>
                        <table class="my-3 mx-1">
                            <tr>
                                <th scope="row">Kategori</th>
                                <td> : </td>
                                <td><?= $this->categories->find($product['category_id'])['name'] ?></td>
                            </tr>
                            <!-- <tr>
                                <th scope="row">Kondisi</th>
                                <td> : </td>
                                <td>Baru</td>
                            </tr>
                            <tr>
                                <th scope="row">Berat</th>
                                <td> : </td>
                                <td>500 gram</td>
                            </tr> -->
                        </table>
                        <hr>
                        <p class="font-weight-bolder mx-2">
                            Deskripsi
                        </p>
                        <p class="font-weight-500 mx-2">
                        <?= $product['description']; ?>
                            <!-- Keunggulan : 1. Made with organic and fair trade ingredients : Dr. Bronner's Pure-Castile Liquid Soaps dibuat dari 90% bahan organik dan 70% bahan-bahannya adalah certified fair trade: Organic Coconut Oil, Organic Jojoba Oil, Organic Olive Oil, Organic
                            Palm Kernel Oil dan Organic Essential Oils 2. Good for you body and planet : Dr. Bronner's Pure-Castile Liquid Soaps sepenuhnya dapat terurai secara alami dan menggunakan bahan-bahan vegan yang tidak merusak lingkungan.
                            No animal tested and cruelty-free. 3. No synthetic preservatives, detergents or foaaming agents : Dibuat dari bahan-bahan botani yang mudah untuk diucapkan — tidak ada bahan pengawet sintetis, pengental, atau busa
                            buatan — baik untuk lingkungan dan sehat untuk kulit 4. 3x more concentrated than most liquid soaps : Dilute! Dilute! Sabun multifungsi dengan 18 kegunaan dalam satu produk: Great for hair, face & body! 5. Packaged
                            in 100% post consumer recycled plastic bottles : Kemasan botol Dr. Bronner's berasal dari olahan dar ulang plastik Untuk membantu mengurangi limbah dan memberikan dampak positif bagi lingkungan! -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="my-3 mx-1">Atur Jumlah</h4>
                        <input type="number" class="form-control" name="jumlah" placeholder="Jumlah">
                        <br>
                        <button type="submit" class="btn btn-success"><i class="fa fa-shopping-basket"> <i class="ti-shopping-cart"></i> Add to cart</button>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <?= $this->include('user/layout/footer_comment') ?>
    <?= $this->include('user/layout/footer') ?>