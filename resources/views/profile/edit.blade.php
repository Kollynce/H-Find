@extends('layouts.app')

@section('content')
    @include('inc.banner')
    <div class="container">
        <div class="container-3 row col-sm-12">

            <div class="col-md-12">
                <h2 class="text-uppercase bottom30">my profile</h2>
                <form enctype="multipart/form-data" action="{{route('profile.update', $users->id)}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/uploads/avatar/{{ $users->avatar }}" class="img-responsive" alt="image"
                                 style="width: 200px; height: 200px;"><br><br>
                        </div>
                        <div class="col-md-8">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <label for="name" class="col-sm-4 col-md-4 col-form-label"> Name: </label>
                                <input type="text" class="form-control col-sm-10" name="name" value="{{$users->name}}">
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-4 col-md-4 col-form-label"> Email: </label>
                                <input type="email" class="form-control col-sm-10" name="email"
                                       value="{{$users->email}}">
                            </div>
                            <div class="row">
                                <label for="phone" class="col-sm-4 col-md-4 col-form-label"> Phone: </label>
                                <input type="text" class="form-control col-sm-10" name="phone"
                                       value="{{$users->phone}}">
                            </div>
                            <div class="row">
                                <label for="facebook" class="col-sm-4 col-md-4 col-form-label"> Facebook: </label>
                                <input type="text" class="form-control col-sm-10" name="facebook"
                                       value="{{$users->facebook}}">
                            </div>
                            <div class="row">
                                <label for="instagram" class="col-sm-4 col-md-4 col-form-label"> Instagram: </label>
                                <input type="text" class="form-control col-sm-10" name="instagram"
                                       value="{{$users->instagram}}">
                            </div>
                            <div class="row">
                                <label for="about" class="col-sm-4 col-md-4 col-form-label"> About: </label>
                                <textarea type="text" class="form-control col-sm-10"
                                          name="about">{{$users->about}}</textarea>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-4 col-md-4 col-form-label"> Password: </label>
                                <input type="password" class="form-control col-sm-10" name="password">
                            </div>
                            <button class="btn btn-primary1">Update Profile</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection