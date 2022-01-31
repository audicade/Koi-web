@extends('layouts.landing',['title' => 'Home'])
@section('content')
			{{-- @include('component.panel_info') --}}

			<!-- Banner -->
				<section id="banner">
					<div class="container">
						<p>Aplikasi Serbaguna <strong>Pecinta Koi</strong>.<br />
						<strong>Koi Show</strong>. Semua tentang Koi.</p>
					</div>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<!-- Content -->
								<div id="content" class="col-8 col-12-medium">
									<!-- Post -->
                                    @foreach ($data as $item)
										<article class="box post excerpt">
											<header>
												<h2><a href="{{ route('event-details', ['id' => $item]) }}"><strong>{{$item->nama_event}}</strong></a></h2>
												<span class="date">{{$item->tanggal_event}}</span>
											</header>
											<!-- Carousel -->
												<div id="demo{{$item->id}}" class="carousel slide image featured" data-bs-ride="carousel" data-bs-interval="false">

													<!-- Indicators/dots -->
													<div class="carousel-indicators">
														<button type="button" data-bs-target="#demo{{$item->id}}" data-bs-slide-to="0" class="active"></button>
														<button type="button" data-bs-target="#demo{{$item->id}}" data-bs-slide-to="1"></button>
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
													<button class="carousel-control-prev" type="button" data-bs-target="#{{$item->id}}" data-bs-slide="prev">
													<span class="carousel-control-prev-icon"></span>
													</button>
													<button class="carousel-control-next" type="button" data-bs-target="#{{$item->id}}" data-bs-slide="next">
													<span class="carousel-control-next-icon"></span>
													</button>
												</div>
											<h3>Deskripsi</h3>
											<p>
												Tanggal Main : 	{{ $item->tanggal_event }} <br>
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
												<li><a href="{{ route('event-details', ['id' => $item]) }}" class="button icon solid fa-file">Baca lebih lanjut...</a></li>
												<li><a href="#" class="button icon solid fa-whatsapp">Whatsapp</a><li>
											</ul>
										</article>
                                    @endforeach
									<!-- Post -->
										{{-- <article class="box post excerpt">
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
										</article> --}}
								</div>
								
								@include('component.landing_sidebar',['data'=>$data_sidebar])

						</div>
					</div>
				</section>
@endsection
