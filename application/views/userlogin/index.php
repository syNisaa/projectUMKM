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
                            <li class="scroll-to-section"><a href="#" class="active">Our Product</a></li>

                            <li class="scroll-to-section"><a href="<?php echo base_url().'index.php/user/myorder'?>"><i>Your Order</i></a></li>
                            <li class="scroll-to-section"><a href="#">Hallo, <?php echo $this->session->userdata('username') ?>!</a></li>
                            <li class="scroll-to-section"><a href="<?php echo base_url().'index.php/landing/logout'?>"><button class="btn btn-outline-danger">Logout</button></a></li>
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



    <!-- ***** Products Area Starts ***** -->
    <section class="section mt-5" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2><i>Our Products</i></h2>
                        <span>UMKMINDONESIA.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($produk as $p) {?>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="<?php echo base_url().'index.php/user/detailproduk/'.$p->id ?>"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="<?php echo base_url().'index.php/user/detailproduk/'.$p->id ?>"><i class="fa fa-star"></i></a></li>
                                    <li><a href="<?php echo base_url().'index.php/user/detailproduk/'.$p->id  ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="<?php echo base_url('assets/gambar/' . $p->foto) ?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4><?php echo $p->nama ?></h4>
                            <span><?php echo $p->harga_jual ?></span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php }?>
               
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->

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