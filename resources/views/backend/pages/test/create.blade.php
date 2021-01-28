
@extends('backend.layouts.app')
@section('content')
@section('title', '| Create Test')
@section('header-title', 'Create Test')
@section('breadcrumb', 'Create Test')

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="{{ url('/test') }}"> <i class="fa fa-list"></i> List</a>  
                </div>
            </div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::open(['url' => '/test','method'=>'post']) !!}
                        @include('backend.pages.test.form')
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