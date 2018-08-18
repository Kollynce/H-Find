@extends('layouts.manage')

@section('content')
        <div class="row pt-3" id="style">
            <div class="col-md-9">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="col-md-3">
                <a href="{{route('users.create')}}" class="btn btn-primary1"> <i class="icon-user-plus mr-2"></i> Create new user</a>
            </div>
            <hr>
        </div>
        <div class="px-md-2">
            <div class="row pt-3" id="style">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->toFormattedDateString()}}</td>
                            <td><a class="btn btn-primary1" href="{{route('users.edit',$user->id)}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


@endsection