<?= $this->include('user/layout/header') ?>
<?= $this->include('user/layout/navbar') ?>
<?= $this->include('user/layout/sidebar') ?>
<?php

use App\Models\ProductModel;

$this->product = new ProductModel();
?>

<div class="main-panel">
    <div class="content-wrapper">
        <?php foreach ($product_category as $cat) : ?>
            <?php if ($this->product->where('category_id', $cat['category_id'])->findAll() != NULL) { ?>
                <div class="row">
                    <h3 class="card-title"><?= $cat['name']; ?></h3>
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex flex-row flex-nowrap overflow-auto">
                            <?php foreach ($products as $prod) :
                                if ($prod['category_id'] == $cat['category_id']) : ?>
                                    <a class="mx-3" href="/product/detail/<?= $prod['product_id'] ?>">
                                        <div class="card" style="width: 10rem;">
                                            <?php if ($prod['image'] != NULL) { ?>
                                                <img class="img-fluid" src="<?= base_url('assets/images/uploads/' . $prod['image']) ?>" alt="">
                                            <?php } else { ?>
                                                <img src="<?= base_url('assets/images/product-placeholder.svg') ?>" alt="">
                                            <?php } ?>
                                            <div class="card-body" style="text-decoration:none;">
                                                <h6 class="card-title"><?= $prod['name']; ?></h6>
                                                <h5 class="my-3 mx-1"><?= number_to_currency($prod['price'], 'IDR') ?></h5>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php }?>
        <?php endforeach; ?>

        <!-- content-wrapper ends -->
        <?= $this->include('user/layout/footer_comment') ?>
        <?= $this->include('user/layout/footer') ?>