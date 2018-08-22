@extends('layouts.app')

@section('content')
    @include('inc.parallax1')

    <section id="agents" class="padding">
        <div class="container">
            <div class="row">

                <div class="col-sm-4 bottom40">
                    <div class="agent_wrap">
                        <h3>{{$users->name}}</h3>
                        <p class="bottom30">{{$users->about}}</p>
                        <table class="agent_contact table">
                            <tbody>
                            <tr class="bottom10">
                                <td><strong>Phone:</strong></td>
                                <td class="text-right">{{$users->phone}}</td>
                            </tr>
                            <tr>
                                <td><strong>Email Address:</strong></td>
                                <td class="text-right">{{$users->email}}</td>
                            </tr>
                            <tr>
                                <td><strong>Facebook:</strong></td>
                                <td class="text-right">{{$users->facebook}}</td>
                            </tr>
                            <tr>
                                <td><strong>Instagram:</strong></td>
                                <td class="text-right">{{$users->facebook}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
                        <ul class="social_share">
                            <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i></a></li>
                            <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i></a></li>
                            <li><a href="javascript:void(0)" class="google"><i class="icon-google4"></i></a></li>
                            <li><a href="javascript:void(0)" class="linkden"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 bottom40">
                    <form class="callus">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Phone Number" type="tel">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email" type="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message"></textarea>
                        </div>
                        <input class="btn-blue uppercase border_radius" value="submit now" type="submit">
                    </form>
                </div>

                <div class="col-sm-4 bottom40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="/uploads/avatar/{{$users->avatar}}" alt="Agents">
                        </div>
                    </div>
                </div>


                <div class="col-md-12 bottom30 top20">
                    <h2 class="text-uppercase">Bohdan Properites</h2>
                    <p>We have Properties in these Areas View a list of Featured Properties.</p>
                </div>
                <div class="col-sm-6">
                    <div class="listing_full">
                        <div class="image">
                            <img alt="image" src="images/b-d-property.jpg">
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
            </div>
        </div>
    </section>

@endsection