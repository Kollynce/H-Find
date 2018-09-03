@extends('layouts.app')

@section('content')
@include('inc.navmin')
<!-- CONTACT FORM  -->
<section class="pt-4 pb-4">
    <div class="section-header">
        <div class="text-center">
            <h2>Contact Us</h2>

            <p class="lead">Please fill the form below. we will contact you as soon as possible.</p>

        </div>

    </div>
    <div class="container">
        <div id="form-messages"></div>
        <div class="form-wrap">
            <form id="contact-form" action="{{url('contact')}}" method="post" autocomplete="off">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <input class="form-control" type="text" placeholder="Your Name" name="name" id="name"
                               required/>
                        <input class="form-control" type="text" placeholder="E-mail" name="email" id="email"
                               required/>
                        <input class="form-control" type="text" placeholder="Subject" name="subject" id="subject"
                               required/>
                    </div>
                    <div class="col-12 col-sm-6">
                        <textarea class="form-control" placeholder="Your Message" rows="7" name="message"
                                  id="message" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary bg-primary1" type="submit" value="send">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- CONTACT FORM  END -->
@endsection
