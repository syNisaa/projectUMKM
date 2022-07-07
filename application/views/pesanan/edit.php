<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>
    <!-- <?php echo base_url('assets/css/ini/vendor/jquery/jquery.min.js') ?> -->
    <!-- Google Font: Source Sans Pro -->

    <?php $this->load->view("templateAdmin/cssjs.php") ?>;

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("templateAdmin/navbar.php") ?>");
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("templateAdmin/sidebar.php") ?>");

        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Produk</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() . "index.php/admin/dashboard" ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Produk</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <?php foreach ($pesanan as $ps) {?>
                    <form action="<?php echo base_url('index.php/pesanan/update') ?>" method='POST' enctype="multipart/form-data">
                        <div class="form-grup">
                            <input type="hidden" class='form-control' name='id' value="<?php echo $ps->id ?> "><br>
                        </div>
                        <div class="form-grup">
                            <label class='font-weight-bold'>Tanggal Pesanan</label>
                            <input type="text" class='form-control' name='tanggal' value=" <?php echo $ps->tanggal ?>"><br>

                        </div>
                        <div class="form-grup">
                            <label class='font-weight-bold'>jumlah pesanan</label>
                            <input type="text" class='form-control' name='jumlah' value=" <?php echo $ps->jumlah ?>"><br>

                        </div>
                        <div class="form-grup">
                            <label class='font-weight-bold'>Users_id</label>
                            <input type="text" class='form-control' name='users_id' value=" <?php echo $ps->users_id ?> "><br>

                        </div>
                        <div class="form-grup">
                            <label class='font-weight-bold'>Produk_id</label>
                            <input type="text" class='form-control' name='produk_id'value="<?php echo $ps->produk_id ?>"><br>

                        </div>

                        <input type='submit' class='btn btn-primary mt-4' name='submit' value="Simpan">

                    </form>
                    <?php } ?>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->

                    <!-- /.row -->
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php $this->load->view("templateAdmin/footer.php") ?>");
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->

</body>

</html>