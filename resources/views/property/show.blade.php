@extends('layouts.app')

@section('content')
    <div class="container py-2">
        <div class="row col-md-12">
            <div class="col-md-8">
                <div class="row">
                    <h2 class="text-uppercase">{{$submit->title}}</h2>
                </div>
                <div class="row">
                    <p class="bottom30">{{$submit->map}}</p>
                </div>
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 h-25" src="/image/{{ $submit->property1 }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 h-25" src="/image/{{ $submit->property2 }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 h-25" src="/image/{{ $submit->property3 }}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 h-25" src="/image/{{ $submit->property4 }}" alt="Second slide">
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
                    </div>
                    <div class="pt-5">
                        <h2 class="text-uppercase">Property Description</h2>
                        <p class="bottom30">{{$submit->description}}</p>
                    </div>
                    <div class="row col-md-12">
                        <h2 class="text-uppercase bottom20">Quick Summary</h2>
                    </div>
                    <div class="row">
                        <div class="row col-md-12 property-d-table bottom40">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <table class="table table-striped table-responsive">
                                    <tbody>
                                    <tr>
                                        <td><b>Property Name</b></td>
                                        <td class="text-right">{{$submit->title}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Price</b></td>
                                        <td class="text-right">{{$submit->price}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Property Size</b></td>
                                        <td class="text-right">{{$submit->size}} ft2</td>
                                    </tr>
                                    <tr>
                                        <td><b>Bedrooms</b></td>
                                        <td class="text-right">{{$submit->bedroom}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Bathrooms</b></td>
                                        <td class="text-right">{{$submit->bathroom}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Available From</b></td>
                                        <td class="text-right">{{$submit->created_at->toFormattedDateString()}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <table class="table table-striped table-responsive">
                                    <tbody>
                                    <tr>
                                        <td><b>Status</b></td>
                                        <td class="text-right">{{$submit->status}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>TV Lounge</b></td>
                                        <td class="text-right">{{$submit->tv}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Garages</b></td>
                                        <td class="text-right">{{$submit->garages}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Swimming Pool</b></td>
                                        <td class="text-right">{{$submit->pool}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Posted By</b></td>
                                        <td class="text-right">{{$submit->user->name}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="text-uppercase bottom20">Features</h2>
                <div class="row bottom40">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="pro-list">
                            <li><a class="icons icon-arrow-down-right"></a> Air Conditioning {{$submit->conditioning}}</li>
                            <li><a class="icons icon-arrow-down-right"></a> Fire Place {{$submit->fire}}</li>
                            <li><a class="icons icon-arrow-down-right"></a> Cable TV {{$submit->cable}}</li>
                            <li><a class="icons icon-arrow-down-right"></a> Balcony {{$submit->balcony}}</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="pro-list">
                            <li><a class="icons icon-arrow-down-right"></a> Gas Heat {{$submit->gas}}</li>
                            <li><a class="icons icon-arrow-down-right"></a> Laundry Room {{$submit->laundry}}</li>
                            <li><a class="icons icon-arrow-down-right"></a> Back Yard {{$submit->yard}}</li>
                            <li><a class="icons icon-arrow-down-right"></a> Internet {{$submit->internet}}</li>
                        </ul>
                    </div>
                </div>

                <h2 class="text-uppercase bottom20">Video Presentation</h2>
                <div class="row bottom40">
                    <div class="col-md-12 padding-b-20">
                        <div class="pro-video">
                            <figure class="wpf-demo-gallery">
                                <video  class="video" controls>
                                    <source src="{{$submit->video}}" type="video/mp4">
                                    <source src="{{$submit->Video}}" type="video/ogg">
                                </video>
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 bottom40">
                        <div class="agent_wrap">
                            <div class="image">
                                <img src="/uploads/avatar/{{ $submit->user->avatar }}" alt="Agents">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 bottom40">
                        <div class="agent_wrap">
                            <h3>{{ $submit->user->name }}</h3>
                            <p class="bottom30">{{ $submit->user->about}}</p>
                            <table class="agent_contact table">
                                <tbody>
                                <tr class="bottom10">
                                    <td><strong>Phone:</strong></td>
                                    <td class="text-right">{{ $submit->user->phone}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email Address:</strong></td>
                                    <td class="text-right"><a>{{ $submit->user->email }}</a></td>
                                </tr>
                                <tr>
                                    <td><strong>Facebook:</strong></td>
                                    <td class="text-right"><a>{{ $submit->user->facebook }}</a></td>
                                </tr>
                                <tr>
                                    <td><strong>Instagram:</strong></td>
                                    <td class="text-right"><a>{{ $submit->user->instagram }}</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
                            <ul class="social_share">
                                <li><a href="#" class="facebook"><i class="icon-facebook-1"></i></a></li>
                                <li><a href="#" class="twitter"><i class="icon-twitter-1"></i></a></li>
                                <li><a href="#" class="google"><i class="icon-google4"></i></a></li>
                                <li><a href="#" class="linkden"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="vimo"><i class="icon-vimeo3"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <aside>
                    <div class="property-query-area clearfix">
                        <div class="col-md-12 pt-3">
                            <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
                        </div>
                        <form class="callus">
                            <div class="single-query form-group col-sm-12">
                                <input class="keyword-input" placeholder="Keyword (e.g. 'office')" type="text">
                            </div>
                            <div class="single-query form-group col-sm-12">
                                <div class="intro">
                                    <select>
                                        <option selected="" value="any">Location</option>
                                        <option>All areas</option>
                                        <option>Nairobi</option>
                                        <option>Kisumu</option>
                                        <option>Mombasa</option>
                                        <option>Nakuru</option>
                                        <option>Kisi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single-query form-group col-sm-12">
                                <div class="intro">
                                    <select>
                                        <option class="active">Property Type</option>
                                        <option>All areas</option>
                                        <option>Bayonne</option>
                                        <option>Greenville</option>
                                        <option>Manhattan</option>
                                        <option>Queens</option>
                                        <option>The Heights</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single-query form-group col-sm-12">
                                <div class="intro">
                                    <select>
                                        <option class="active">Property Status</option>
                                        <option>Both Rent and Sale</option>
                                        <option>Rent</option>
                                        <option>Sale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-2 col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-query form-group">
                                            <div class="intro">
                                                <select>
                                                    <option class="active">Min Beds</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-query form-group">
                                            <div class="intro">
                                                <select>
                                                    <option class="active">Min Baths</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-query form-group">
                                            <input class="keyword-input" placeholder="Min Area (sq ft)" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-query form-group">
                                            <input class="keyword-input" placeholder="Max Area (sq ft)" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 bottom10">
                                <div class="single-query-slider">
                                    <label><strong>Price Range:</strong></label>
                                    <input class="keyword-input" placeholder="Price" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 pb-3 form-group">
                                <button type="submit" class="btn-blue border_radius">Search</button>
                            </div>
                        </form>
                    </div>

                </aside>
            </div>
        </div>
    </div>
@endsection