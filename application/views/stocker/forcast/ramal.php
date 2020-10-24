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
                                <th style="background-color: #c13333;color:white;">Nama Barang</th>
                                <th width="5%" style="background-color: #c13333;color:white;">Alpha</th>
                                <th width="5%" style="background-color: #c13333;color:white;">Forcasting</th>
                                <th width="5%" style="background-color: #c13333;color:white;">Eror</th>
                                <th width="6%" style="background-color: #c13333;color:white;">MAE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><?= $n; ?></td>
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