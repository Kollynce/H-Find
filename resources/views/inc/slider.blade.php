<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 h-20" src="{{asset('images/banner1.jpg')}}" alt="First slide">
        
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 h-20" src="{{asset('images/banner2.jpg')}}" alt="Second slide">
            
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 h-20" src="{{asset('images/banner3.jpg')}}" alt="Third slide">
           
        </div>
        <div class="main-text hidden-xs">
                <div class="col-md-12 text-center">
                    <h1 class="uppercase d-none d-md-block">Get the best properties</h1>
                    <h3 class="pt-2 d-none d-md-block">Sign up, contact the agent and get yourself the best deals</h3>
                    <div class="pt-2 d-none d-md-block">
                    <a class="btn btn-primary1 btn-lg" href="{{route('property.posted')}}">View Properties</a>
                    </div>
                </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    <br>
    <div class="container">
            <h3 class="uppercase">Quick search property</h3>
            <br>
                <form action="{{route('property.minsearch')}}" method="GET" class="callus">
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="single-query form-group col-sm-5">
                                    <input class="keyword-input" name="location" placeholder="Keyword (e.g. 'Location')" type="text">
                        </div>
                        <div class="single-query form-group col-sm-5">
                            <input class="keyword-input" name="status" placeholder="Keyword (e.g. 'Rent / Sale')" type="text">
                        </div>
                        <div class="pb-3 form-group col-sm-2">
                            <button type="submit" class="btn-blue border_radius">Search</button>
                        </div>
                    </div>
                </form>
        </div>
</div>
