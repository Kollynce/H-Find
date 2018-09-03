@extends('layouts.app')

@section('content')
    @include('inc.slider')
    <div>
        @include('inc.deals')
        @include('inc.homeparallax')
        @include('inc.homeagents')
    </div>
@endsection