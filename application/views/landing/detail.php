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
                            <li class="scroll-to-section"><a href="<?php echo base_url() ?>" class="active">Home</a></li>

                            <li class="submenu">
                                <a href="javascript:;">Produk</a>
                                <ul>
                                    <?php foreach ($jenis_produk as $jp) { ?>
                                        <li class="scroll-to-section"><a href="#men"><?php echo $jp->nama ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                            <li class="scroll-to-section"><a href="#explore"><i>About Us</i></a></li>
                            <li class="scroll-to-section"><a href="<?php echo base_url() . "index.php/landing/formlogin" ?>">Login</a></li>
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
                            </div>
                            <div class="total">
                                <div class="main-border-button"><a href="<?php echo base_url() ?>">Kembali</a><a href="<?php echo base_url() . "index.php/landing/formlogin" ?>">Beli Produk</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- ***** Product Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Shopping</a></li>
                        <li><a href="#">Women’s Shopping</a></li>
                        <li><a href="#">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved.

                            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
                        </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


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