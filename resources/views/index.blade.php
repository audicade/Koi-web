<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>All in One Koi Webapp</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="{{ asset('/') }}css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="{{ route('index') }}">All in One Koi WebApp</a></h1>
							<p>Your All in One Koi App. <strong> Information Center </strong> of All Koi Related Events.</p>

						<!-- Nav -->
							<nav id="nav" style="overflow: hidden; text-align: center; background-color: #333; padding-top:15px; position: fixed; top: 0; z-index:999; width: 100%;">
								<ul>
									<li><a class="icon solid fa-home" href="{{ route('index') }}"><span>Home</span></a></li>
									<li>
										<a href="#" class="icon fa-chart-bar"><span>Events</span></a>
										<ul>
											<li><a href="#">2021</a></li>
											<li><a href="#">2020</a></li>
											<li><a href="#">2019</a></li>
											<li>
												<a href="#">2018</a>
												<ul>
													<li><a href="#">Contoh Event 1</a></li>
													<li><a href="#">Contoh Event 2</a></li>
													<li><a href="#">Contoh Event 3</a></li>
												</ul>
											</li>
											<li><a href="#">2017</a></li>
										</ul>
									</li>
									<li><a class="icon solid fa-cog" href="{{ route('leftSidebar') }}"><span>About Us</span></a></li>
									<!-- <li><a class="icon solid fa-retweet" href="{{ route('rightSidebar') }}"><span>Judge List</span></a></li> -->
									<li><a class="icon solid fa-sitemap" href="{{ route('index') }}"><span>Admin</span></a></li>
								</ul>
							</nav>
						<!-- Nav End -->
					</div>
				</section>
			<!-- Features -->
				<section id="features">
					<div class="container">
						<header>
							<h2>Panel Informasi <strong>Koi Show</strong></h2>
						</header>
						<div class="row aln-center">
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="{{ asset('/') }}images/pic01.jpg" alt="" /></a>
										<header>
											<a href="http://html5up.net"><h3>Rekap Data</h3></a>
										</header>
										<p>
											Data entry pada setiap <strong>Koi Show</strong> event dan championship. 
										</p>									
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="{{ asset('/') }}images/pic02.jpg" alt="" /></a>
										<header>
											<h3>Events List</h3>
										</header>
										<p>
											Lihat dan urutkan semua <strong>event dan championship</strong> yang tercatat dalam sistem.
										</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="{{ asset('/') }}images/pic03.jpg" alt="" /></a>
										<header>
											<h3>FAQ?</h3>
										</header>
										<p>
											<strong>Pertanyaan yagn sering ditanyakan</strong> tentang cara kerja web dan cara pendaftaran dalam event.
										</p>
									</section>

							</div>
							<div class="col-12">
								<ul class="actions">
									<li><a href="#" class="button icon solid fa-file">Tell Me More</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>

			<!-- Banner -->
				<section id="banner">
					<div class="container">
						<p>Aplikasi Serbaguna <strong>Pecinta Koi</strong>.<br />
						<strong>Koi Show</strong>. Semua tentang Koi.</p>
					</div>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container ">
						<div class="row">
							<!-- Content -->
								<div id="content" class="col-8 col-12-medium">
									<!-- Post -->
										<article class="box post excerpt">
											<header>
												<h2><a href="#">Karawang <strong>Koi Show 2020</strong></a></h2>
												<span class="date">July 28 2021</span>
											</header>
											<!-- Carousel -->
												<div id="demo1" class="carousel slide image featured" data-bs-ride="carousel" data-bs-interval="false">

													<!-- Indicators/dots -->
													<div class="carousel-indicators">
														<button type="button" data-bs-target="#demo1" data-bs-slide-to="0" class="active"></button>
														<button type="button" data-bs-target="#demo1" data-bs-slide-to="1"></button>
													</div>

													<!-- The slideshow/carousel -->
													<div class="carousel-inner">
														<div class="carousel-item active">
															<img src="{{ asset('/') }}images/Poster/karawang.jpeg" alt="karawang 1" class="d-block w-100">
														</div>
														<div class="carousel-item">
															<img src="{{ asset('/') }}images/Poster/karawang 2.jpg" alt="karawang 2" class="d-block w-100">
														</div>
													</div>
													<!-- Left and right controls/icons -->
													<button class="carousel-control-prev" type="button" data-bs-target="#demo1" data-bs-slide="prev">
													<span class="carousel-control-prev-icon"></span>
													</button>
													<button class="carousel-control-next" type="button" data-bs-target="#demo1" data-bs-slide="next">
													<span class="carousel-control-next-icon"></span>
													</button>
												</div>
											<h3>Deskripsi</h3>
											<p>
												Tanggal Main : 	11 - 13 Desember 2020 <br>
												Tempat : Mall Techno Mart <br>

												Pendaftaran dibuka mulai tanggal 21 September 2020 <br>
											</p>
											<p>
											Juri :
												<ol> 
													<li>Mohammad Faisal Riftiarrasyid</li>
													<li>Audi Pratama Putra</li>
												</ol>
											</p>
											<ul class="actions">
												<li><a href="#" class="button icon solid fa-file">Baca lebih lanjut...</a></li>
												<li><a href="#" class="button icon solid fa-whatsapp">Whatsapp</a><li>
											</ul>
										</article>

									<!-- Post -->
										<article class="box post excerpt">
											<header>
												<h2><a href="#">5th <strong>Cianjur Koi Show</strong></a></h2>
												<span class="date">July 28 2020</span>
											</header>
											<!-- Carousel -->
												<div id="demo2" class="carousel slide image featured" data-bs-ride="carousel" data-bs-interval="false">

													<!-- Indicators/dots -->
													<div class="carousel-indicators">
														<button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
														<button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
													</div>

													<!-- The slideshow/carousel -->
													<div class="carousel-inner">
														<div class="carousel-item active">
															<img src="{{ asset('/') }}images/Poster/cianjur.jpeg" alt="karawang 1" class="d-block w-100">
														</div>
														<div class="carousel-item">
															<img src="{{ asset('/') }}images/Poster/cianjur 2.jpeg" alt="karawang 2" class="d-block w-100">
														</div>
													</div>

													<!-- Left and right controls/icons -->
													<button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
													<span class="carousel-control-prev-icon"></span>
													</button>
													<button class="carousel-control-next" type="button" data-bs-target="#demo2	" data-bs-slide="next">
													<span class="carousel-control-next-icon"></span>
													</button>
												</div>
											<h3>Deskripsi</h3>
											<p>
												Tanggal Main : 	11 - 13 Desember 2020 <br>
												Tempat : Mall Techno Mart <br>

												Pendaftaran dibuka mulai tanggal 21 September 2020 <br>

											</p>
											<p>
												Juri :
													<ol> 
														<li>Mohammad Faisal Riftiarrasyid</li>
														<li>Audi Pratama Putra</li>
													</ol>
											</p>
											<ul class="actions">
												<li><a href="#" class="button icon solid fa-file">Continue Reading</a></li>
												<li><a href="#" class="button icon solid fa-whatsapp">Whatsapp</a><li>
											</ul>
										</article>
								</div>
							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">


									<!-- Highlights -->
										<section>
											<ul class="divided">
												<li>

													<!-- Highlight -->
														<article class="box highlight excerpt">
															<header>
																<h3><a href="#">Something of note</a></h3>
																<span class="date">July 24 2020</span>
															</header>
															<a href="#" class="image left" style="width:50%"><img src="{{ asset('/') }}images/poster/karawang.jpeg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button icon solid fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
												<li>
													<!-- Highlight -->
														<article class="box highlight excerpt">
															<header>
																<h3><a href="#">Something of less note</a></h3>
																<span class="date">July 24 2021</span>
															</header>
															<a href="#" class="image left" style="width:50%"><img src="{{ asset('/') }}images/poster/cianjur 2.jpeg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button icon solid fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
												<li>
													<!-- Highlight -->
														<article class="box highlight excerpt">
															<header>
																<h3><a href="#">Something of less note</a></h3>
																<span class="date">July 24 2021</span>
															</header>
															<a href="#" class="image left" style="width:50%"><img src="{{ asset('/') }}images/poster/cianjur 2.jpeg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button icon solid fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
												<li>
													<!-- Highlight -->
														<article class="box highlight excerpt">
															<header>
																<h3><a href="#">Something of less note</a></h3>
																<span class="date">July 24 2021</span>
															</header>
															<a href="#" class="image left" style="width:50%"><img src="{{ asset('/') }}images/poster/cianjur 2.jpeg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button icon solid fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
											</ul>
										</section>

								</div>

						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<header>
							<h2>Questions or comments? <strong>Get in touch:</strong></h2>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
							<section>
								<div class="row">
									<div class="col-6 col-12-small">
										<ul class="icons">
											<li class="icon solid fa-home">
												1234 Somewhere Road<br />
												Nashville, TN 00000<br />
												USA
											</li>
										</ul>
									</div>
									<div class="col-6 col-12-small">
										<ul class="icons">
											<li class="icon brands fa-twitter">
												<a href="#">@untitled</a>
											</li>
											<li class="icon brands fa-instagram">
												<a href="#">instagram.com/untitled</a>
											</li>
										</ul>
									</div>
								</div>
							</section>
							</div>
							<div class="col-6 col-12-medium">
							<section>
								<div class="row">
									<div class="col-6 col-12-small">
										<ul class="icons">
											<li class="icon solid fa-phone">
												(000) 000-0000
											</li>
											<li class="icon solid fa-envelope">
												<a href="#">info@untitled.tld</a>
											</li>
										</ul>
									</div>
									<div class="col-6 col-12-small">
										<ul class="icons">
											<li class="icon brands fa-dribbble">
												<a href="#">dribbble.com/untitled</a>
											</li>
											<li class="icon brands fa-facebook-f">
												<a href="#">facebook.com/untitled</a>
											</li>
										</ul>
									</div>
								</div>
							</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; koi-app team. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="{{ asset('/') }}js/jquery.min.js"></script>
			<script src="{{ asset('/') }}js/jquery.dropotron.min.js"></script>
			<script src="{{ asset('/') }}js/browser.min.js"></script>
			<script src="{{ asset('/') }}js/breakpoints.min.js"></script>
			<script src="{{ asset('/') }}js/util.js"></script>
			<script src="{{ asset('/') }}js/main.js"></script>
			<script src="{{ asset('/') }}js/nav.js"></script>

	</body>
</html>