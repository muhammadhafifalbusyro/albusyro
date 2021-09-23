<!doctype html>
<!--
	Lamoda by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="en-gb" class="no-js">

<head>
	<meta charset="utf-8">
	<title>Blog || Al Busyro</title>
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!--styles -->
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/js/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/js/owl-carousel/owl.transitions.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/magnific-popup.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/etlinefont.css">
	<link href="<?php echo base_url() ?>assets/css/style.css" type="text/css" rel="stylesheet" />
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/logo2.png" />


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
        <script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
        <script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
        <![endif]-->

<body data-spy="scroll" data-target="#main-menu">


	<!--Start Page loader -->
	<div id="pageloader">
		<div class="loader">
			<img src="<?php echo base_url() ?>assets/images/progress.gif" alt='loader' />
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

							<li> <a href="<?php echo base_url() ?>blog">Blog</a> </li>

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
			<h1>Blog</h1>
			<!--Start Breadcrumb-->
			<div class="breadcrumb">
				<ul>
					<li>
						<a href="<?php echo base_url() ?>">Home</a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>blog">Blog</a>
					</li>
				</ul>
			</div>
			<!--End Breadcrumb-->
		</div>
	</section>
	<!-- /page-header -->

	<!--Start blog -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- Blog Post -->
				<div class="col-md-8 col-sm-8">
					<!-- <?php foreach ($blogs as $dataListBlog) : ?>
						<div class="col-md-6">
							<div class="blog-post">
								<div class="post-media">
									<img src="<?php echo $dataListBlog["img_url"]; ?>" alt="">
								</div>
								<div class="post-desc">
									<h4><?php echo $dataListBlog["judul"]; ?></h4>
									<h5><?php echo $dataListBlog["date"]; ?></h5>
									<?php if (strlen($dataListBlog['isi']) > 100) : ?>
										<p><?php echo substr($dataListBlog["isi"], 0, 100); ?> ...</p>
									<?php else : ?>
										<p><?php echo $dataListBlog['isi'] ?></p>
									<?php endif; ?>
									<a href="<?php echo base_url(); ?>blog/detail/<?php echo $dataListBlog["id"] ?>" class="btn btn-gray-border">Baca Selengkapnya</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?> -->







					<?php if ($jumlah_data == $awal_data + $jumlah_data_per_halaman) : ?>
						<?php for ($i = $awal_data; $i < $awal_data + $jumlah_data_per_halaman; $i++) : ?>
							<div class="col-md-6">
								<div class="blog-post">
									<div class="post-media">
										<img src="<?php echo $blogs[$i]["img_url"]; ?>" alt="" style='height:250px;width:400px'>
									</div>
									<div class="post-desc">
										<?php if (strlen($blogs[$i]['judul']) > 30) : ?>
											<h4><?php echo substr($blogs[$i]["judul"], 0, 30); ?> ...</h4>
										<?php else : ?>
											<h4><?php echo $blogs[$i]['judul'] ?></h4>
										<?php endif; ?>
										<h5><?php echo $blogs[$i]["date"]; ?></h5>
										<a href="<?php echo base_url(); ?>blog/detail/<?php echo $blogs[$i]["id"] ?>" class="btn btn-gray-border">Baca Selengkapnya</a>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					<?php elseif ($jumlah_data < $awal_data + $jumlah_data_per_halaman) : ?>
						<?php for ($i = $awal_data; $i < $jumlah_data; $i++) : ?>
							<div class="col-md-6">
								<div class="blog-post">
									<div class="post-media">
										<img src="<?php echo $blogs[$i]["img_url"]; ?>" alt="" style='height:250px;width:400px'>
									</div>
									<div class="post-desc">
										<?php if (strlen($blogs[$i]['judul']) > 30) : ?>
											<h4><?php echo substr($blogs[$i]["judul"], 0, 30); ?> ...</h4>
										<?php else : ?>
											<h4><?php echo $blogs[$i]['judul'] ?></h4>
										<?php endif; ?>
										<h5><?php echo $blogs[$i]["date"]; ?></h5>
										<a href="<?php echo base_url(); ?>blog/detail/<?php echo $blogs[$i]["id"] ?>" class="btn btn-gray-border">Baca Selengkapnya</a>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					<?php elseif ($jumlah_data > $awal_data + $jumlah_data_per_halaman) : ?>
						<?php for ($i = $awal_data; $i < $awal_data + $jumlah_data_per_halaman; $i++) : ?>
							<div class="col-md-6">
								<div class="blog-post">
									<div class="post-media">
										<img src="<?php echo $blogs[$i]["img_url"]; ?>" alt="" style='height:250px;width:400px'>
									</div>
									<div class="post-desc">
										<?php if (strlen($blogs[$i]['judul']) > 30) : ?>
											<h4><?php echo substr($blogs[$i]["judul"], 0, 30); ?> ...</h4>
										<?php else : ?>
											<h4><?php echo $blogs[$i]['judul'] ?></h4>
										<?php endif; ?>
										<h5><?php echo $blogs[$i]["date"]; ?></h5>
										<a href="<?php echo base_url(); ?>blog/detail/<?php echo $blogs[$i]["id"] ?>" class="btn btn-gray-border">Baca Selengkapnya</a>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					<?php endif; ?>

				</div>
				<!-- /Blog Post -->

				<!-- Right Sidebar -->
				<div class="col-md-4 col-sm-4">

					<div class="widget widget-sidebar">
						<div class="search-box">
							<form>
								<input type="search" class="form-control" placeholder="Search">
								<i class="fa fa-search"></i>
							</form>
						</div>
					</div>

					<!--Start popular Post -->
					<div class="widget-main">
						<h4>Popular Post</h4>
						<div class="sidebar-widget clearfix">
							<a href="#"><img src="<?php echo base_url() ?>assets/images/blog/blog1.jpg" alt=""></a>
							<p class="sidebar-widget-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
							<p class="date">8 March, 2014</p>
						</div>
						<div class="sidebar-widget clearfix">
							<a href="#"><img src="<?php echo base_url() ?>assets/images/blog/blog2.jpg" alt=""></a>
							<p class="sidebar-widget-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
							<p class="date">6 Apr, 2014</p>
						</div>
						<div class="sidebar-widget clearfix">
							<a href="#"><img src="<?php echo base_url() ?>assets/images/blog/blog3.jpg" alt=""></a>
							<p class="sidebar-widget-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></p>
							<p class="date">22 May, 2014</p>
						</div>
					</div>
					<!-- / popular Post -->

					<!--start post categories-->
					<div class="widget-main">
						<h4>Top Categories</h4>
						<div class="post-categories">
							<ul>
								<li><a href="#">Photography</a></li>
								<li><a href="#">WordPress</a></li>
								<li><a href="#">Web Design</a></li>
								<li><a href="#">Video</a></li>
								<li><a href="#">Photography</a></li>
							</ul>
						</div>
					</div>
					<!--/ post categories-->

					<!-- Text -->
					<div class="widget-main">
						<h4>Text Widget </h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi..
						</p>
					</div>
					<!-- /Text -->


					<!-- Tags -->
					<div class="widget-main">
						<h4>Tags</h4>
						<div class="tags">
							<a href="">Web Design</a>
							<a href="">Graphic Design</a>
							<a href="">PHP</a>
							<a href="">Jquery</a>
							<a href="">Wordpress</a>
							<a href="">Animation</a>
							<a href="">Audio</a>
							<a href="">Photo Gallery</a>
						</div>
					</div>
					<!-- /Tags -->
				</div>
				<!-- /right Sidebar -->
			</div> <!-- /row -->
		</div>
		<div class="container">
			<nav aria-label="...">
				<ul class="pagination">
					<?php if ($halaman_aktif == 1) : ?>
						<li class="page-item disabled">
							<a class="page-link">Sebelumnya</a>
						</li>
					<?php elseif ($halaman_aktif > 1) : ?>
						<li class="page-item">
							<a class="page-link" style='color:#9955ff' href="<?php echo base_url() ?>blog?halaman=<?php echo $halaman_aktif - 1 ?>">Sebelumnya</a>
						</li>
					<?php endif; ?>
					<?php for ($i = 1; $i <= $jumlah_halaman; $i++) : ?>
						<?php if ($i == $halaman_aktif) : ?>
							<li class="page-item active" aria-current="page">
								<span class="page-link" style='background-color:#9955ff;border-color:#9955ff'><?php echo $i ?></span>
							</li>
						<?php else : ?>
							<li class="page-item"><a class="page-link" style='color:#9955ff' href="<?php echo base_url() ?>blog?halaman=<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php endif; ?>
					<?php endfor; ?>
					<?php if ($halaman_aktif < $jumlah_halaman) : ?>
						<li class="page-item ">
							<a class="page-link" style='color:#9955ff' href="<?php echo base_url() ?>blog?halaman=<?php echo $halaman_aktif + 1 ?>">Selanjutnya</a>
						</li>
					<?php elseif ($halaman_aktif == $jumlah_halaman) : ?>
						<li class="page-item disabled">
							<a class="page-link">Selanjutnya</a>
						</li>
					<?php endif; ?>
				</ul>
			</nav>
		</div>
	</section>
	<!-- /blog -->


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
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/easing.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.easypiechart.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.appear.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom.js"></script>

</body>

</html>