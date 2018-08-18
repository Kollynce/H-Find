@extends('layouts.manage')

@section('content')
    <div class="row pt-3" id="style">
        <div class="col-md-9">
            <h1 class="title">Create New Users</h1>
        </div>
        <hr>
    </div>
    <div id="style">
        <div class="container">
            {!! Form::open(['route' => 'users.store', 'files'=> true]) !!}
            <div class="row">
                <div class="col-md-12">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', '',['class' => 'single-query form-group bottom20 form-control','placeholder' => 'New User Name'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{Form::label('email', 'Email')}}
                    {{Form::text('email', '',['class' => 'single-query form-group bottom20 form-control','placeholder' => 'example@email.com'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{Form::label('user_type', 'User Type')}}
                    {{Form::text('user_type', '',['class' => 'single-query form-group bottom20 form-control','placeholder' => 'Give the user type'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{Form::label('password', 'Password')}}
                    {{ Form::password('password', ['class'=> 'single-query form-group bottom20 form-control', 'placeholder' => 'Password']) }}
                </div>
            </div>
            <div class="row">
                {{Form::submit('Create User',['class' => 'btn btn-primary1 ' ])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection