<?php
$this->load->view('tema2/head');
$this->load->view('tema2/sidebar');
?>

<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">

            <div class="col-lg-6 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Grafik Penjualan Barang</h4>
                    <div id="bar-morris-chart" class="morris-chart" style="height: 240px"></div>
                    <div class="text-center">
                        <ul class="list-inline morris-chart-detail-list">
                            <li><i class="fa fa-circle"></i>Series A</li>
                            <li><i class="fa fa-circle"></i>Series B</li>
                            <li><i class="fa fa-circle"></i>Series C</li>
                        </ul>
                    </div>
                    <!-- /#bar-morris-chart.morris-chart -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-lg-6 col-xs-12 -->

            <div class="col-lg-6 col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Memory usage</h4>
                    <div id="donut-morris-chart" class="morris-chart" style="height: 240px"></div>
                    <div class="text-center">
                        <ul class="list-inline morris-chart-detail-list">
                            <li><i class="fa fa-circle"></i>Series A</li>
                            <li><i class="fa fa-circle"></i>Series B</li>
                            <li><i class="fa fa-circle"></i>Series C</li>
                        </ul>
                    </div>
                    <!-- /#donut-morris-chart.morris-chart -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-lg-6 col-xs-12 -->
        </div>
        <!-- /.row -->

        <div class="row small-spacing">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <a href="<?= site_url('manager/approve'); ?>">
                    <div class="box-content bg-warning text-white">
                        <div class="statistics-box with-icon">
                            <i class="ico small fa fa-shopping-cart"></i>
                            <p class="text text-white">DATA REQUEST</p>
                            <h2 class="counter"><?= $dtrequest ?></h2>
                        </div>
                    </div>
                    <!-- /.box-content -->
                </a>
            </div>
            <!-- /.col-lg-3 col-md-6 col-xs-12 -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <a href="<?= site_url('manager/order'); ?>">
                    <div class="box-content bg-success text-white">
                        <div class="statistics-box with-icon">
                            <i class="ico small fa fa-shopping-cart"></i>
                            <p class="text text-white">DATA ORDER</p>
                            <h2 class="counter"><?= $order ?></h2>
                        </div>
                    </div>
                    <!-- /.box-content -->
                </a>
            </div>
            <!-- /.col-lg-3 col-md-6 col-xs-12 -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <a href="<?= site_url('manager/pengguna'); ?>">
                    <div class="box-content bg-info text-white">
                        <div class="statistics-box with-icon">
                            <i class="ico small fa fa-users"></i>
                            <p class="text text-white">MANAGE USER</p>
                            <h2 class="counter"><?= $user ?></h2>
                        </div>
                    </div>
                    <!-- /.box-content -->
                </a>
            </div>
            <!-- /.col-lg-3 col-md-6 col-xs-12 -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <a href="<?= site_url('manager/lapincom'); ?>">
                    <div class="box-content bg-danger text-white">
                        <div class="statistics-box with-icon">
                            <i class="ico small fa fa-warning"></i>
                            <small class="text text-white">DEFECTIVE GOODS</small>
                            <h2 class="counter"><?= $rusak ?></h2>
                        </div>
                    </div>
                    <!-- /.box-content -->
                </a>
            </div>
            <!-- /.col-lg-3 col-md-6 col-xs-12 -->
        </div>
        <!-- .row -->

        <?php $this->load->view('tema2/foot'); ?>