@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Detail </h3>                
                    @include('component.input',['input'=> Form::text('owner',$entry->owner,['class' => 'form-control']),'label'=> Form::label('owner', 'owner')])
                    @include('component.input',['input'=> Form::file('gambar_koi',$entry->gambar_koi,['class' => 'form-control']),'label'=> Form::label('gambar_koi', 'gambar_koi')])
                    @include('component.input',['input'=> Form::select('id_varietas',$entry->id_varietas,['class' => 'form-control']),'label'=> Form::label('id_varietas', 'id_varietas')])
                    @include('component.input',['input'=> Form::select('id_kategori',$entry->id_kategori,['class' => 'form-control']),'label'=> Form::label('id_kategori', 'id_kategori')])
                    @include('component.input',['input'=> Form::select('id_event',$entry->id_event,['class' => 'form-control']),'label'=> Form::label('id_event', 'id_event')])
                    @include('component.input',['input'=> Form::select('id_kota',$entry->id_kota,['class' => 'form-control']),'label'=> Form::label('id_kota', 'id_kota')])
                    @include('component.input',['input'=> Form::select('id_handler',$entry->id_handler,['class' => 'form-control']),'label'=> Form::label('id_handler', 'id_handler')])
                    @include('component.input',['input'=> Form::textarea('keterangan_tambahan',$entry->keterangan_tambahan,['class' => 'form-control']),'label'=> Form::label('keterangan_tambahan', 'keterangan_tambahan')])
               
            </div>
        </div>
    </div>
</div>
@endsection