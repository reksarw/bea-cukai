<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login ke Aplikasi Bea Cukai</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 panel panel-default">
                <br>
                <div class="col-md-4" style="height:50px">
                    <img src="<?php echo base_url(); ?>/assets/img/logo_polinema.jpg" style="height:100%;">
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4" style="height:50px">
                    <img src="<?php echo base_url(); ?>/assets/img/logo_beacukai.png" style="height:100%; float:right;">
                </div>

                <div class="col-md-12" style="margin-top:20px;">
                    <?php
                        if($this->session->flashdata('msg') == '') {
                        ?>
                            SELAMAT DATANG PADA SISTEM PENCATATAN BARANG SITAAN BEA CUKAI
                            <br>
                        <?php
                        } else {
                            echo $this->session->flashdata('msg');
                        }
                    ?>
                </div>

                <form role="form" method="POST" action="<?php echo base_url('Login/act_login'); ?>">
                    <div class="col-md-5" style="margin-top:10px;">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="user" autofocus>
                        </div>
                    </div>
                    <div class="col-md-5" style="margin-top:10px;">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="pass">
                        </div>
                    </div>
                    <div class="col-md-2" style="margin-top:10px;">
                        <button type="submit" href="index.html" class="btn btn-success">Login</button>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="checkbox" id="remember" name="remember" value="true"> 
                            <label for="remember" style="font-weight:normal;">Remember Me</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>