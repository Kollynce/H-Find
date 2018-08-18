@extends('layouts.manage')

@section('content')
    <div class="row pt-3" id="style">
        <div class="col-md-9">
            <h1 class="title">View User Details</h1> <br>
            <h4 class="card-subtitle">View User Details</h4>
        </div>
        <div class="col-md-3">
            <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary1"> <i class="icon-user mr-2"></i> Edit user</a>
        </div>
    </div>

    <div class="row pt-3" id="style">
        <label class="label pl-3" for="name">Name</label>
        <pre class="pl-5">{{$user->name}}</pre>
    </div>
    <div class="row pt-3" id="style">
        <label class="label pl-3" for="email">Email</label>
        <pre class="pl-5">{{$user->email}}</pre>
    </div>
    <div class="row pt-3" id="style">
        <label class="label pl-3" for="user_type">User Type</label>
        <pre class="pl-5">{{$user->user_type}}</pre>
    </div>
@endsection