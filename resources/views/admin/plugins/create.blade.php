@extends('layouts.master')
@section('content-header')
<div class="container-fluid admin-plugin-create">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Create plugin account</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/users')}}">admin</a></li>
            <li class="breadcrumb-item active"><a href="{{url('admin/plugins/')}}">plugin</a></li>
            <li class="breadcrumb-item active"><a href="{{url('admin/plugins/create')}}">create</a></li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
@endsection
@section('content')
    {!! Form::open(['method'=>'POST','action'=>'AdminPluginController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('url','URL:') !!}
            {!! Form::text('url',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('username','Username:') !!}
            {!! Form::text('username',null,['class'=>'form-control']) !!}
            {{--{{ Form::hidden('type_id', '2') }}--}}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::text('password',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Cpanel Account',['class'=>'form-control btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    {{-- @include('includes.errors') --}}
@endsection