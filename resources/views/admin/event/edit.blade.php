@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Create</h3>
                {!! Form::open(['route' => ['event.update', $event], 'method' => 'put']) !!}
                     @include('component.input',['input'=> Form::text('nama_event',$event->nama_event,['class' => 'form-control']),'label'=> Form::label('nama_event', 'nama_event')])
                    @include('component.input',['input'=> Form::text('url_poster',$event->url_poster,['class' => 'form-control']),'label'=> Form::label('url_poster', 'url_poster')])
                    @include('component.input',['input'=> Form::textarea('detail_event',$event->detail_event,['class' => 'form-control']),'label'=> Form::label('detail_event', 'detail_event')])
                    @include('component.input',['input'=> Form::text('id_kota',$event->id_kota,['class' => 'form-control']),'label'=> Form::label('id_kota', 'id_kota')])
                    @include('component.input',['input'=> Form::date('tanggal_event',$event->tanggal_event,['class' => 'form-control']),'label'=> Form::label('tanggal_event', 'tanggal_event')])
                <button type="submit" onclick="return confirm('are you sure?')" class="btn btn-primary mx-1 text-white" title="Update">Update</button>
 {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection