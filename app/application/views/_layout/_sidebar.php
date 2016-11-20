<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url() ?>assets/img/avatar3.png" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, <?php echo $this->session->userdata('user_session')->user; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?php echo base_url('Home'); ?>">
                    <i class="fa fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a>
                    <i class="fa fa-file-text-o"></i> Master<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url('Master/menu/data-perusahaan'); ?>">
                            <i class="fa fa-building"></i> Data Perusahaan
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Master/menu/jenis-layanan'); ?>">
                            <i class="fa fa-bookmark"></i> Jenis Layanan
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a>
                    <i class="fa fa-desktop"></i> Data Surat<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url('Surat/menu/surat-masuk'); ?>">
                            <i class="fa fa-envelope"></i> Data Surat Masuk
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>