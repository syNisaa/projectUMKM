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
                            <h1 class="m-0">Data Pembelian</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() . "index.php/admin/dashboard" ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Pembelian</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid"> <a href="<?php echo base_url() . "index.php/pembelian/tambah" ?>"><button type="button" class="btn btn-outline-success">Tambah Data</button></a><br>
                    <div class="container-fluid">
                        <!-- Info boxes -->
                        <br><table table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">id </th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Produk_id</th>
                                    <th scope="col">Suplier_id</th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $a = 1;
                                foreach ($pembelian as $p) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $a ?></th>
                                        <td><?php echo $p->id ?></td>
                                        <td><?php echo $p->tanggal ?></td>
                                        <td><?php echo $p->jumlah ?></td>
                                        <td><?php echo $p->harga ?></td>
                                        <td><?php echo $p->produk_id ?></td>
                                        <td><?php echo $p->suplier_id ?></td>
                                        <td><?php echo anchor('index.php/pembelian/hapus/' . $p->id, '<button type="button" class="btn btn-danger">Delete</button>'); ?>
                                           
                                        </td>
                                    </tr>
                                <?php $a++;
                                } ?>
                            </tbody>
                        </table>
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