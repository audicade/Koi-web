@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Detail </h3>                
                    @include('component.input',['input'=> Form::text('nama_varietas',$varietas->nama_varietas,['class' => 'form-control']),'label'=> Form::label('nama_varietas', 'nama_varietas')])
               
            </div>
        </div>
    </div>
</div>
@endsection