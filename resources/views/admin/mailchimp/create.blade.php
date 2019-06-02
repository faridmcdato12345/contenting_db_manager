@extends('layouts.master')
@section('content-header')
<div class="container-fluid admin-mailchimp-create">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Create mailchimp account</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/users')}}">admin</a></li>
            <li class="breadcrumb-item active"><a href="{{url('admin/mailchimp/')}}">mailchimp</a></li>
            <li class="breadcrumb-item active"><a href="{{url('admin/mailchimp/create')}}">create</a></li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
@endsection
@section('content')
@if(Session::has('created_mailchimp'))
<p class="bg-success" style="font-weight: bold;font-size: 16px;padding: 10px 10px;">{{session('created_mailchimp')}}</p>
@endif
    {!! Form::open(['method'=>'POST','action'=>'AdminMailChimpController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('client_id','Client:') !!}
            {!! Form::select('client_id',[''=>'Choose option'] + $roles ,null,['class'=>'form-control']) !!}
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