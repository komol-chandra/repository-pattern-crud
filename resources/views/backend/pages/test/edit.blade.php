
@extends('backend.layouts.app')
@section('content')
@section('title', '| Edit Department')
@section('header-title', 'Edit Department')
@section('breadcrumb', 'Edit Department')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="{{ url('/test') }}"> <i class="fa fa-list"></i>List</a>  
                </div>
            </div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::open(['url' => 'test/'.$test['id'].'','method'=>'put']) !!}
                    @include('backend.pages.test.form',$test)
                    {!! Form::hidden('id',$test['id']) !!}
                        <div class="col-sm-12 reset-button">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection