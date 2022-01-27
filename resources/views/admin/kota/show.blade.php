@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Detail </h3>                
                    @include('component.input',['input'=> Form::text('nama_kota',$kota->nama_kota,['class' => 'form-control']),'label'=> Form::label('nama_kota', 'nama_kota')])
               
            </div>
        </div>
    </div>
</div>
@endsection