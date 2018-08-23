
<div class="row">
    @foreach($submits as $get)
    <div class="col-sm-6">
        <div class="listing_full">
            <div class="image">
                <img alt="image" src="/image/{{ $get->property }}">
                <span class="tag_l">Featured</span>
                <span class="tag_t">For Sale</span>
            </div>
            <div class="listing_full_bg">
                <div class="listing_inner_full">
                    <span><a href="#"><i class="icon-like"></i></a></span>
                    <a href="#.">
                        <h3>Park Avenue Apartment</h3>
                        <p>Towson London, MR 21501</p>
                    </a>
                    <div class="favroute clearfix">
                        <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-microphone"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>