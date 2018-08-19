<div class="container">
    <div class="container-3 row col-sm-12">
        <div class="col-md-4 ">
            <h2 class="text-uppercase bottom30">my profile</h2>
            <div class="agent-p-img">
                <img src="/uploads/avatar/{{ $user->avatar }}" class="img-responsive" alt="image" style="width: 200px; height: 200px;">
                <form enctype="multipart/form-data" action="/profile" method="POST"><br>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
                    <input type="submit" class="btn btn-primary1">
                </form>

            </div>
        </div>

        <div class="col-md-8">
            <form action="">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-md-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-md-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-md-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="email" placeholder="example@mail.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="about" class="col-sm-2 col-md-2 col-form-label">About</label>
                    <div class="col-sm-10">
                    <textarea type="text" name="about" class="form-control" id="about" placeholder="Write something about you"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="facebook" class="col-sm-2 col-md-2 col-form-label">Facebook</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="facebook" placeholder="Http//facebook.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instagram" class="col-sm-2 col-md-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="instagram" placeholder="Http//instagram.com">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                    <a class="btn-blue border_radius" href="#">Save Changes</a>
                </div>
            </form>
        </div>

        <div class="col-md-12">
            <form action="">
                <h3>Change Your Password</h3>

                <div class="form-group">
                    <label for="current">Current Password</label>
                    <input type="password" class="form-control" id="current" placeholder="Current Password">
                </div>
                <div class="form-group">
                    <label for="new">New Password</label>
                    <input type="password" class="form-control" id="new" placeholder="New Password">
                </div>
                <div class="form-group">
                    <label for="confirm">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn btn-blue">Update</button>
            </form>
        </div>

    </div>

    </div>
</div>




