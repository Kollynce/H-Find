@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row pt-4">
            @if(count($users) > 0)
            @foreach($users as $user)
            <div class="col-sm-4 text-center">
                <div class="agent_wrap">
                    <div class="image">
                        <img src="/uploads/avatar/{{$user->avatar}}" alt="Agents">
                    </div>
                    <div class="agent_text">
                        <h3>{{$user->name}}</h3>
                        <p>Title: <strong>{{$user->user_type}}</strong></p>
                        <p class="bottom20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam</p>
                        <a class="btn-more" href="{{route('profile.show', $user->id)}}">
                            <i><img alt="arrow" src="images/arrowlY.png"></i><span>Contact Me</span><i><img alt="arrow" src="images/arrowrY.png"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
@endsection