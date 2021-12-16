<?= $this->include('user/layout/header') ?>
namespace CodeIgniter;
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
                
                <?php 
                use App\Models\CartItemsModel;
                use App\Models\ProductModel;
                $cartModel = new CartItemsModel();
                $productModel = new ProductModel();
                $cart = $cartModel->where('user_id', session()->get('user_id'))->findAll();
                $jml_item = 0;
                foreach ($cart as $cartItem) {
                    $jml_item = $jml_item + $cartItem['quantity'];
                }
                $subtotal = 0;
                // $cart = \Config\Services::cart();
                // $cart = $cart->contents();
                if ($cart != null) {
                    foreach ($cart as $cartItem) {
                        if ($productModel->find($cartItem['product_id']) != NULL) {
                            $product = $productModel->find($cartItem['product_id']);
                            $subtotal = $subtotal + $cartItem['quantity'] * $product['price'];
                        } else {
                            $product = $productModel->withDeleted()->find($cartItem['product_id']);
                            $deleted = true;
                        } ?>
                            <div class="card mb-3">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2 pl-3 pr-0">
                                            <?php if ($product['image'] != NULL) { ?>
                                                <img class="img-fluid" src="<?= base_url('assets/images/uploads/' . $product['image']) ?>" alt="">
                                            <?php } else { ?>
                                                <img class="img-fluid" src="<?= base_url('assets/images/product-placeholder.svg') ?>" alt="">
                                            <?php } ?>
                                        </div>
                                        <div class="col-10 pl-3 pb-3">
                                            <p class="font-weight-500"> <?= $product['name'] ?></p>
                                            <h2><?= number_to_currency($product['price'],'IDR')?></h2>
                                            <p class="font-weight-500"> Quantity : <?= $cartItem['quantity'] ?></p>
                                            <div class="d-flex flex-row-reverse">
                                                <div class="p-2">
                                                    <a href="<?= base_url('/user/cart/delete/' . $cartItem['cart_item_id']) ?>"><button type="submit" class="btn btn-danger btn-sm"><i class="ti-trash"></i> Delete</button></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="row">
                        <div class="col-md-8 grid-margin">
                            <div class="card mb-3">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-12 pl-6 pb-3">
                                            <h3>Your cart is empty.</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php
                    }
                        ?>
                        </div>
                        <div class="col-md-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="my-3 mx-1">Subtotal (<?= $jml_item ?>)</h4>
                                    <h2><?=number_to_currency($subtotal,'IDR')?></h2>
                                </div>
                                <!-- <button type="submit" class="btn btn-success mx-3 mb-3"><i class="ti-shopping-cart"></i> Buy</button> -->
                                <?php if ($cart != null) { ?>
                                    <a href="/user/cart/checkout" class="btn btn-success mx-3 mb-3"><i class="ti-shopping-cart"></i> Buy</a>
                                <?php } else { ?>
                                    <button class="btn btn-success mx-3 mb-3" disabled><i class="ti-shopping-cart"></i> Buy</button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    

                    <!-- content-wrapper ends -->
                    
                    <?= $this->include('user/layout/footer') ?>