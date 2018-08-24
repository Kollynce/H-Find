@extends('layouts.app')

@section('content')
    @include('inc.banner1')
    <section id="property listing1" class="padding bg_gallery listing1 padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="uppercase">PROPERTY LISTINGS</h2>
                    <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @if(count($submit) > 0)
                            @foreach($submit as $get)
                                <div class="-columns col-md-6">
                                    <div class="property_item heading_space">
                                        <div class="image">
                                            <a href="{{route('property.show', $get->id)}}"><img style="width: 350px;height: 200px;"
                                                             src="/image/{{ $get->property1 }}"
                                                             class="img-responsive"></a>
                                            <div class="price clearfix">
                                                <span class="tag pull-right">Ksh: {{$get->price}}/=</span>
                                            </div>
                                            <span class="tag_l">{{$get->status}}</span>
                                        </div>
                                        <div class="proerty_content">
                                            <div class="proerty_text">
                                                <h3 class="captlize"><a href="#">{{$get->title}}</a></h3>
                                                <p>{{$get->map}}</p>
                                            </div>
                                            <div class="property_meta transparent">
                                                <span><i class="icon-select-an-objecto-tool"></i>{{$get->size}}
                                                    sq ft</span>
                                                <span><i class="icon-bed"></i>{{$get->bedroom}} bedrooms</span>
                                                <span><i class="icon-safety-shower"></i>{{$get->bathroom}}
                                                    Bathroom</span>
                                            </div>
                                            <div class="property_meta transparent bottom30">
                                                <span><i class="icon-old-television"></i> {{$get->tv}} TV Lounge</span>
                                                <span><i class="icon-garage"></i>{{$get->garages}} Garage</span>
                                                <span></span>
                                            </div>
                                            <div class="favroute clearfix">
                                                <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp; Date
                                                    Posted {{$get->created_at->toFormattedDateString()}}</p>
                                                <ul class="pull-right">
                                                    <li><a href="#"><i class="icon-like"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
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
    </section>
@endsection