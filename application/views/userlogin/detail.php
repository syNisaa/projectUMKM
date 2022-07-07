<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>UFashion | UMKM FASHION</title>
    <?php $this->load->view("landing/jscss.php") ?>");

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="<?php echo base_url('assets/landing/assets/images/logo.png') ?>">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->

                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#men" class="active">Our Product</a></li>

                            <li class="scroll-to-section"><a href="#"><i>Your Order</i></a></li>
                            <li class="scroll-to-section"><a href="#">Hallo, <?php echo $this->session->userdata('username') ?>!</a></li>
                            <li class="scroll-to-section"><a href="<?php echo base_url() . 'index.php/landing/logout' ?>"><button class="btn btn-outline-danger">Logout</button></a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <?php foreach ($produk as $p2) { ?>
                            <h2><?php echo $p2->nama ?></h2>
                        <?php } ?>
                        <span>UFashion &amp; Produk by : UMKM INDONESIA</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <?php foreach ($produk as $p1) { ?>
        <section class="section" id="product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="left-images">
                            <img src="<?php echo base_url('assets/gambar/' . $p1->foto) ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right-content">
                            <h4><?php echo $p1->nama ?></h4>
                            <span class="price"><?php echo $p1->harga_jual ?></span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span><?php echo $p1->deskripsi ?></span>
                            <div class="quote">
                                <i class="fa fa-quote-left"></i>
                                <p>Ayo Dukung UMKM Indonesia Agar Menjadi Produk yang Mendunia</p>
                            </div>

                            <div class="quantity-content">
                                <h4><b>Stok Produk :</b> <?php echo $p1->stok ?></h4>
                                <div class="right-content">
                                    <div class="quantity buttons_added">
                                        <form action="<?php echo base_url('index.php/pesanan/order') ?>" method='POST' enctype="multipart/form-data">
                                            <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="+" name="jumlah" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                                    </div>
                                </div>
                            </div>
                            <div class="total">
                                <h4>Total: <b id="total">35000</b></h4>

                                <div class="form-grup">
                                    <input type="hidden" class='form-control' name='tanggal' value="<?php echo date("Y-m-d"); ?>"><br>
                                    <input type="hidden" class='form-control' name='users_id' value="<?php echo $this->session->userdata('id') ?>"><br>
                                    <input type="hidden" class='form-control' name='produk_id' value="<?php echo $p1->id?>"><br>

                                </div>
                                <div class="main-border-button">
                                    <input type='submit' class='btn btn-outline-secondary mt-4' name='submit' value="Beli Sekarang">
                                </div>
                                </form>
                                <!-- <a href="<?php echo base_url() . 'index.php/user/myorder' ?>">Buy</a> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- ***** Product Area Ends ***** -->




    <!-- jQuery -->
    <script src="<?php echo base_url('assets/landing/assets/js/jquery-2.1.0.min.js') ?>"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/landing/assets/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing/assets/js/bootstrap.min.js') ?>"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url('assets/landing/assets/js/owl-carousel.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing/assets/js/accordions.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing/assets/js/datepicker.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing/assets/js/scrollreveal.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing/assets/js/waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing/assets/js/jquery.counterup.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing/assets/js/imgfix.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing/assets/js/slick.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing/assets/js/lightbox.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing/assets/js/isotope.js') ?>"></script>

    <!-- Global Init -->
    <script src="<?php echo base_url('assets/landing/assets/js/custom.js') ?>"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>


</body>

</html>