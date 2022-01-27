<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Right Sidebar - Strongly Typed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="{{ asset('landing') }}/css/main.css" />
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

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

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Content -->
								<div id="content" class="col-8 col-12-medium">

									<!-- Post -->
										<article class="box post">
											<header>
												<h2>Behold! This is the <strong>right sidebar</strong> layout<br />
												with a sidebar on the right!</h2>
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
											<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit
											ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris
											sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet
											mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique.
											Curabitur leo nibh, rutrum eu malesuada in tristique</p>
											<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat
											Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula
											vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet
											magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in,
											tristique at erat. Curabitur leo nibh, rutrum eu malesuada in, tristique
											at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna
											tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat
											magna tempus</p>
											<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit
											ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris
											sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet
											mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique.
											Curabitur leo nibh, rutrum eu malesuada in tristique</p>
											<h3>Accumsan lorem ipsum veroeros</h3>
											<p>Consequat Phasellus laoreet massa id in, tristique at erat lorem
											ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet
											mollis tortor congue. Sed quis mauris sit amet magna.</p>
											<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit
											ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris
											sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet
											mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique.
											Curabitur leo nibh, rutrum eu malesuada in tristique</p>
											<h3>Ligula suspcipit fusce veroeros</h3>
											<p>Nullam dolore etiam sed massa id in, tristique at erat lorem
											ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet
											mollis tortor congue. Sed quis mauris sit amet magna.</p>
											<p>Sed massa id justo mattis pharetra. Fusce suscipit
											ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris
											sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet
											mollis tortor congue. Sed quis mauris sit amet magna accumsan.</p>
										</article>

								</div>

							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">

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
			<script src="{{ asset('landing') }}/js/jquery.min.js"></script>
			<script src="{{ asset('landing') }}/js/jquery.dropotron.min.js"></script>
			<script src="{{ asset('landing') }}/js/browser.min.js"></script>
			<script src="{{ asset('landing') }}/js/breakpoints.min.js"></script>
			<script src="{{ asset('landing') }}/js/util.js"></script>
			<script src="{{ asset('landing') }}/js/main.js"></script>

	</body>
</html>
