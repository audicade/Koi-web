@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Create</h3>
                {!! Form::open(['route' => ['handler.update', $handler], 'method' => 'put']) !!}
                     @include('component.input',['input'=> Form::text('nama_handler',$handler->nama_handler,['class' => 'form-control']),'label'=> Form::label('nama_handler', 'nama_handler')])
                    @include('component.input',['input'=> Form::text('username',$handler->username,['class' => 'form-control']),'label'=> Form::label('username', 'username')])
                    @include('component.input',['input'=> Form::password('password',$handler->password,['class' => 'form-control']),'label'=> Form::label('password', 'password')])
                <button type="submit" onclick="return confirm('are you sure?')" class="btn btn-primary mx-1 text-white" title="Update">Update</button>
 {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection