<?php
$this->load->view('tema/head');
$this->load->view('tema/sidebar');
?>

<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-lg-10 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">P E R A M A L A N &nbsp; S T O K &nbsp; B A R A N G </h4>
                    <!-- /.box-title -->
                    <div class="card-content">
                        <?php echo form_open_multipart('stocker/forcast/result', 'class="form-horizontal"'); ?>
                        <div class="form-group">
                            <label for="kode" class="col-sm-2 control-label">Stok Barang</label>
                            <div class="col-sm-10">
                                <select class="form-control select2_1" name="kode" required>

                                    <option value="">Pilih Kode Barang</option>
                                    <?php
                                    foreach ($barang->result_array() as $org) {
                                    ?>
                                        <option value="<?php echo $org['kode']; ?>"><?php echo $org['kode'] . ' - ' . $org['nm_barang']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nm_barang" class="col-sm-2 control-label">Bulan </label>
                            <div class="col-sm-5">
                                <?php
                                $tgl = date('d');
                                $a = date('m');
                                $bln = $a + 1;
                                $tahun = date('Y');
                                ?>
                                <?php $target = $tgl . '-' . $bln . '-' . $tahun; ?>
                                <input type="text" class="form-control" name="bulan" value="<?= format_bulan($target) ?>" readonly>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="tahun" value="<?= date('Y') ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group margin-bottom-0" style="margin-left: 65%;">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">Ramalkan</button>
                                <a href="<?php echo site_url('') ?>" class="btn btn-sm btn-rounded btn-danger">Batal</a>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <!-- /.card-content -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.box-header -->


            <!-- /.box-body -->
        </div>

        <!--tambahkan custom js disini-->
        <?php
        $this->load->view('tema/foot');
        ?>