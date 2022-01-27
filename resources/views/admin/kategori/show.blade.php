@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Detail </h3>                
                    @include('component.input',['input'=> Form::text('kategori_koi',$kategori->kategori_koi,['class' => 'form-control']),'label'=> Form::label('kategori_koi', 'kategori_koi')])
               
            </div>
        </div>
    </div>
</div>
@endsection