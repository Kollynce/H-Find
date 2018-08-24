@extends('layouts.app')

@section('content')
    @include('inc.banner')
    @include('inc.error')
    <div class="container-3 align-items-center">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-uppercase bottom40">Add Your Property</h2>
                {!! Form::open(['route' => 'property.store', 'files'=> true]) !!}
                <div class="callus clearfix border_radius submit_property">
                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('title', 'Title')}}
                            {{Form::text('title', '',['class' => 'single-query form-group bottom20','placeholder' => 'Enter Name'])}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('location', 'Location')}}
                            {{Form::text('location', '',['class' => 'single-query form-group bottom20','placeholder' => 'Enter Location'])}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('status', 'Status')}}
                            {{Form::select('status', ['Rent' => 'Rent', 'Sale' => 'Sale'], '',['class' => 'single-query form-group bottom20','placeholder' => 'Rent/Sale'])}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('price', 'Price')}}
                            {{Form::text('price', '',['class' => 'single-query form-group bottom20','placeholder' => '40,000'])}}
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="margin40 bottom15">Propertie Photos <i class="fa fa-info-circle help"
                                                                          data-toggle="tooltip"
                                                                          title="add images to upload for property!"></i>
                        </h3>
                        <div class="col-md-12 card-body">
                            {{Form::label('property', 'Select Picture 1')}}
                            {{Form::file('image1')}}
                        </div>
                        <div class="col-md-12 card-body">
                            {{Form::label('property', 'Select Picture 2')}}
                            {{Form::file('image2')}}
                        </div>
                        <div class="col-md-12 card-body">
                            {{Form::label('property', 'Select Picture 3')}}
                            {{Form::file('image3')}}
                        </div>
                        <div class="col-md-12 card-body">
                            {{Form::label('property', 'Select Picture 4')}}
                            {{Form::file('image4')}}
                        </div>
                    </div>
                    <h3 class="bottom15 margin40">Propertie Detail</h3>
                    <div class="row">
                        <div class="col-md-4">
                            {{Form::label('size', 'Size Prefix')}}
                            {{Form::text('size', '',['class' => 'single-query form-group bottom20','placeholder' => 'Sq Ft'])}}
                        </div>
                        <div class="col-md-4">
                            {{Form::label('bedroom', 'Bedroom')}}
                            {{Form::text('bedroom', '',['class' => 'single-query form-group bottom20','placeholder' => 'Number of bedroom'])}}
                        </div>
                        <div class="col-md-4">
                            {{Form::label('bathroom', 'bathroom')}}
                            {{Form::text('bathroom', '',['class' => 'single-query form-group bottom20','placeholder' => 'Number of bathroom'])}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            {{Form::label('tv', 'Tv Lounge')}}
                            {{Form::text('tv', '',['class' => 'single-query form-group bottom20','placeholder' => 'Number of TV Lounge'])}}
                        </div>
                        <div class="col-md-4">
                            {{Form::label('garages', 'garages')}}
                            {{Form::text('garages', '',['class' => 'single-query form-group bottom20','placeholder' => 'Number of Garages'])}}
                        </div>
                        <div class="col-md-4">
                            {{Form::label('pool', 'Swimming Pool')}}
                            {{Form::text('pool', '',['class' => 'single-query form-group bottom20','placeholder' => 'Number of Swimming Pool'])}}
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="bottom15 margin40">Property Description</h3>
                        <div class="col-md-12">
                            {{Form::textarea('description', '',['class' => 'single-query form-group bottom20','placeholder' => 'Describe the property'])}}
                        </div>
                    </div>
                    <h3 class="bottom15 margin40">Property Features</h3>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    {{Form::checkbox('conditioning', 'Air Conditioning')}}
                                    {{Form::label('conditioning', 'Air Conditioning')}}
                                </li>
                                <li>
                                    {{Form::checkbox('fire', 'Fire Place')}}
                                    {{Form::label('fire', 'Fire Place')}}
                                </li>
                                <li>
                                    {{Form::checkbox('cable', 'Cable Tv')}}
                                    {{Form::label('cable', 'Cable Tv')}}
                                </li>
                                <li>
                                    {{Form::checkbox('balcony', 'Balcony')}}
                                    {{Form::label('balcony', 'Balcony')}}
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    {{Form::checkbox('gas', 'Gas Heat')}}
                                    {{Form::label('gas', 'Gas Heat')}}
                                </li>
                                <li>
                                    {{Form::checkbox('laundry', 'Laundry Room')}}
                                    {{Form::label('laundry', 'Laundry Room')}}
                                </li>
                                <li>
                                    {{Form::checkbox('yard', 'Back Yard')}}
                                    {{Form::label('yard', 'Back Yard')}}
                                </li>
                                <li>
                                    {{Form::checkbox('internet', 'Internet')}}
                                    {{Form::label('internet', 'Internet')}}
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="bottom15 margin40">Video Presentation</h3>
                        <div class="col-md-12">
                            {{Form::label('video', 'Vimeo or Youtube URL')}}
                            {{Form::text('video', '',['class' => 'single-query form-group bottom20','placeholder' => 'Http//youtube.com'])}}
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="bottom15 margin40">Place on Map</h3>
                        <div class="col-md-12">
                            {{Form::label('map', 'Property Address')}}
                            {{Form::text('address', '',['class' => 'single-query form-group bottom20','placeholder' => 'Enter Location'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{Form::submit('submit',['class' => 'btn btn-primary1 ' ])}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection