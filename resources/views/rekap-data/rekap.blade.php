@extends('layouts.rekap',['title' => 'Rekapitulasi'])
@section('content')
			<!-- Main -->
				<section id="main">
					<div class="container rekap">
                        <header style="text-align: center">
                            <h2><strong>{{ $data_event[0]->nama_event }}</strong></h2>
                        </header>
						<div id="content">
                           <!-- Content -->
                           @include('component.rekap_table',['rekap_event'=>$rekap_event])
						</div>
                        <div class="content">
                            <!-- content -->
                            <div style="padding:8px 8px">
                                <button class="dropdown-btn" style="color:black">Championship
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                    @include('component.rekap_card',['rekap_event'=>$rekap_event])
                                </div>
                            </div>
                            <!-- content duplicate-->
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
