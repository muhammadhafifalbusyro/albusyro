<!doctype html>
<!--
	Lamoda by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="en-gb" class="no-js">

<head>
    <meta charset="utf-8">
    <title>Al Busyro</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!--styles -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/etlinefont.css">
    <link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" />

    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/logo2.png" />
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body data-spy="scroll" data-target="#main-menu">

    <!--Start Page loader -->
    <div id="pageloader">
        <div class="loader">
            <img src="<?php echo base_url(); ?>assets/images/progress.gif" alt='loader' />
        </div>
    </div>
    <!--End Page loader -->

    <!--Start Navigation-->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--Start Logo -->
                    <div class="logo-nav">
                        <a href="<?php echo base_url(); ?>">
                            <img src="<?php echo base_url() ?>assets/images/logo.png" alt="Company logo" />
                        </a>
                    </div>
                    <!--End Logo -->
                    <div class="clear-toggle"></div>
                    <div id="main-menu" class="collapse scroll navbar-right">
                        <ul class="nav">

                            <li> <a href="<?php echo base_url() ?>">Beranda</a> </li>

                            <li> <a href="<?php echo base_url() ?>brand">Brand</a> </li>

                        </ul>
                    </div><!-- end main-menu -->
                </div>
            </div>
        </div>
    </header>
    <!--End Navigation-->

    <!-- page-header -->
    <section id="page-header" class="parallax">
        <div class="overlay"></div>
        <div class="container">
            <h1>Brand</h1>
            <!--Start Breadcrumb-->
            <div class="breadcrumb">
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>brand">Brand</a>
                    </li>
                </ul>
            </div>
            <!--End Breadcrumb-->
        </div>
    </section>
    <!-- /page-header -->
    <!--Start portfolio-->
    <!-- Filtering -->

    <div class="work-main">
        <ul class="work-grid">
            <?php foreach ($apps as $dataListApp) : ?>
                <li class="work-item thumnail-img mix <?php echo $dataListApp["jenis"]; ?>">
                    <div class="work-image">
                        <img src="<?php echo $dataListApp["imgUrl"]; ?>" alt="thumbnail">

                        <!--Hover link-->
                        <div class="hover-link">
                            <a href="<?php echo $dataListApp['link']; ?>">
                                <i class="fa fa-link"></i>
                            </a>

                            <a href="<?php echo $dataListApp["imgUrl"]; ?>" class="popup-image">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <!--End link-->

                        <!--Hover Caption-->
                        <div class="work-caption">
                            <h4><?php echo $dataListApp["nama"]; ?></h4>
                            <p><?php echo $dataListApp["isi"]; ?></p>
                        </div>
                        <!--End Caption-->

                    </div> <!-- /.work-image-->
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!--End portfolio-->
    <!--Start Call To Action-->

    <!--End Call To Action-->


    <!--Start Footer-->
    <footer style="background-color: #220055;">
        <div class="container">
            <div class="row">
                <!--Start copyright-->
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="copyright">
                        <p>Copyright © 2021 All Rights reserved by: Muhammad Hafif Al Busyro</a>
                        </p>
                    </div>
                </div>
                <!--End copyright-->

                <!--start social icons-->
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="social-icons">
                        <ul>
                            <li><a href="https://facebook.com/muhammadhafifalbusyro"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://instagram.com/muhammadhafifalbusyro"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC9kJNGiJC8QNd_ooNVkdLbA"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/muhammad-hafif-al-busyro-8bb248187"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--End social icons-->
            </div> <!-- /.row-->
        </div> <!-- /.container-->
    </footer>
    <!--End Footer-->

    <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

</body>

</html>