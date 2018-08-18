@extends('layouts.manage')

@section('content')
    <div class="" id="style">
        <div class="row">
            <div class="col-md-8">
                <h1 class="title">View Permission Details</h1>
            </div> <!-- end of column -->

            <div class="col-md-4 pt-2">
                <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-primary1"><i class="icons icon-edit mr-10"></i> Edit Permission</a>
            </div>
        </div>
        <hr class="mt-10">

        <div class="row">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                        <article>
                                <div class="content">
                                    <p>
                                        <strong>{{$permission->display_name}}</strong> <small>{{$permission->name}}</small>
                                        <br>
                                        {{$permission->description}}
                                    </p>
                                </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
