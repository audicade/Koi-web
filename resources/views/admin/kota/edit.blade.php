@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Create</h3>
                {!! Form::open(['route' => ['kota.update', $kota], 'method' => 'put']) !!}
                     @include('component.input',['input'=> Form::text('nama_kota',$kota->nama_kota,['class' => 'form-control']),'label'=> Form::label('nama_kota', 'nama_kota')])
                <button type="submit" onclick="return confirm('are you sure?')" class="btn btn-primary mx-1 text-white" title="Update">Update</button>
 {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection