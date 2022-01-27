@extends('layouts.admin')
@section('page','Event Management')
@section('breadcrumb')
    <li><a href="#" class="fw-normal">Event Management</a></li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Event</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-success">{{ $data->count() }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="white-box analytics-info">
                <h3 class="box-title">Last Created on</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-success">{{ $data->count()>0?date('d F Y', strtotime($data->sortByDesc('created_at')->first()->created_at)):'Empty' }}</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex justify-content-between mb-3">
                    <h3 class="box-title mb-0">List Event</h3>
                    <a href="{{ route('event.create') }}" class="box-title mb-0 text-white btn btn-success">Create Event</a>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap data-table table-bordered">
                        <thead>
                            <tr>
                                <th class="border">#</th>
                                <th class="border">Nama_event</th>
                                <th class="border">Url_poster</th>
                                <th class="border">Detail_event</th>
                                <th class="border">Id_kota</th>
                                <th class="border">Tanggal_event</th>
                                <th class="border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="txt-oflo">{{ $item->nama_event }}</td>
                                <td class="txt-oflo">{{ $item->url_poster }}</td>
                                <td class="txt-oflo">{{ $item->detail_event }}</td>
                                <td class="txt-oflo">{{ $item->id_kota }}</td>
                                <td class="txt-oflo">{{ $item->tanggal_event }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('event.edit',$item) }}" class="btn btn-primary mx-1" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ route('event.show',$item) }}" class="btn btn-warning mx-1" title="View"><i class="fas fa-eye"></i></a>
                                    {!! Form::open(['route' => ['event.destroy', $item], 'method' => 'delete']) !!}
                                        <button type="submit" onclick="return confirm('are you sure?')" class="btn btn-danger mx-1" title="Delete"><i class="fas fa-trash-alt text-white"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
