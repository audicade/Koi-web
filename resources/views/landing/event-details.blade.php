@extends('layouts.landing',['title' => 'Detail Event'])
@section('content')
			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Content -->
                                @foreach ($data as $item)
								<div id="content" class="col-8 col-12-medium">

									<!-- Post -->
										<article class="box post">
											<header>
												<h2><strong>{{ $item->nama_event }}</strong></h2>
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
											<p>{{ $item->detail_event }}</p>
                                            <ul class="actions">
                                                <li><a href="{{ route('rekapitulasi', [$item->id]) }}" class="button icon solid fa-file">Rekap Data</a></li>
                                            </ul>
                                        </article>
								</div>
                                @endforeach

								@include('component.landing_sidebar',['data'=>$data_sidebar])

						</div>
					</div>
				</section>
@endsection
