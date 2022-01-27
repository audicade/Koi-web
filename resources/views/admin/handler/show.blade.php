@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Detail </h3>                
                    @include('component.input',['input'=> Form::text('nama_handler',$handler->nama_handler,['class' => 'form-control']),'label'=> Form::label('nama_handler', 'nama_handler')])
                    @include('component.input',['input'=> Form::text('username',$handler->username,['class' => 'form-control']),'label'=> Form::label('username', 'username')])
                    @include('component.input',['input'=> Form::password('password',$handler->password,['class' => 'form-control']),'label'=> Form::label('password', 'password')])
               
            </div>
        </div>
    </div>
</div>
@endsection