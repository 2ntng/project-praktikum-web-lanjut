<?= $this->include('user/layout/header') ?>
<?= $this->include('user/layout/navbar') ?>
<?= $this->include('user/layout/sidebar') ?>
<?php $session = session(); ?>            
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Welcome, <?= $session->get('fullname'); ?> (User)</h3>
                                    <!-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> -->
                                </div>
                                <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                                <a class="dropdown-item" href="#">January - March</a>
                                                <a class="dropdown-item" href="#">March - June</a>
                                                <a class="dropdown-item" href="#">June - August</a>
                                                <a class="dropdown-item" href="#">August - November</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Order Details</p>
                                    <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                                    <div class="d-flex flex-wrap mb-5">
                                        <div class="mr-5 mt-3">
                                            <p class="text-muted">Order value</p>
                                            <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
                                        </div>
                                        <div class="mr-5 mt-3">
                                            <p class="text-muted">Orders</p>
                                            <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
                                        </div>
                                        <div class="mr-5 mt-3">
                                            <p class="text-muted">Users</p>
                                            <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted">Downloads</p>
                                            <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
                                        </div>
                                    </div>
                                    <canvas id="order-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title">Sales Report</p>
                                        <a href="#" class="text-info">View all</a>
                                    </div>
                                    <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                                    <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                                    <canvas id="sales-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card position-relative">
                                <div class="card-body">
                                    <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                        <div class="ml-xl-4 mt-3">
                                                            <p class="card-title">Product Stock Analisis</p>
                                                            <h1 class="text-primary">$34040</h1>
                                                            <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                                                            <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-9">
                                                    
                                                <div class="row">
                                                   
                                                    <canvas id="stock_produk"></canvas>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
<?= $this->include('user/layout/footer_comment') ?>
    <!-- Plugin js for this page -->
    <script src="<?= base_url('vendors/chart.js/Chart.min.js')?>"></script>
    <script>
    var stock_produk = document.getElementById('stock_produk');
    var data_produk = [];
    var label_produk = [];
    <?php foreach($stockProduct->getResult() as $key=>$value):?>
        data_produk.push(<?= $value->stock?>);
        label_produk.push('<?= $value->name?>');
    <?php endforeach?>
    var data_produk ={
        datasets:[{
            data: data_produk,
            backgroundColor:[
                'rgba(255,99,132,0.8)',
                'rgba(54,162,235,0.8)',
                'rgba(255,206,86,0.8)',
            ],
        }],
        label:label_produk,
    }
    var chart_product_stock = new Chart(stock_produk,{
        type: 'doughnut',
        data: data_produk
    });
</script>
    <!-- End plugin js for this page -->
<?= $this->include('user/layout/footer') ?>