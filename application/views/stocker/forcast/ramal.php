<?php
$this->load->view('tema/head');
$this->load->view('tema/sidebar');
include('forcast.php');
?>

<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content card">
                    <h4 class="box-title">
                        <center>F O R C A S T I N G &nbsp; S T O K &nbsp; B A R A N G </center>
                    </h4>

                    <table id="example-scroll-y" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                            <tr>
                                <th width="5%" style="background-color: #c13333;color:white;">No</th>
                                <th style="background-color: #c13333;color:white;">Periode </th>
                                <th style="background-color: #c13333;color:white;">Aktual</th>
                                <th width="5%" style="background-color: #c13333;color:white;">Alpha</th>
                                <th width="5%" style="background-color: #c13333;color:white;">Forcasting</th>
                                <th width="5%" style="background-color: #c13333;color:white;">Eror</th>
                                <th width="6%" style="background-color: #c13333;color:white;">MAE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data Pertama -->
                            <tr>
                                <td>1</td>
                                <td><?= format_bulan(1); ?></td>
                                <td><?= $a1; ?></td>
                                <td><?= $alpa; ?></td>
                                <td><?= $ft1; ?></td>
                                <td><?= $E1; ?></td>
                                <td><?= $M1; ?></td>
                            </tr>

                            <!-- Data Kedua -->
                            <tr>
                                <td>2</td>
                                <td><?= format_bulan(2); ?></td>
                                <td><?= $a2; ?></td>
                                <td><?= $alpa; ?></td>
                                <td><?= $ft2; ?></td>
                                <td><?= $e2; ?></td>
                                <td><?= $m2; ?></td>
                            </tr>

                            <!-- Data Ketiga -->
                            <tr>
                                <td>3</td>
                                <td><?= format_bulan(3); ?></td>
                                <td><?= $a3; ?></td>
                                <td><?= $alpa; ?></td>
                                <td><?= $ft3; ?></td>
                                <td><?= $e3; ?></td>
                                <td><?= $m3; ?></td>
                            </tr>

                            <!-- Data Keempat -->
                            <tr>
                                <td>4</td>
                                <td><?= format_bulan(4); ?></td>
                                <td><?= $a4; ?></td>
                                <td><?= $alpa; ?></td>
                                <td><?= $ft4; ?></td>
                                <td><?= $e4; ?></td>
                                <td><?= $m4; ?></td>
                            </tr>

                            <!-- Data Kelima -->
                            <tr>
                                <td>5</td>
                                <td><?= format_bulan(5); ?></td>
                                <td><?= $a5; ?></td>
                                <td><?= $alpa; ?></td>
                                <td><?= $ft5; ?></td>
                                <td><?= $e5; ?></td>
                                <td><?= $m5; ?></td>
                            </tr>

                            <!-- Data Keenam -->
                            <tr>
                                <td>6</td>
                                <td><?= format_bulan(6); ?></td>
                                <td><?= $a6; ?></td>
                                <td><?= $alpa; ?></td>
                                <td><?= $ft6; ?></td>
                                <td><?= $e6; ?></td>
                                <td><?= $m6; ?></td>
                            </tr>

                            <!-- Data Ketujuh -->
                            <tr>
                                <td>7</td>
                                <td><?= format_bulan(7); ?></td>
                                <td><?= $a7; ?></td>
                                <td><?= $alpa; ?></td>
                                <td><?= $ft7; ?></td>
                                <td><?= $e7; ?></td>
                                <td><?= $m7; ?></td>
                            </tr>

                            <!-- Data Kedelapan -->
                            <tr>
                                <td>8</td>
                                <td><?= format_bulan(8); ?></td>
                                <td><?= $a8; ?></td>
                                <td><?= $alpa; ?></td>
                                <td><?= $ft8; ?></td>
                                <td><?= $e8; ?></td>
                                <td><?= $m8; ?></td>
                            </tr>

                            <!-- Data Kesembilan -->
                            <tr>
                                <td>9</td>
                                <td><?= format_bulan(9); ?></td>
                                <td><?= $a9; ?></td>
                                <td><?= $alpa; ?></td>
                                <td><?= $ft9; ?></td>
                                <td><?= $e9; ?></td>
                                <td><?= $m9; ?></td>
                            </tr>

                            <!-- Data Kesepuluh -->
                            <tr>
                                <td>10</td>
                                <td><?= format_bulan(10); ?></td>
                                <td></td>
                                <td></td>
                                <td class="bg-success text-white"><?= $ft10; ?></td>
                                <td></td>
                                <td class="bg-success text-white"><?= $cari; ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>


        <!--tambahkan custom js disini-->
        <?php
        $this->load->view('tema/foot');
        ?>