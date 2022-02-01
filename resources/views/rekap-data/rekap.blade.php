@extends('layouts.rekap',['title' => 'Rekapitulasi'])
@section('content')
			<!-- Main -->
				<section id="main">
					<div class="container rekap">
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
                        <div class="content">
                            <header style="text-align: center">
                                <h2><strong>{{ $data_event[0]->nama_event }}</strong></h2>
                            </header>
                            {{-- content --}}
                            <div style="padding:8px 8px">
                                <button class="dropdown-btn" style="color:black">Championship
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                    @include('component.rekap_card',['rekap_event'=>$rekap_event])
                                </div>
                            </div>
                            {{-- content --}}
                            <div style="padding:8px 8px">
                                <button class="dropdown-btn" style="color:black">Championship
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                    @include('component.rekap_card',['rekap_event'=>$rekap_event])
                                </div>
                            </div>
                            
                        </div>
                        
					</div>
				</section>
@endsection
