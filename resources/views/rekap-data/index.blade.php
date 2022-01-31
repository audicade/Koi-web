@extends('layouts.rekap',['title' => 'Rekapitulasi'])
@section('content')
			<!-- Main -->
				<section id="main">
					<div class="container">
						<div id="content">

							<!-- Post -->
								<table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>FISH ENTRY</td>
                                        {{-- @foreach ($rekap as $item) --}}
                                        <td>{{ $rekap }}</td>
                                        {{-- @endforeach --}}
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
                                </table>

						</div>
					</div>
				</section>
@endsection
