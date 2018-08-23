<div class="container">
    <div class="container-3 row col-sm-12">
        <div class="col-md-4 ">
            <h2 class="text-uppercase bottom30">my profile</h2>
            <div class="agent-p-img">
                <img src="/uploads/avatar/{{ $user->avatar }}" class="img-responsive" alt="image" style="width: 200px; height: 200px;">
                <form enctype="multipart/form-data" action="/profile" method="POST"><br>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
                    <input type="submit" value="Upload Picture" class="btn btn-primary1">
                </form>

            </div>
        </div>

        <div class="col-md-8">
            <form action="">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-md-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <h4 class="form-control">{{$user->name}}</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-md-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <h4 class="form-control">{{$user->phone}}</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-md-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <h4 class="form-control">{{$user->email}}</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="about" class="col-sm-2 col-md-2 col-form-label">About</label>
                    <div class="col-sm-10">
                        <h4 class="form-control">{{$user->about}}</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="facebook" class="col-sm-2 col-md-2 col-form-label">Facebook</label>
                    <div class="col-sm-10">
                        <h4 class="form-control">{{$user->facebook}}</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instagram" class="col-sm-2 col-md-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                        <h4 class="form-control">{{$user->instagram}}</h4>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                    <a class="btn-blue border_radius" href="{{route('profile.edit', $user->id)}}">Edit</a>
                </div>
            </form>
        </div>


    </div>

    </div>
</div>




