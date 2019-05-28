@extends('layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Create user</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/users')}}">Admin</a></li>
            <li class="breadcrumb-item active"><a href="{{url('admin/users/create')}}">Create user</a></li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
@endsection
@section('content')
    {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
            {{--{{ Form::hidden('type_id', '2') }}--}}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Role:') !!}
            {!! Form::select('user_type',[''=>'Choose option'] + $roles ,null,['class'=>'form-control']) !!}
        </div>
         <div class="form-group">
             {!! Form::label('file','Upload image:') !!}
             {!! Form::file('photo_id',['class'=>'form-control']) !!}
         </div>
        <div class="form-group">
            {!! Form::label('Password','Password:') !!}
            <div class="row">
                <div class="col-md-10">
                    {!!  Form::password('password', ['class' => 'form-control']) !!}
                </div>
                <div class="col-md-2">
                    <button class="btn-success btn form-control">Generate Password</button>
                </div>
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit('Create User',['class'=>'form-control btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    {{-- @include('includes.errors') --}}
@endsection