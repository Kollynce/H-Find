@extends('layouts.app')

@section('content')
    @include('inc.banner')

    <div class="container-3 align-items-center">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-uppercase bottom40">Add Your Property</h2>
                {!! Form::open(['url' => 'property.update', 'files'=> true]) !!}
                <div class="callus clearfix border_radius submit_property">
                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('title', 'Title')}}
                            {{Form::text('title', $submit->title ,['class' => 'single-query form-group bottom20','placeholder' => 'Enter Name'])}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('location', 'Location')}}
                            {{Form::text('location', $submit->location,['class' => 'single-query form-group bottom20','placeholder' => 'Enter Location'])}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('status', 'Status')}}
                            {{Form::text('status', $submit->status,['class' => 'single-query form-group bottom20'])}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('price', 'Price')}}
                            {{Form::text('price', $submit->price,['class' => 'single-query form-group bottom20'])}}
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="margin40 bottom15">Propertie Photos <i class="fa fa-info-circle help" data-toggle="tooltip" title="add images to upload for property!"></i></h3>
                        <div class="col-md-12 card-body">
                            {{Form::label('property', 'Select Picture')}}
                            {{Form::file('image')}}
                        </div>
                    </div>
                    <h3 class="bottom15 margin40">Propertie Detail</h3>
                    <div class="row">
                        <div class="col-md-4">
                            {{Form::label('size', 'Size Prefix')}}
                            {{Form::text('size', $submit->size,['class' => 'single-query form-group bottom20'])}}
                        </div>
                        <div class="col-md-4">
                            {{Form::label('bedroom', 'Bedroom')}}
                            {{Form::text('bedroom', $submit->bedroom,['class' => 'single-query form-group bottom20'])}}
                        </div>
                        <div class="col-md-4">
                            {{Form::label('bathroom', 'bathroom')}}
                            {{Form::text('bathroom', $submit->bathroom,['class' => 'single-query form-group bottom20'])}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            {{Form::label('tv', 'Tv Lounge')}}
                            {{Form::text('tv', $submit->tv,['class' => 'single-query form-group bottom20'])}}
                        </div>
                        <div class="col-md-4">
                            {{Form::label('garages', 'garages')}}
                            {{Form::text('garages', $submit->garages,['class' => 'single-query form-group bottom20'])}}
                        </div>
                        <div class="col-md-4">
                            {{Form::label('pool', 'Swimming Pool')}}
                            {{Form::text('pool', $submit->pool,['class' => 'single-query form-group bottom20'])}}
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="bottom15 margin40">Property Description</h3>
                        <div class="col-md-12">
                            {{Form::textarea('description', $submit->description,['class' => 'single-query form-group bottom20'])}}
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="bottom15 margin40">Video Presentation</h3>
                        <div class="col-md-12">
                            {{Form::label('video', 'Vimeo or Youtube URL')}}
                            {{Form::text('video', $submit->video,['class' => 'single-query form-group bottom20'])}}
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="bottom15 margin40">Place on Map</h3>
                        <div class="col-md-12">
                            {{Form::label('map', 'Property Address')}}
                            {{Form::text('address', $submit->map,['class' => 'single-query form-group bottom20'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{Form::submit('Update',['class' => 'btn btn-primary1 ' ])}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
