@extends('layouts.manage')

@section('content')
    <div id="style">
        <div class="row pl-3">
                <h1 class="title">Create New Permission</h1>
        </div>
            <hr class="mt-10">
                {!! Form::open(['route' => 'permissions.store', 'files'=> true]) !!}
                <div class="row">
                    <div class="col-md-11">
                        {{Form::label('display_name', 'Name (Display Name)')}}
                        {{Form::text('display_name', '',['class' => 'single-query form-group bottom20 form-control'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        {{Form::label('name', 'Slug')}}
                        {{Form::text('name', '',['class' => 'single-query form-group bottom20 form-control'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        {{Form::label('description', 'Description')}}
                        {{Form::text('description', '',['class' => 'single-query form-group bottom20 form-control','placeholder' => 'Describe what this permission does'])}}
                    </div>
                </div>

                <div class="row pl-3">
                    {{Form::submit('Create Permission',['class' => 'btn btn-primary1 ' ])}}
                </div>
                {!! Form::close() !!}

    </div> <!-- end of .flex-container -->
@endsection

