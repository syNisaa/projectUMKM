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
                            <h1 class="m-0">Data User Publik</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() . "index.php/admin/dashboard" ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">User</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- <div class="container-fluid"> <a href="<?php echo base_url() . "index.php/jenisproduk/tambah" ?>"><button type="button" class="btn btn-outline-success">Tambah Data</button></a><br> -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">id User</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status Pengguna</th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $a = 1;
                            foreach ($users as $u) { ?>
                                <tr>
                                    <th scope="row"><?php echo $a ?></th>
                                    <td><?php echo $u->id ?></td>
                                    <td><?php echo $u->username ?></td>
                                    <td><?php echo $u->email ?></td>
                                    <td>
                                        <?php if ($u->status == "1"){
                                            echo "Aktif";
                                        }else{
                                            echo "Tidak Aktif";
                                            
                                        }?>
                                    </td>
                                    <td><?php echo $u->role ?></td>
                                    <td><?php echo anchor('index.php/user/hapus/' . $u->id, '<button type="button" class="btn btn-danger">Delete</button>'); ?>

                                    </td>
                                </tr>
                            <?php $a++;
                            } ?>
                        </tbody>
                    </table>

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