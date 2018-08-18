@extends('layouts.manage')

@section('content')
    <div class="row pt-3" id="style">
        <div class="col-md-9">
            <h1 class="title">Manage Posts</h1>
        </div>
    </div>
    <hr class="mt-10" >

    <div class="px-md-2">
        <div class="row pt-3" id="style">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">User</th>
                    <th scope="col">Post Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($submit as $get)
                    <tr>
                        <th scope="row">{{$get->id}}</th>
                        <td>{{$get->owner}}</td>
                        <td>{{$get->title}}</td>
                        <td>{{$get->created_at->toFormattedDateString()}}</td>
                        <td><a class="btn btn-primary1" href="#">Edit</a></td>
                        <td><a class="btn btn-danger" href="#">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection