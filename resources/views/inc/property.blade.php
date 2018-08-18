<section id="listing1" class="listing1 padding_top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-9">
                        <h2 class="uppercase">PROPERTY LISTINGS</h2>
                        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        @if(count($submit) > 0)
        @foreach($submit as $get)
                <div class="-columns col-md-3">
                    <div class="property_item heading_space">
                        <div class="image">
                            <a href="#"><img style="width: 300px;height: 200px;" src="/image/{{ $get->property }}" class="img-responsive"></a>
                            <div class="price clearfix">
                                <span class="tag pull-right">{{$get->price}}</span>
                            </div>
                            <span class="tag_l">{{$get->status}}</span>
                        </div>
                        <div class="proerty_content">
                            <div class="proerty_text">
                                <h3 class="captlize"><a href="#">{{$get->title}}</a></h3>
                                <p>{{$get->map}}</p>
                            </div>
                            <div class="property_meta transparent">
                                <span><i class="icon-select-an-objecto-tool"></i>{{$get->size}} sq ft</span>
                                <span><i class="icon-bed"></i>{{$get->bedroom}} bedrooms</span>
                                <span><i class="icon-safety-shower"></i>{{$get->bathroom}} Bathroom</span>
                            </div>
                            <div class="property_meta transparent bottom30">
                                <span><i class="icon-old-television"></i> {{$get->tv}} TV Lounge</span>
                                <span><i class="icon-garage"></i>{{$get->garages}} Garage</span>
                                <span></span>
                            </div>
                            <div class="favroute clearfix">
                                <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp; Date Posted {{$get->created_at->toFormattedDateString()}}</p>
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
</section>