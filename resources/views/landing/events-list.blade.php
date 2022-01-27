@extends('layouts.landing',['title'=>'Event List'])
@section('content')
			<!-- Main -->
				<section id="main">
					<div class="container">
						<header style="text-align:center">
							<h2>Events <strong>"Koi Show"</strong> List</h2>
						</header>
						<section>
							<header>
								<h2><strong>Koi Show 2020</strong></h2>
							</header>
							<div class="row">
								<div class="col-6 col-12-medium">
									<article class="box post excerpt">
										<header>
											<h3><a href="#">Karawang <strong>Koi Show 2020</strong></a></h3>
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
												<a href="#"><span class="date carousel-caption">July 28 2021</span></a>
											</div>

											<!-- Left and right controls/icons -->
											<button class="carousel-control-prev" type="button" data-bs-target="#demo1" data-bs-slide="prev">
											<span class="carousel-control-prev-icon"></span>
											</button>
											<button class="carousel-control-next" type="button" data-bs-target="#demo1	" data-bs-slide="next">
											<span class="carousel-control-next-icon"></span>
											</button>
										</div>
									</article>
								</div>
								<div class="col-6 col-12-medium">
									<article class="box post excerpt">
										<header>
											<h3><a href="#">Karawang <strong>Koi Show 2020</strong></a></h3>
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
												<a href="#"><span class="date carousel-caption">July 28 2021</span></a>
											</div>

											<!-- Left and right controls/icons -->
											<button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
											<span class="carousel-control-prev-icon"></span>
											</button>
											<button class="carousel-control-next" type="button" data-bs-target="#demo2	" data-bs-slide="next">
											<span class="carousel-control-next-icon"></span>
											</button>
										</div>
									</article>
								</div>
							</div>
						</section>
						
					</div>
				</section>
@endsection
