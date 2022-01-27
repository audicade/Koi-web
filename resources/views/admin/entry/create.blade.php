@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Create</h3>
                {!! Form::open(['route' => ['entry.store'], 'method' => 'post']) !!}
                    @include('component.input',['input'=> Form::text('owner',null,['class' => 'form-control']),'label'=> Form::label('owner', 'owner')])
                    @include('component.input',['input'=> Form::file('gambar_koi',null,['class' => 'form-control']),'label'=> Form::label('gambar_koi', 'gambar_koi')])
                    @include('component.input',['input'=> Form::select('id_varietas',$varietas,1,['class' => 'form-control']),'label'=> Form::label('id_varietas', 'id_varietas')])
                    @include('component.input',['input'=> Form::select('id_kategori',$kategori,1,['class' => 'form-control']),'label'=> Form::label('id_kategori', 'id_kategori')])
                    @include('component.input',['input'=> Form::select('id_event',$event,1,['class' => 'form-control']),'label'=> Form::label('id_event', 'id_event')])
                    @include('component.input',['input'=> Form::select('id_kota',$kota,1,['class' => 'form-control']),'label'=> Form::label('id_kota', 'id_kota')])
                    @include('component.input',['input'=> Form::select('id_handler',$handler,1,['class' => 'form-control']),'label'=> Form::label('id_handler', 'id_handler')])
                    @include('component.input',['input'=> Form::textarea('keterangan_tambahan',null,['class' => 'form-control']),'label'=> Form::label('keterangan_tambahan', 'keterangan_tambahan')])
                <button type="submit" onclick="return confirm('are you sure?')" class="btn btn-success mx-1 text-white" title="Create"><i class="fas fa-plus"></i> Create</button>
 {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
