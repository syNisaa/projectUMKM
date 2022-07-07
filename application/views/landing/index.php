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
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>

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
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>UFassion </h4>
                                <span>Bahan Premium &amp; Produksi Dalam Negri</span>
                                <div class="main-border-button">
                                    <a href="<?php echo base_url().'index.php/landing/formlogin'?>">Gabung Sekarang!</a>
                                </div>
                            </div>
                            <img src="<?php echo base_url('assets/landing/assets/images/left-banner-image.jpg') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <?php foreach ($jenis_produk as $jp) { ?>
                                <div class="col-lg-6">
                                    <div class="right-first-image">
                                        <div class="thumb">
                                            <div class="inner-content">
                                                <h4><?php echo $jp->nama; ?></h4>
                                                <span>Best <?php echo $jp->nama; ?> In Indonesia</span>
                                            </div>
                                            <div class="hover-content">
                                                <div class="inner">
                                                    <h4><?php echo $jp->nama; ?></h4>
                                                    <p>Ayo! Cintai Produk Indonesia</p>
                                                    <div class="main-border-button">
                                                        <a href="#<?php echo $jp->nama ?>"><?php echo $jp->nama ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="<?php echo base_url('assets/gambar/banner.jfif') ?>" style="width: 300px; height: 260px;">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2> <i> OurCollection</i></h2>
                        <span><b>UFashion </b>| Produk Terbaik Produksi Dalam Negri</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class=" men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <?php foreach ($produk as $p) { ?>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="<?php echo base_url() . "index.php/landing/detailproduk/" . $p->id ?>"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="<?php echo base_url() . "index.php/landing/formlogin" ?>"><i class="fa fa-sign-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="<?php echo base_url('assets/gambar/' . $p->foto) ?>" alt="" style="height: 300px;">
                                    </div>
                                    <div class="down-content">
                                        <h4><?php echo $p->nama ?></h4>
                                        <span><b><small>Rp. </small></b><?php echo $p->harga_jual ?></span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                                <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="<?php echo base_url('assets/landing/assets/images/men-02.jpg') ?>" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Air Force 1 X</h4>
                                        <span>$90.00</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                                <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="<?php echo base_url('assets/landing/assets/images/men-03.jpg') ?>" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Love Nana ‘20</h4>
                                        <span>$150.00</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                                <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <img src="<?php echo base_url('assets/landing/assets/images/men-01.jpg') ?>" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Classic Spring</h4>
                                        <span>$120.00</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->



    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>About Us</h2>
                        <span>UFashion Merupakan OnlineShop yang dapat digunakan untuk kegiatan jual beli masyarakatt indonesia. Ufashion bisa disebut juga dengan You Fashion yang memiliki makna UMKM FASHION</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>Kita Bisa Membantu UMKM Untuk Maju Dengan Cara Menggunakan Dan Mendistribusikan Produk Dalam Negri</p>
                        </div>
                        <p>Kalau bukan kita yang mendukung UMKM, Siapa Lagi? Yuk mulai sekarang gunakan produk buatan indonesia</p>
                        <p>Produk disini sudah terjamin kualitasnya. <br><a href="#"> Thanks For Your Support</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>UFashion</h4>
                                    <span>BEST COLLECTION</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="<?php echo base_url('assets/landing/assets/images/explore-image-01.jpg') ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="<?php echo base_url('assets/landing/assets/images/explore-image-02.jpg') ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>UFashion</h4>
                                    <span>Produk Pilihan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->



    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Follow Akun Media Sosial Kami!</h2>
                        <span>Kalian Bisa Menjadi Suplier Di Website Kami! Ayo Cari Tahu Lebih Lengkapnya Di Instagram Dan Medsos Yang Lainn</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>Jakarta Barat</span></li>
                                <li>Phone:<br><span>0813-1212-4545</span></li>
                                <li>Office Location:<br><span>Lenteng Agung</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Jam Kerja:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>indonesia@umkm.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="<?php echo base_url('assets/landing/assets/images/white-logo.png') ?>" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href="#">indonesia@umkm.com</a></li>
                            <li><a href="#">0813-1212-4545</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <?php foreach ($jenis_produk as $jp3) { ?>
                            <li><a href="#"><?php echo $jp3->nama ?> Shopping</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Product</a></li>
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
                        <p>Copyright © 2022 UMKM-UFashion Indonesia 

                            <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a> | By : Sistem Informasi05 | STT NURUL FIKRI ANGKATAN21
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