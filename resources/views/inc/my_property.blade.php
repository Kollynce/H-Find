<div class="container pb-3">
    <div class="list-t-border">
            @foreach($submit as $submits)
                <div class="row bg-hover">
                    <div class="col-md-2 col-sm-12 px-3 py-3">
                        <img class="img-responsive" style="width: 150px; height: 150px; border-radius: 20px;" src="/image/{{$submits->property}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="feature-p-text">
                            <h4>{{$submits->title}}</h4>
                            <p>{{$submits->map}}</p>
                            <span><b>Status:</b>  For {{$submits->status}}</span><br>
                            <div class="btn btn-primary1 small">
                                <a href="#">Ksh: {{$submits->price}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="select-pro-list">
                            <a href="#"><i class="icon-pen2"></i></a>
                            <a href="#"><i class="icon-cross"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
</div>