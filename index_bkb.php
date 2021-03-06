
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Haryanto Duwi - Web Developer</title>
	<meta name="description" content="Bako - Personal Portfolio & Resume HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/profilduwi.jpg">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simplebar.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

</head>

<body>

<!-- preloader -->
<div id="preloader">
	<div class="outer">
		<div class="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
		</div>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<!-- mobile header -->
	<div class="mobile-header py-2 px-3 mt-4">
		<button class="menu-icon mr-2">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<a href="index.html" class="logo"><img src="images/duwicircle.jpg" alt="Bako Doe" /></a>
		<a href="index.html" class="site-title dot ml-2">Haryanto Duwi</a>
	</div>

	<!-- header -->
	<header class="left float-left shadow-dark" style="background: #5C72EA" id="header">
		<button type="button" class="close" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="header-inner d-flex align-items-start flex-column ">
			<a href="index.html"><img src="images/profilduwi.jpg" alt="haryanto duwi" style="border-radius:50%" width="90px" height="90px" /></a>
			<a href="index.html" class="site-title dot mt-3" style="font-size: 24px">Haryanto Duwi</a>
			<span class="site-slogan">Web Developer</span>
			
			<!-- navigation menu -->
			<nav>
				<ul class="vertical-menu scrollspy" style="margin-bottom: 20px">
					<li><a href="#home" onclick="aktif(this)" class="tombol active"><i class="icon-home"></i>Home</a></li>
					<li><a href="#works" onclick="aktif(this)" class="tombol"><i class="icon-grid"></i>Portofolio <span class="badge badge-danger">Hot</span></a></li>
					<li><a href="#about" onclick="aktif(this)" class="tombol"><i class="icon-user"></i>Tentang</a></li>
					<li><a href="#services" onclick="aktif(this)" class="tombol"><i class="icon-bulb"></i>Jasa</a></li>
					<li><a href="#price" onclick="aktif(this)" class="tombol"><i class="icon-basket"></i>Harga <span class="badge badge-danger">Promo</span></a></li>
					<li><a href="#resume" onclick="aktif(this)" class="tombol"><i class="icon-graduation"></i>Pengalaman</a></li>
					<li><a href="#contact" onclick="aktif(this)" class="tombol"><i class="icon-phone"></i>Kontak</a></li>
				</ul>
			</nav>
			
			<!-- footer -->
			<div class="footer mt-auto">

				<!-- social icons -->
				<ul class="social-icons list-inline">
					<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
				</ul>

				<!-- copyright -->
				<span class="copyright">© <?=date('Y')?> haryanto.duwi</span>
			</div>
		</div>

	</header>

	<!-- main content area -->
	<main class="content float-right">

		<!-- section hero -->
		<section class="hero background parallax shadow-dark d-flex align-items-center" id="home" data-image-src="images/background2.jpg">
			<div class="cta mx-auto mt-2">
				<h1 class="mt-0 mb-4">Haryanto Duwi<span class="dot"></span></h1>
				<p class="mb-4">Freelance php programer, berpengalaman lebih dari 3 tahun dengan framework codeigniter & laravel <span class="fa fa-fire"> <span class="fa fa-desktop"></span></p>
				<div class=" ">
					<a href="#portfolio" class="head-menu btn btn-default btn-lg mr-3"><i class="icon-grid"></i>Lihat Portfolio</a>
					<div class="spacer d-md-none d-lg-none d-sm-none" data-height="10"></div>
					<a href="#" class="btn btn-border-light btn-lg"><i class="icon-envelope"></i>Kerjasama</a>
				</div>	
			</div>
			<div class="overlay" style="background: #575A6C"></div>
		</section>

		<!-- section about -->
		<section id="about" class="shadow-blue white-bg padding">
			<h3 class="section-title">Tentang Saya</h3>
			<div class="spacer" data-height="80"></div>

			<div class="row">
				<div class="col-md-3">
					<img src="images/profilduwi.jpg" style="border-radius:50%" alt="about" />
				</div>
				<div class="col-md-9">
					<h2 class="mt-4 mt-md-0 mb-4">Halo,</h2>
					<p class="mb-0">Saya haryanto duwi, web developer dari yogyakarta. Saya berpengalaman di pembuatan website, aplikasi berbasis web dan kustomisasi, saya menggunakan framework codeigniter(HMVC), Laravel, Bootstrap dan Javascript</p>
					<div class="row my-4">
						<div class="col-md-6">
							<p class="mb-2">Nama: <span class="text-dark">Haryanto DUwi</span></p>
							<p class="mb-0">Kelahiran: <span class="text-dark">7 Maret, 1991</span></p>
						</div>
						<div class="col-md-6 mt-2 mt-md-0 mt-sm-2">
							<p class="mb-2">Alamat: <span class="text-dark">Sleman, Yogyakarta</span></p>
							<p class="mb-0">Email: <span class="text-dark">haryanto.duwi@gmail.com</span></p>
						</div>
					</div>
					<a href="#" class="btn btn-default mr-3"><i class="icon-cloud-download"></i>Download CV</a>
					<a href="#" class="btn btn-alt mt-2 mt-md-0 mt-xs-2"><i class="icon-envelope"></i>Pekerjakan Saya</a>
				</div>
			</div>
		</section>

		<!-- section skills -->
		<section id="skills" class="shadow-blue white-bg padding">
			<h3 class="section-title">Kemampuan</h3>
			<div class="spacer" data-height="80"></div>

			<p class="mb-0">Berikut adalah daftar kemampuan saya, yang telah saya pelajari beberapa tahun ini, saat ini saya sedang fokus terhadap javascirpt seperti vue dan angular.</p>

			<div class="row mt-5">

				<div class="col-md-6">
					<!-- skill item -->
					<div class="skill-item">
						<div class="skill-info clearfix">
							<h4 class="float-left mb-3 mt-0">PHP</h4>
							<span class="float-right">85%</span>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="85">
							</div>
						</div>
						<div class="spacer" data-height="50"></div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- skill item -->
					<div class="skill-item">
						<div class="skill-info clearfix">
							<h4 class="float-left mb-3 mt-0">Laravel</h4>
							<span class="float-right">70%</span>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="70">
							</div>
						</div>
						<div class="spacer" data-height="50"></div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- skill item -->
					<div class="skill-item">
						<div class="skill-info clearfix">
							<h4 class="float-left mb-3 mt-0">Javascript</h4>
							<span class="float-right">60%</span>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="60">
							</div>
						</div>
						<div class="spacer d-md-none d-lg-none" data-height="50"></div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- skill item -->
					<div class="skill-item">
						<div class="skill-info clearfix">
							<h4 class="float-left mb-3 mt-0">Codeigniter</h4>
							<span class="float-right">90%</span>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="90">
							</div>
						</div>
					</div>
				</div>

			
			</div>
		</section>

		<!-- section facts -->
		<section id="facts" class="shadow-dark color-white background parallax padding-50" data-image-src="images/background-1.jpg">

			<div class="row relative z-1">
				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item text-center">
						<i class="icon-like icon-circle"></i>
						<h2 class="count">60</h2>
						<span>Projek Selesai</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item text-center">
						<i class="icon-cup icon-circle"></i>
						<h2 class="count">150</h2>
						<span>Cangkir Kopi</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item text-center">
						<i class="icon-emotsmile icon-circle"></i>
						<h2 class="count">50</h2>
						<span>Pelanggan Senang</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item text-center">
						<i class="icon-trophy icon-circle"></i>
						<h2 class="count">29</h2>
						<span>Hadiah</span>
					</div>
				</div>
			</div>
			
			<div class="overlay"></div>

		</section>

		<!-- section services -->
		<section id="services" class="shadow-blue white-bg padding">
			<h3 class="section-title">Jasa</h3>
			<div class="spacer" data-height="80"></div>

			<div class="row">

				<div class="col-md-4 col-sm-6">
					<!-- service item -->
					<div class="service-item text-center">
						<i class="icon-globe icon-simple"></i>
						<h4 class="my-3">Perancangan</h4>
						<p class="mb-0">Perancangan kebutuhan, database dan implementasi sistem </p>
					</div>
					<div class="spacer" data-height="20"></div>
				</div>

				<div class="col-md-4 col-sm-6">
					<!-- service item -->
					<div class="service-item text-center">
						<i class="icon-chemistry icon-simple"></i>
						<h4 class="my-3">Desain</h4>
						<p class="mb-0">Desain antarmuka aplikasi, layout dan pemilihan warna</p>
					</div>
					<div class="spacer" data-height="20"></div>
				</div>

				<div class="col-md-4 col-sm-6">
					<!-- service item -->
					<div class="service-item text-center">
						<i class="icon-directions icon-simple"></i>
						<h4 class="my-3">Pengkodean</h4>
						<p class="mb-0">Pengkodean hasil rancangan dan desain ke dalam bentuk prototype aplikasi</p>
					</div>
					<div class="spacer" data-height="20"></div>
				</div>

				<div class="col-md-4 col-sm-6">
					<!-- service item -->
					<div class="service-item text-center">
						<i class="icon-rocket icon-simple"></i>
						<h4 class="my-3">Debugging</h4>
						<p class="mb-0">Mencari kesalahan/error sistem dan memperbaikkinya</p>
					</div>
					<div class="spacer d-md-none d-lg-none" data-height="20"></div>
				</div>

				<div class="col-md-4 col-sm-6">
					<!-- service item -->
					<div class="service-item text-center">
						<i class="icon-note icon-simple"></i>
						<h4 class="my-3">Custom</h4>
						<p class="mb-0">Melakukan upgrade sistem/aplikasi yang sudah berjalan disisi client</p>
					</div>
					<div class="spacer d-md-none d-lg-none" data-height="20"></div>
				</div>

				<div class="col-md-4 col-sm-6">
					<!-- service item -->
					<div class="service-item text-center">
						<i class="icon-bubbles icon-simple"></i>
						<h4 class="my-3">Perawatan</h4>
						<p class="mb-0">Perawatan Aplikasi Agar Selalu Berjalan Sebagaimana Mestinya</p>
					</div>
				</div>

			</div>
		</section>

		<!-- section experience -->
		<section id="resume" class="shadow-blue white-bg padding">
			<h3 class="section-title">Pengalaman</h3>
			<div class="spacer" data-height="80"></div>

			<!-- timeline -->
			<div class="timeline">			
				<div class="entry">
					<div class="title">
						<span>2019 - Sekarang</span>
					</div>
					<div class="body">
						<h4 class="mt-0">IT Support<br><small class="text-muted">Rumah Sakit UII</small></h4>
						<p>Membantu mengembangkan aplikasi pendukung Sistem Informasi Manajemen Rumah Sakit</p>
					</div>
				</div>
				<div class="entry">
					<div class="title">
						<span>2018 - Sekarang</span>
					</div>
					<div class="body">
						<h4 class="mt-0">Freelance Programer <span class="badge badge-danger">Hot</span></h4>
						<p>Membantu mengembangkan aplikasi berbasis web sesuai kebutuhan client, dari tahap perencanaan hingga implementasi dan perawatan</p>
					</div>
				</div>					
				<div class="entry">
					<div class="title">
						<span>2015-2018</span>
					</div>
					<div class="body">
						<h4 class="mt-0">Full Stack Programer<br><small class="text-muted">IST AKPRIND</small></h4>
						<p>Sebagai Full Stack Programer di Institut Sains Teknologi AKPRIND Yogyakarta, Mengembangkan Sistem Informasi Akademik dan Aplikasi pendukung lainnya</p>
					</div>
				</div>
				<div class="entry">
					<div class="title">
						<span>2017</span>
					</div>
					<div class="body">
						<h4 class="mt-0">Sertifikasi Profesi<br><small class="text-muted">Badan Nasional Sertifikasi Profesi</small></h4>
						<p>Mengikuti ujian sertifikasi Profesi Programer Web oleh BNSP</p>
					</div>
				</div>				
				<div class="entry">
					<div class="title">
						<span>2014</span>
					</div>
					<div class="body">
						<h4 class="mt-0">Sarjana Komputer<br><small class="text-muted">STMIK AMIKOM</small></h4>
						<p>Lulus kuliah Strata 1 (S1) jurusan Teknik Informatika dari STMIK AMIKOM Yogyakarta</p>
					</div>
				</div>
				<span class="timeline-line"></span>
			</div>
		</section>

		<!-- section works -->
		<section id="works" class="shadow-blue white-bg padding">
			<h3 class="section-title">Portfolio</h3>
			<div class="spacer" data-height="80"></div>

			<!-- portfolio filter (desktop) -->
			<ul class="portfolio-filter list-inline">
				<li class="current list-inline-item" data-filter="*">All Projects</li>
				<li class="list-inline-item" data-filter=".freedownload">Free Download <span class="badge badge-danger">Baru</span></li>
				<li class="list-inline-item" data-filter=".premium">Premium</li>
				<li class="list-inline-item" data-filter=".frontend">Frontend</li>
				<li class="list-inline-item" data-filter=".backend">Backend</li>
			</ul>

			<!-- portfolio filter (mobile) -->
			<div class="pf-filter-wrapper mb-4">
				<select class="portfolio-filter-mobile">
					<option value="*">Everything</option>
					<option value=".freedownload">Free Download</option>
					<option value=".premium">Premium</option>
					<option value=".frontend">Frontend</option>
					<option value=".backend">Backend</option>
				</select>
			</div>

			<!-- portolio wrapper -->
			<div class="row portfolio-wrapper">
				
				<!-- portfolio item -->
				<div class="col-md-4 col-sm-6 grid-item backend premium">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">Backend Admin</h4>
								<span class="term">Backend</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portofolio/appstackipad.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>

				<!-- portfolio item -->
				<div class="col-md-4 col-sm-6 grid-item freedownload">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">Manajemen Proyek</h4>
								<span class="term">Freedownload</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portofolio/manajemenproyek.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>

				<!-- portfolio item -->
				<div class="col-md-4 col-sm-6 grid-item backend premium">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">ERP Sistem</h4>
								<span class="term">Backend</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portofolio/erpdashboard.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>

				<!-- portfolio item -->
				<div class="col-md-4 col-sm-6 grid-item premium">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">Portal Wedding</h4>
								<span class="term">Dashbboard Admin</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portofolio/portalweddingjogja.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>

				<!-- portfolio item -->
				<div class="col-md-4 col-sm-6 grid-item premium">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">Pemkab Sleman</h4>
								<span class="term">Backend</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portofolio/rtlhipad.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>
				<!-- portfolio item -->
				<div class="col-md-4 col-sm-6 grid-item frontend freedownload">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">Pendaftaran Wisuda</h4>
								<span class="term">Frontend, Codeigniter</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portofolio/pendaftaranwisuda.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>

				<!-- portfolio item -->
				<div class="col-md-4 col-sm-6 grid-item premium backend">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">Manajemen Pekerjaan</h4>
								<span class="term">Codeigniter, Backend</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portofolio/manajemenproyekdashboard.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>

				<!-- portfolio item -->
				<div class="col-md-4 col-sm-6 grid-item backend premium">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">Dashboard Admin</h4>
								<span class="term">Backend Dashboard</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portofolio/appstackmac.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>				

				<!-- portfolio item -->
				<div class="col-md-4 col-sm-6 grid-item premium">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">CRM</h4>
								<span class="term">Backend Dashboard</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portofolio/admindek.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>	

				<!-- portfolio item -->
				<div class="col-md-4 col-sm-6 grid-item premium">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">Gis Masjid</h4>
								<span class="term">Frontend</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portofolio/gismasjid.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>	
				<!-- portfolio item -->
				<div class="col-md-4 col-sm-6 grid-item premium">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">CRM</h4>
								<span class="term">Backend</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portofolio/extemeadmin.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>									
			</div>
			
			<!-- more button -->
			<div class="load-more text-center mt-4">
				<a href="javascript:" class="btn btn-default"><i class="fas fa-circle-notch"></i> Load more</a>
				<!-- numbered pagination (hidden for infinite scroll) -->
				<ul class="portfolio-pagination list-inline d-none">
					<li class="list-inline-item">1</li>
					<li class="list-inline-item"><a href="works-2.html">2</a></li>
				</ul>
			</div>
		</section>

		<!-- section pricing table -->
		<section id="price" class="shadow-blue white-bg padding">
			<h3 class="section-title">Harga</h3>
			<div class="spacer" data-height="97"></div>

			<div class="row">
				
				<div class="col-md-4 pr-md-0 mt-3">
					<!-- price item -->
					<div class="price-item text-center">
						<i class="price-icon icon-energy"></i>
						<span class="plan">Basic</span>
						<h3 class="price"><em>Rp</em>1.500.000</h3>
						<div class="price-content">
							<ul>
								<li>Analisis Kebutuhan</li>
								<li>Desain Database</li>
								<li>Prototype</li>
								<li><b>Prioritas Rendah</b></li>
								<li>Revisi 1 Kali</li>
								<li>Gratis Update 3 Kali</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default">Pilih</a>
					</div>
				</div>

				<div class="col-md-4 px-md-0 my-5 my-md-0">
					<!-- price item -->
					<div class="price-item text-center recommended">
						<i class="price-icon icon-fire"></i>
						<span class="plan">Professional</span>
						<h3 class="price"><em>Rp</em>3.000.000</h3>
						<div class="price-content">
							<ul>
								<li>Analisis Kebutuhan</li>
								<li>Desain Database</li>
								<li>Prototype</li>
								<li>Custom Aplikasi <span class="badge badge-danger">Hot</span></li>
								<li><b>Prioritas Sedang</b></li>
								<li>Revisi 3 Kali</li>
								<li>Gratis Update 6 Kali</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default">Pilih</a>
					</div>
				</div>

				<div class="col-md-4 pl-md-0 mt-0 mt-md-3">
					<!-- price item -->
					<div class="price-item text-center">
						<i class="price-icon icon-rocket"></i>
						<span class="plan">Premium</span>
						<h3 class="price"><em>Rp</em>5.000.000</h3>
						<div class="price-content">
							<ul>
								<li>Analisis Kebutuhan</li>
								<li>Desain Database</li>
								<li>Prototype</li>
								<li>Custom Aplikasi <span class="badge badge-danger">Hot</span></li>
								<li><b>Prioritas Utama</b></li>
								<li>Revisi 6 Kali</li>
								<li>Gratis Update 12 Kali</li>
							</ul>
						</div>
						<a href="#" class="btn btn-default">Pilih</a>
					</div>
				</div>

			</div>
		</section>

		<!-- section testimonials -->
		<section id="testimonials" class="shadow-blue white-bg padding">
			<h3 class="section-title">Testimoni</h3>
			<div class="spacer" data-height="97"></div>

			<div class="row testimonials-wrapper">
				
				<div class="col-md-6">
					<!-- testimonial item -->
					<div class="testimonial-item">
						<span class="symbol"><i class="fas fa-quote-left"></i></span>
						<p>I enjoy working with the theme and learn so much. You guys make the process fun and interesting. Good luck!</p>
						<div class="testimonial-details">
							<div class="thumb">
								<img src="images/testimoni.png" alt="customer-name" />
							</div>
							<div class="info">
								<h4>Helen Doe</h4>
								<span>Themeforest customer</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- testimonial item -->
					<div class="testimonial-item">
						<span class="symbol"><i class="fas fa-quote-left"></i></span>
						<p>I enjoy working with the theme and learn so much. You guys make the process fun and interesting. Good luck!</p>
						<div class="testimonial-details">
							<div class="thumb">
								<img src="images/testimoni.png" alt="customer-name" />
							</div>
							<div class="info">
								<h4>Jane Doe</h4>
								<span>Themeforest customer</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<!-- testimonial item -->
					<div class="testimonial-item">
						<span class="symbol"><i class="fas fa-quote-left"></i></span>
						<p>I enjoy working with the theme and learn so much. You guys make the process fun and interesting. Good luck!</p>
						<div class="testimonial-details">
							<div class="thumb">
								<img src="images/testimoni.png" alt="customer-name" />
							</div>
							<div class="info">
								<h4>Helen Doe</h4>
								<span>Themeforest customer</span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- section clients -->
		<section id="clients" class="shadow-dark background-blue color-white padding-50">

			<!-- hidden heading for validation -->
			<h2 class="d-none">Clients</h2>

			<!-- clients wrapper -->
			<div class="clients-wrapper row">
				
				<div class="col-md-3">
					<!-- client item -->
					<div class="client-item">
						<div class="inner">
							<img src="images/wordpress.png" alt="client-name" />
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<!-- client item -->
					<div class="client-item">
						<div class="inner">
							<img src="images/jquery.png" alt="client-name" />
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<!-- client item -->
					<div class="client-item">
						<div class="inner">
							<img src="images/evanto.png" alt="client-name" />
						</div>
					</div>
				</div>
				
				<div class="col-md-3">
					<!-- client item -->
					<div class="client-item">
						<div class="inner">
							<img src="images/evantotuts.png" alt="client-name" />
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<!-- client item -->
					<div class="client-item">
						<div class="inner">
							<img src="https://via.placeholder.com/143x20" alt="client-name" />
						</div>
					</div>
				</div>

			</div>

		</section>

		<!-- section blog -->
		<section id="blog" class="shadow-blue white-bg padding">
			<h3 class="section-title">Recent posts</h3>
			<div class="spacer" data-height="80"></div>

			<div class="row">
				
				<div class="col-md-4">
					<!-- blog item -->
					<div class="blog-item">
						<div class="thumb">
							<a href="#">
								<span class="category">Thoughts</span>
							</a>
							<a href="#">
								<img src="images/post.jpg" alt="blog-title" />
							</a>
						</div>
						<h4 class="mt-4 mb-0"><a href="#">The Truth About Design In 3 Minutes</a></h4>
						<ul class="list-inline meta mb-0 mt-3">
							<li class="list-inline-item">13 March, 2019</li>
							<li class="list-inline-item">Bako Doe</li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<!-- blog item -->
					<div class="blog-item">
						<div class="thumb">
							<a href="#">
								<span class="category">Blog</span>
							</a>
							<a href="#">
								<img src="images/post.jpg" alt="blog-title" />
							</a>
						</div>
						<h4 class="mt-4 mb-0"><a href="#">The Ugly Truth About Design</a></h4>
						<ul class="list-inline meta mb-0 mt-3">
							<li class="list-inline-item">13 March, 2019</li>
							<li class="list-inline-item">Bako Doe</li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<!-- blog item -->
					<div class="blog-item">
						<div class="thumb">
							<a href="#">
								<span class="category">Tech</span>
							</a>
							<a href="#">
								<img src="images/post.jpg" alt="blog-title" />
							</a>
						</div>
						<h4 class="mt-4 mb-0"><a href="#">How To Become Better With UI Design</a></h4>
						<ul class="list-inline meta mb-0 mt-3">
							<li class="list-inline-item">13 March, 2019</li>
							<li class="list-inline-item">Bako Doe</li>
						</ul>
					</div>
				</div>

			</div>

		</section>

		<!-- section contact -->
		<section id="contact" class="shadow-blue white-bg padding">
			<h3 class="section-title">Hubungi Saya</h3>
			<div class="spacer" data-height="80"></div>

			<div class="row">
				
				<div class="col-md-4 mb-4 mb-md-0">
					<!-- contact info -->
					<div class="contact-info mb-5">
						<i class="icon-phone"></i>
						<div class="details">
							<h5>Handphone/WA</h5>
							<span>085725818424</span>
						</div>
					</div>
					<div class="contact-info mb-5">
						<i class="icon-envelope"></i>
						<div class="details">
							<h5>Email</h5>
							<span>haryanto.duwi@gmail.com</span>
						</div>
					</div>
					<div class="contact-info">
						<i class="icon-location-pin"></i>
						<div class="details">
							<h5>Alamat</h5>
							<span>Sleman, Yogyakarta</span>
						</div>
					</div>
				</div>

				<div class="col-md-8">
					<!-- Contact Form -->
					<form id="contact-form" class="contact-form" method="post" action="form/contact.php">
						
						<div class="messages"></div>
						
						<div class="row">
							<div class="column col-md-6">
								<!-- Name input -->
								<div class="form-group">
									<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Your name" required="required" data-error="Name is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							<div class="column col-md-6">
								<!-- Email input -->
								<div class="form-group">
									<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email address" required="required" data-error="Email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="column col-md-12">
								<!-- Email input -->
								<div class="form-group">
									<input type="text" class="form-control" id="InputSubject" name="InputSubject" placeholder="Subject" required="required" data-error="Subject is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
					
							<div class="column col-md-12">
								<!-- Message textarea -->
								<div class="form-group">
									<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Message" required="required" data-error="Message is required."></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default"><i class="icon-paper-plane"></i>Kirim Pesan</button><!-- Send Button -->

					</form>
					<!-- Contact Form end -->
				</div>

			</div>

		</section>
		
	</main>

</div>

<!-- Go to top button -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- SCRIPTS -->
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/infinite-scroll.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/validator.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<script type="text/javascript">
	aktif=function(btn){
		$('.tombol').removeClass('active');
		$(btn).addClass('active');
	}
</script>