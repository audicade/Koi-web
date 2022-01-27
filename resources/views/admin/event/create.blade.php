@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Create</h3>
                {!! Form::open(['route' => ['event.store'], 'method' => 'post']) !!}
                    @include('component.input',['input'=> Form::text('nama_event',null,['class' => 'form-control']),'label'=> Form::label('nama_event', 'nama_event')])
                    @include('component.input',['input'=> Form::text('url_poster',null,['class' => 'form-control']),'label'=> Form::label('url_poster', 'url_poster')])
                    @include('component.input',['input'=> Form::textarea('detail_event',null,['class' => 'form-control']),'label'=> Form::label('detail_event', 'detail_event')])
                     @include('component.input',['input'=> Form::select('id_kota',$kota,1,['class' => 'form-control']),'label'=> Form::label('id_kota', 'id_kota')])
                    @include('component.input',['input'=> Form::date('tanggal_event',null,['class' => 'form-control']),'label'=> Form::label('tanggal_event', 'tanggal_event')])
                <button type="submit" onclick="return confirm('are you sure?')" class="btn btn-success mx-1 text-white" title="Create"><i class="fas fa-plus"></i> Create</button>
 {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
