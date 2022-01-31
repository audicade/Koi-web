@extends('layouts.rekap',['title' => 'Rekapitulasi'])
@section('content')
			<!-- Main -->
				<section id="main">
					<div class="container">
						<div id="content">
                            {{-- {{ $data }} --}}
                            {{-- {{ $rekap }} --}}
							<!-- Post -->
								{{-- <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">OWNER</th>
                                        <th scope="col">KOI</th>
                                        <th scope="col">KOI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>FISH ENTRY</td>
                                        </tr>
                                        <tr>
                                        <td>OWNER</td>
                                        <td>Thornton</td>
                                        </tr>
                                        <tr>
                                        <td>HANDLER</td>
                                        <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table> --}}
                            
						</div>
                        @include('component.rekap_card',['data_event'=>$data_event,'rekap_event'=>$rekap_event])
					</div>
				</section>
@endsection
