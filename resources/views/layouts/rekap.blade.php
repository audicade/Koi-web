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
		<style>
			.card {
			  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			  transition: 0.3s;
			  /* width: 40%; */
			  border-radius: 5px; /* 5px rounded corners */
			}
			
			.card:hover {
			  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
			}
			
			.container {
			  padding: 2px 10px;
			}
			.rekap .dropdown-btn {
				padding: 6px 8px 6px 16px;
				text-decoration: none;
				font-size: 20px;
				color: #000000 !important;
				/* display: block; */
				border: none;
				background: rgb(238, 110, 110);
				width: 90%;
				text-align: left;
				/* cursor: pointer; */
				outline: none;
			}
			/* Add an active class to the active dropdown button */
			.active {
				background-color: rgb(102, 45, 45);
				color: rgb(0, 0, 0);
			}
			/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
			.dropdown-container {
				display: none;
				background-color: #ffffff;
				padding-left: 8px;
			}

			/* Optional: Style the caret down icon */
			.fa-caret-down {
				float: right;
				padding-right: 8px;
			}
			</style>
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
										<a href="{{ route('events-list') }}" class="icon fa-chart-bar"><span>Events</span></a>
									</li>
									{{-- <li>
										<a class="icon solid fa-cog" href="{{ route('leftSidebar') }}"><span>About Us</span></a>
									</li> --}}
									<!-- <li>
										<a class="icon solid fa-retweet" href="{{ route('rightSidebar') }}"><span>Judge List</span></a>
									</li> -->
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
			<script>
				/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
				var dropdown = document.getElementsByClassName("dropdown-btn");
				var i;
				
				for (i = 0; i < dropdown.length; i++) {
				  dropdown[i].addEventListener("click", function() {
				  this.classList.toggle("active");
				  var dropdownContent = this.nextElementSibling;
				  if (dropdownContent.style.display === "block") {
				  dropdownContent.style.display = "none";
				  } else {
				  dropdownContent.style.display = "block";
				  }
				  });
				}
			</script>

	</body>
</html>
