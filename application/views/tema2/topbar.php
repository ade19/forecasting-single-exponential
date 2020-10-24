</head>

<body class="skin-purple">
    <!-- Site wrapper -->
    <div class="wrapper" style="background: #3b395f;">

        <header class="main-header">
            <a href="#" class="logo">
                <img class="logo" style="margin-left: -20px;" src="<?php echo base_url(); ?>assets/images/head.png" alt="Theme-Logo" /></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav" style="color:red">
                            <li class="active"><a href="#Modalogin" id="<?php echo $this->session->userdata('id_user'); ?>|<?php echo $this->session->userdata('username'); ?>|<?php echo $this->session->userdata('nama_lengkap'); ?>|<?php echo $this->session->userdata('level'); ?>|<?php echo $this->session->userdata('foto'); ?>" data-toggle="modal" class="detail-login">Profil <span class="sr-only">(current)</span></a></li>
                            <li><a href="<?= base_url(); ?>admin/pengguna">Data Pengguna</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Master Data <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?= site_url('admin/pasien'); ?>">Data Pasien</a></li>
                                    <li><a href="<?= site_url('admin/kategori'); ?>">Kategori</a></li>
                                    <li><a href="<?= site_url('admin/dokter'); ?>">Data Dokter</a></li>
                                    <li><a href="<?= site_url('admin/poli'); ?>">Data Poliknik</a></li>
                                    <li><a href="<?= site_url('admin/obat'); ?>">Data Obat</a></li>
                                </ul>
                            </li>
                            <li><a><?= format_hari_tanggal(date('y-m-d')); ?></a></li>
                        </ul>
                    </div>

                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <?php
                                $iu = $this->session->userdata('id_user');
                                $avatar = $this->db->query("select foto from tb_user where id_user=$iu");
                                foreach ($avatar->result_array() as $r) {
                                    if ($r['foto'] == '') {
                                        echo "<img src='" . base_url() . "assets/file_user/user-b.png' alt='...' class='user-image'>";
                                    } else {
                                        echo "<img src='" . base_url() . "assets/file_user/$r[foto]' alt='...' class='user-image'>";
                                    }
                                }
                                ?>

                                <span class="hidden-xs"><?php echo $this->session->userdata('nama_lengkap'); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <?php
                                    $iu = $this->session->userdata('id_user');
                                    $avatar = $this->db->query("select foto from tb_user where id_user=$iu");
                                    foreach ($avatar->result_array() as $r) {
                                        if ($r['foto'] == '') {
                                            echo "<img src='" . base_url() . "assets/file_user/user-b.png' alt='...' class='img-circle'>";
                                        } else {
                                            echo "<img src='" . base_url() . "assets/file_user/$r[foto]' alt='...' class='img-circle'>";
                                        }
                                    }
                                    ?>
                                    <p>
                                        <?php echo $this->session->userdata('nama_lengkap'); ?>
                                    </p>
                                    <small style="color:yellow;"><?php echo $this->session->userdata('level'); ?></small>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Modal Detail Akun Login -->
            <div class="modal fade" id="Modalogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#605ca8;color:white;">
                            <h4 class="modal-title" id="myModalLabel"><span class="fa fa-user"></span>&nbsp;&nbsp;&nbsp;Detail Akun Pengguna</h4>
                        </div>
                        <div class="modal-body" id="IsiLogin">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="fa fa-close"></span> Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir kode modal dialog -->

        </header>

        <!-- =============================================== -->