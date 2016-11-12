<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url() ?>assets/img/avatar3.png" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, Jane</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?php echo base_url('Home'); ?>">
                    <i class="fa fa-home"></i> Home
                </a>
            </li>
            <li>
                <a>
                    <i class="fa fa-building-o"></i> Master<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url('Master/Jenis_Barang'); ?>">
                            <i class="fa fa-bookmark"></i> Jenis Barang
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a>
                    <i class="fa fa-building-o"></i> Kelola Barang<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url('Kelola/Barang_Masuk'); ?>">
                            <i class="fa fa-bookmark"></i> Barang Masuk
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Kelola/Pilih_Barang'); ?>">
                            <i class="fa fa-paperclip"></i> Pilih Barang
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Kelola/Barang_Keluar'); ?>">
                            <i class="fa fa-building-o"></i> Barang Keluar
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a>
                    <i class="fa fa-windows"></i> Transaksi<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url('Transaksi/Transaksi_Barang'); ?>">
                            <i class="fa fa-building-o"></i> Transaksi Barang
                        </a>
                    </li>
                    <li>
                        <!-- <a href="<?php echo base_url('Transaksi/Pelelangan'); ?>"> -->
                        <a>
                            <i class="fa fa-paperclip"></i> Pelelangan
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a>
                    <i class="fa fa-print"></i> Laporan
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>