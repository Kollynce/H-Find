@extends('layouts.app')

@section('content')
    @if(Request::is('login'))
        @include('welcome')
    @endif
@endsection
