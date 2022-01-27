@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Create</h3>
                {!! Form::open(['route' => ['handler.store'], 'method' => 'post']) !!}
                    @include('component.input',['input'=> Form::text('nama_handler',null,['class' => 'form-control']),'label'=> Form::label('nama_handler', 'nama_handler')])
                    @include('component.input',['input'=> Form::text('username',null,['class' => 'form-control']),'label'=> Form::label('username', 'username')])
                    @include('component.input',['input'=> Form::password('password',null,['class' => 'form-control']),'label'=> Form::label('password', 'password')])
                <button type="submit" onclick="return confirm('are you sure?')" class="btn btn-success mx-1 text-white" title="Create"><i class="fas fa-plus"></i> Create</button>
 {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection