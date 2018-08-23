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
                                <td class="text-right">{{$users->instagram}}</td>
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

                {{------------------------form----------------------------}}

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
                {{------------------------form----------------------------}}

                <div class="col-sm-4 bottom40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="/uploads/avatar/{{$users->avatar}}" alt="Agents">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

@endsection