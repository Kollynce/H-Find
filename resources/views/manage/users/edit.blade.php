@extends('layouts.manage')

@section('content')
    <div class="row pt-3" id="style">
        <div class="col-md-9">
            <h1 class="title">Edit Users</h1>
        </div>
        <hr>
    </div>
    <div id="style">
        <div class="container">
            <form class=" " action="{{route('users.show', $user->id)}}" method="POST">
                {{method_field('PUT')}}
                {{csrf_field()}}
                <div class="row">
                    <label for="name" class="col-sm-4 col-md-4 col-form-label"> Name: </label>
                    <input type="text" class="form-control col-sm-10" name="name" value="{{$user->name}}" >
                </div>
                <div class="row">
                    <label for="email" class="col-sm-4 col-md-4 col-form-label"> Email: </label>
                    <input type="text" class="form-control col-sm-10" name="email" value="{{$user->email}}" >
                </div>
                <div class="row">
                    <label for="user_type" class="col-sm-4 col-md-4 col-form-label"> User Type: </label>
                    <input type="text" class="form-control col-sm-10" name="user_type" value="{{$user->user_type}}" >
                </div>
                <div class="row">
                    <label for="password" class="col-sm-4 col-md-4 col-form-label"> Password: </label>
                    <input type="password" class="form-control col-sm-10" name="password" >
                </div>
                <div class="row pt-3">
                    <button class="btn btn-primary1">Edit User</button>
                </div>
            </form>
        </div>
    </div>
@endsection