@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Create</h3>
                {!! Form::open(['route' => ['varietas.update', $varietas], 'method' => 'put']) !!}
                     @include('component.input',['input'=> Form::text('nama_varietas',$varietas->nama_varietas,['class' => 'form-control']),'label'=> Form::label('nama_varietas', 'nama_varietas')])
                <button type="submit" onclick="return confirm('are you sure?')" class="btn btn-primary mx-1 text-white" title="Update">Update</button>
 {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection