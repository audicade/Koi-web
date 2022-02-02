<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>
            @isset($title)
                {{ $title }} |
            @endisset
                {{ config('app.name') }}
        </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
								<li>
									<a class="icon solid fa-home" href="{{ route('index') }}"><span>Home</span></a>
								</li>
								<li>
									<a class="icon fa-chart-bar" href="{{ route('events-list') }}"><span>Events</span></a>
								</li>
								{{-- <li>
									<a class="icon solid fa-cog" href="{{ route('leftSidebar') }}"><span>About Us</span></a>
								</li> --}}
								<!-- <li><a class="icon solid fa-retweet" href="{{ route('rightSidebar') }}"><span>Judge List</span></a></li> -->
								<li>
									<a class="icon solid fa-sitemap" href="{{ route('login') }}"><span>Admin</span></a>
								</li>
							</ul>
						</nav>
					<!-- Nav End -->
				</div>
			</section>

			@yield('content')

			<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header>
						<h2>Questions or comments? <strong>Get in touch:</strong></h2>
					</header>
					<div class="">
						<div class="" style="text-align: center">
							<section>
								<div class="row" style="padding: 0px 250px;">
									<div class="col-4 col-12-small">
										<ul class="icons">
											<li class="icon brands fa-twitter">
												<a href="#">@untitled</a>
											</li>
											<li class="icon brands fa-instagram">
												<a href="#">instagram.com/untitled</a>
											</li>
										</ul>
									</div>
									<div class="col-4 col-12-small">
										<ul class="icons">
											<li class="icon solid fa-phone">
												(+62) 000-0000
											</li>
											<li class="icon solid fa-envelope">
												<a href="#">info@untitled.tld</a>
											</li>
										</ul>
									</div>
									<div class="col-4 col-12-small">
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
						<ul class="links" style="text-align: center">
							<li>&copy; koi-app team. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
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
